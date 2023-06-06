<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Facility;

//クライアントへレスポンスするためのクラス
// Auth
use Illuminate\Support\Facades\Auth;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use App\Models\News;
use App\Models\NewsCategory;

class AdminNewsController extends Controller
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
     * ニュースの一覧ページ
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

        // ニュースを読み込む
        if ($s != '') {
            $items = News::where('title', 'like', '%' . $s . '%')
                ->orWhere('overview', 'like', '%' . $s . '%')
                ->orWhere('discription', 'like', '%' . $s . '%')
                ->get();
        } else {
            $items = News::where('deleted_at', null)
                ->orderBy('id', 'desc')
                ->get();
        }

        // 件数
        $news_count = count($items);

        // Bladeファイルに渡すデータ（連想配列）
        $data = [
            'news_list' => $items,
            'count' => $news_count,
            'login_user' => $login_user,
        ];

        // Bladeファイルを呼び出す
        return view('cms.cms_news_list', $data);
    }

    /**
     * newsInput function
     * 新規投稿画面を表示
     *
     * @param Request $request
     * @return void
     */
    public function newsInput(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // ニュースカテゴリー
        $category_items = NewsCategory::All();
        $data = [
            'login_user' => $login_user,
            'category_items' => $category_items
        ];
        return view('cms.cms_news_new', $data);
    }

    /**
     * newsCreate function
     * ニュース投稿処理
     *
     * @param Request $request
     * @return void
     */
    public function newsCreate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, News::$rules);

        // 登録用ニュースのインスタンスを生成
        $news = new News();

        // 入力データを取得
        $form = $request->all();

        // _tokenを入力データから無くす
        unset($form['_token']);

        // インスタンスのuser_idプロパティにログイン中のユーザーIDを代入
        $news->user_id = $login_user->id;

        // インスタンスを保存
        $news->fill($form)->save();

        // ニュースを読み込む
        $items = News::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ニュースの件数
        $news_count = count($items);

        // 渡すデータ
        $data = [
            'news_list' => $items,
            'count' => $news_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを読み込む
        return view('cms.cms_news_list', $data);
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
        $item = News::find($request->id);

        // ニュースカテゴリー
        $category_items = NewsCategory::All();

        // 渡すデータ
        $data = [
            'news' => $item,
            'category_items' => $category_items,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_news_edit', $data);
    }

    /**
     * newsUpdate function
     * ニュース編集処理
     *
     * @param Request $request
     * @return void
     */
    public function newsUpdate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, News::$rules);

        // 編集する元のデータを読み込む
        $news = News::find($request->id);

        // 編集結果を取得
        $form = $request->all();

        // _tokenを削除
        unset($form['_token']);

        // 更新日時を刷新
        $news->updated_at = date("Y-m-d H:i:s");

        // インスタンスに編集結果を入れ替え、保存
        $news->fill($form)->save();

        // ニュースを読み直す
        $items = News::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ニュースの件数
        $news_count = count($items);

        // 渡すデータ
        $data = [
            'news_list' => $items,
            'count' => $news_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_news_list', $data);
    }

    /**
     * Undocumented function
     * ニュースを削除
     *
     * @param Request $request
     * @return void
     */
    public function newsDelete(Request $request)
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
        DB::table('news')->where('id', $request->id)
            ->update($param);

        // ニュースを読み直す
        $items = News::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ニュースの件数
        $news_count = count($items);

        // 渡すデータ
        $data = [
            'news_list' => $items,
            'count' => $news_count,
            'login_user' => $login_user,
        ];

        return view('cms.cms_news_list', $data);
    }
}
