<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//クライアントへレスポンスするためのクラス
// Auth
use Illuminate\Support\Facades\Auth;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use App\Models\Activity;
use App\Models\BlogCategory;
use App\Models\RoadStation;

class AdminActivityController extends Controller
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
     * アクティビティの一覧ページ
     *
     * @return void
     */
    public function activityindex(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // 検索条件を取得
        $s = "";
        if (isset($request->s)) {
            $s = $request->s;
        }

        // アクティビティを読み込む
        if ($s != '') {
            $items = Activity::where('activity_name', 'like', '%' . $s . '%')
                ->orWhere('discription', 'like', '%' . $s . '%')
                ->get();
        } else {
            $items = Activity::where('deleted_at', null)
                ->orderBy('id', 'desc')
                ->get();
        }

        // 件数
        $activity_count = count($items);

        // Bladeファイルに渡すデータ（連想配列）
        $data = [
            'activity_list' => $items,
            'count' => $activity_count,
            'login_user' => $login_user,
        ];

        // Bladeファイルを呼び出す
        return view('cms.cms_activity_list', $data);
    }

    /**
     * newsInput function
     * 新規投稿画面を表示
     *
     * @param Request $request
     * @return void
     */
    public function activityInput(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // カテゴリー
        $blog_category_items = BlogCategory::All();
        $station_id_items = RoadStation::All();
        $data = [
            'login_user' => $login_user,
            'category_items' => $blog_category_items,
            'station_id_items' => $station_id_items,
        ];
        return view('cms.cms_activity_new', $data);
    }

    /**
     * newsCreate function
     * ニュース投稿処理
     *
     * @param Request $request
     * @return void
     */
    public function activityCreate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, Activity::$rules);

        // 登録用ニュースのインスタンスを生成
        $activity = new Activity();

        // 入力データを取得
        $form = $request->all();

        // _tokenを入力データから無くす
        unset($form['_token']);

        // インスタンスのuser_idプロパティにログイン中のユーザーIDを代入
        $activity->user_id = $login_user->id;

        // インスタンスを保存
        $activity->fill($form)->save();

        // ニュースを読み込む
        $items = Activity::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ニュースの件数
        $activity_count = count($items);

        // 渡すデータ
        $data = [
            'activity_list' => $items,
            'count' => $activity_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを読み込む
        return view('cms.cms_activity_list', $data);
    }

    /**
     * newsEdit function
     *
     * @param Request $request
     * @return void
     */
    public function activityEdit(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // idによる編集するデータを取得
        $item = Activity::find($request->id);

        // カテゴリー
        $blog_category_items = BlogCategory::All();
        $station_id_items = RoadStation::All();

        // 渡すデータ
        $data = [
            'activity' => $item,
            'category_items' => $blog_category_items,
            'station_id_items' => $station_id_items,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_activity_edit', $data);
    }

    /**
     * newsUpdate function
     * ニュース編集処理
     *
     * @param Request $request
     * @return void
     */
    public function activityUpdate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, Activity::$rules);

        // 編集する元のデータを読み込む
        $activity = Activity::find($request->id);

        // 編集結果を取得
        $form = $request->all();

        // _tokenを削除
        unset($form['_token']);

        // 更新日時を刷新
        $activity->updated_at = date("Y-m-d H:i:s");

        // インスタンスに編集結果を入れ替え、保存
        $activity->fill($form)->save();

        // ニュースを読み直す
        $items = Activity::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ニュースの件数
        $activity_count = count($items);

        // 渡すデータ
        $data = [
            'activity_list' => $items,
            'count' => $activity_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_activity_list', $data);
    }

    /**
     * Undocumented function
     * ニュースを削除
     *
     * @param Request $request
     * @return void
     */
    public function activityDelete(Request $request)
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
        DB::table('activity')->where('id', $request->id)
            ->update($param);

        // ニュースを読み直す
        $items = Activity::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ニュースの件数
        $activity_count = count($items);

        // 渡すデータ
        $data = [
            'activity_list' => $items,
            'count' => $activity_count,
            'login_user' => $login_user,
        ];

        return view('cms.cms_activity_list', $data);
    }
}
