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
            'road_station_list' => $items,
            'count' => $station_count,
            'login_user' => $login_user,
        ];

        // Bladeファイルを呼び出す
        return view('cms.cms_road_station_list', $data);
    }
}
