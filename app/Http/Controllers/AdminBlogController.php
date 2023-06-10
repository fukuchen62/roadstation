<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Facility;

//クライアントへレスポンスするためのクラス
// Auth
use Illuminate\Support\Facades\Auth;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use App\Models\Blog;
use App\Models\BlogCategory;

class AdminBlogController extends Controller
{
        /**
     * コンストラクタ
     */
    public function __construct()
    {
        // ログインチェック
        $this->middleware('auth');
    }

    /**
     * index function
     * ブログの一覧ページ
     *
     * @return void
     */
    public function index(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // 検索条件を取得
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        // ブログを読み込む
        if ($s != '') {
            $items = Blog::where('title', 'like', '%' . $s . '%')
                ->orWhere('overview', 'like', '%' . $s . '%')
                ->orWhere('discription', 'like', '%' . $s . '%')
                ->get();
        } else {
            $items = Blog::where('deleted_at', null)
                ->orderBy('id', 'desc')
                ->get();
        }

        // 件数
        $news_count = count($items);

        // Bladeファイルに渡すデータ（連想配列）
        $data = [
            'blog_list' => $items,
            'count' => $blog_count,
            'login_user' => $login_user,
        ];

        // Bladeファイルを呼び出す
        return view('cms.cms_blog_list', $data);
    }

    /**
     * blogInput function
     * 新規投稿画面を表示
     *
     * @param Request $request
     * @return void
     */
    public function blogInput(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // ブログカテゴリー
        $category_items = blogCategory::All();
        $data = [
            'login_user' => $login_user,
            'category_items' => $category_items
        ];
        return view('cms.cms_blog_new', $data);
    }

    /**
     * blogCreate function
     * ブログ投稿処理
     *
     * @param Request $request
     * @return void
     */
    public function blogCreate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, blog::$rules);

        // 登録用ブログのインスタンスを生成
        $blog = new Blog();

        // 入力データを取得
        $form = $request->all();

        // _tokenを入力データから無くす
        unset($form['_token']);

        // インスタンスのuser_idプロパティにログイン中のユーザーIDを代入
        $blog->user_id = $login_user->id;

        // インスタンスを保存
        $blog->fill($form)->save();

        // ブログを読み込む
        $items = blog::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ブログの件数
        $blog_count = count($items);

        // 渡すデータ
        $data = [
            'blog_list' => $items,
            'count' => $blog_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを読み込む
        return view('cms.cms_blog_list', $data);
    }

    /**
     * newsEdit function
     *
     * @param Request $request
     * @return void
     */
    public function newsEdit(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // idによる編集するデータを取得
        $item = Blog::find($request->id);

        // ブログカテゴリー
        $category_items = BlogCategory::All();

        // 渡すデータ
        $data = [
            'blog' => $item,
            'category_items' => $category_items,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_blog_edit', $data);
    }

    /**
     * newsUpdate function
     * ブログ編集処理
     *
     * @param Request $request
     * @return void
     */
    public function blogUpdate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, News::$rules);

        // 編集する元のデータを読み込む
        $blog = News::find($request->id);

        // 編集結果を取得
        $form = $request->all();

        // _tokenを削除
        unset($form['_token']);

        // 更新日時を刷新
        $blog->updated_at = date("Y-m-d H:i:s");

        // インスタンスに編集結果を入れ替え、保存
        $blog->fill($form)->save();

        // ブログを読み直す
        $items = Blog::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ブログの件数
        $blog_count = count($items);

        // 渡すデータ
        $data = [
            'blog_list' => $items,
            'count' => $blog_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_blog_list', $data);
    }

    /**
     * Undocumented function
     * ブログを削除
     *
     * @param Request $request
     * @return void
     */
    public function blogDelete(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // News::find($request->id)->delete();

        // 論理削除処理
        // deleted_atフィル―ドに現在の日時を代入
        $param = [
            'deleted_at' => date("Y-m-d H:i:s"),
        ];

        // DBクリエターで更新処理
        DB::table('blogs')->where('id', $request->id)
            ->update($param);

        // ブログを読み直す
        $items = Blog::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ブログの件数
        $blog_count = count($items);

        // 渡すデータ
        $data = [
            'blog_list' => $items,
            'count' => $news_count,
            'login_user' => $login_user,
        ];

        return view('cms.cms_blog_list', $data);
    }
}