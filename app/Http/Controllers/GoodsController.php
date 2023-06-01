<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SpecialGoods;
use App\Models\ProductType;
use App\Models\RoadStation;

class GoodsController extends Controller
{
    public function goodsMainView(Request $request)
    {

        // ProductTyepsテーブルから、全ての特産品の種別を取得
        $items = ProductType::orderBy('goods_category_id', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        // 関連道の駅IDリストを取得して、配列に代入
        $id_list = array();
        foreach ($items as $item) {
            $station_list = $item->station_list;
            // 文字列から配列に変換
            $id_list = explode("|", $station_list);
        }

        // 道の駅IDから道の駅名を取得する
        foreach ($id_list as $id) {
            $station = RoadStation::find($id);
            $name = $station->station_name;
            // 取得した道の駅名を配列に代入
            $name_list[] = $name;
        }


        $data = [
            'goods_type' => $items,
            'station_id' => $id_list,
            'station_name' => $name_list,
        ];
        return view('fronts.goods_list', $data);
    }
}
