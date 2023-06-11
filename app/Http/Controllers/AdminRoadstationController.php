<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

// DBクラスをインポートする
use Illuminate\Support\Facades\DB;

use App\Models\RoadStation;
use App\Models\Area;

class AdminRoadstationController extends Controller
{
    // newsのものをまねる。
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // ログインチェック
        $this->middleware('auth');
    }

    /**
     *
     * 道の駅の一覧ページ
     *
     * @return void
     */
    public function stationIndex(Request $request)
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
            $items = RoadStation::where('ruby', 'like', '%' . $s . '%')
                ->orWhere('overview', 'like', '%' . $s . '%')
                ->orWhere('discription', 'like', '%' . $s . '%')
                ->get();
        } else {
            $items = RoadStation::where('deleted_at', null)
                ->orderBy('id', 'desc')
                ->get();
        }

        // 件数
        $station_count = count($items);

        // Bladeファイルに渡すデータ（連想配列）
        $data = [
            'road_stations' => $items,
            'count' => $station_count,
            'login_user' => $login_user,
        ];

        // Bladeファイルを呼び出す
        return view('cms.cms_road_station_list', $data);
    }


    /**
     * newsInput function
     * 新規投稿画面を表示
     *
     * @param Request $request
     * @return void
     */
    public function stationInput(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // ニュースカテゴリー
        $category_items = Area::All();
        $data = [
            'login_user' => $login_user,
            'category_items' => $category_items
        ];
        return view('cms.cms_road_station_new', $data);
    }

    /**
     * newsCreate function
     * 道の駅登録処理
     *
     * @param Request $request
     * @return void
     */
    public function stationCreate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, RoadStation::$rules);

        // 登録用ニュースのインスタンスを生成
        $news = new Roadstation();

        // 入力データを取得
        $form = $request->all();

        // _tokenを入力データから無くす
        unset($form['_token']);

        // インスタンスのuser_idプロパティにログイン中のユーザーIDを代入
        $news->user_id = $login_user->id;

        // インスタンスを保存
        $news->fill($form)->save();

        // ニュースを読み込む
        $items = RoadStation::where('deleted_at', null)
            ->orderBy('id', 'desc')
            ->get();

        // ニュースの件数
        $news_count = count($items);

        // 渡すデータ
        $data = [
            'road_stations' => $items,
            'count' => $news_count,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを読み込む
        return view('cms.cms_road_station_list', $data);
    }

    /**
     * 道の駅Edit function
     *
     * @param Request $request
     * @return void
     */
    public function stationEdit(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // idによる編集するデータを取得
        $item = RoadStation::find($request->id);

        // ニュースカテゴリー
        $category_items = Area::All();

        // 渡すデータ
        $data = [
            'road_stations' => $item,
            'area' => $category_items,
            'login_user' => $login_user,
        ];

        // ブレッドファイルを呼び出す
        return view('cms.cms_road_station_edit', $data);
    }

    /**
     * 道の駅Update function
     * 道の駅編集処理
     *
     * @param Request $request
     * @return void
     */
    public function stationUpdate(Request $request)
    {
        // ログインユーザーの情報取得
        $login_user = Auth::user();

        // バリデーション
        $this->validate($request, RoadStation::$rules);

        // 編集する元のデータを読み込む
        $news = RoadStation::find($request->id);

        // 編集結果を取得
        $form = $request->all();

        // _tokenを削除
        unset($form['_token']);

        // 更新日時を刷新
        $news->updated_at = date("Y-m-d H:i:s");

        // インスタンスに編集結果を入れ替え、保存
        $news->fill($form)->save();

        // ニュースを読み直す
        $items = RoadStation::where('deleted_at', null)
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
        return view('cms.cms_road_station_list', $data);
    }
    /**
     * Undocumented function
     *道の駅消去
     * @param Request $request
     * @return void
     */
    public function stationDelete(Request $request)
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
        DB::table('road_stations')->where('id', $request->id)
            ->update($param);

        // ニュースを読み直す
        $items = RoadStation::where('deleted_at', null)
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

        return view('cms.cms_road_station_list', $data);
    }
}
