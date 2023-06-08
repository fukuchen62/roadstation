<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Activity;
use App\Models\ProductType;
use Illuminate\Support\Facades\DB;
use App\Models\RoadStation;
use App\Models\SpecialGoods;
use App\Models\Blog;


class Roadstation2Controller extends Controller
{
    public function stationMainView(Request $request)
    {

        $station = RoadStation::where('id', $request->id)
            ->get();

        $goods = SpecialGoods::where('road_station_id', $request->id)
            ->get();

        $meal = SpecialGoods::where('road_station_id', $request->id)
            ->where('goods_category_id', 4)
            ->get();

        $vegetable = SpecialGoods::where('road_station_id', $request->id)
            ->where('goods_category_id', 1)
            ->get();

        $fish = SpecialGoods::where('road_station_id', $request->id)
            ->where('goods_category_id', 2)
            ->get();

        $craft = SpecialGoods::where('road_station_id', $request->id)
            ->where('goods_category_id', 3)
            ->get();

        $pro = ProductType::where('station_list', $request->id)
            ->get();

        $act = Activity::where('road_station_id', $request->id)
            ->get();

        $blog = Blog::where('road_station_id', $request->id)
            ->get();

        $data = [
            'road_stations' => $station,

            'special_goods' => $goods,

            'meal' => $meal,

            'vegetable' => $vegetable,

            'fish' => $fish,

            'craft' => $craft,

            'activities' => $act,

            'product_types' => $pro,

            'blogs' => $blog,
        ];

        return view('fronts.station_detail', $data);
    }
}
