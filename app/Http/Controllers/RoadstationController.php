<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoadStation;
use App\Models\SpecialGoods;

class RoadstationController extends Controller
{
    public function stationMainView(Request $request)
    {
        $name = RoadStation::where('id', 1)->get();
        $goods = SpecialGoods::where('station_list', 1)->get();
        $pro = ProductType::where('station_list', 1)->get();
        $act = Activity::where('road_station_id', 1)->get();
        $data = [
            'road_stations' => $name,
            'activities' => $act,
            'special_goods' => $goods,
            'product_types' => $pro,
        ];

        // return view('fronts.station_detail', $data, $outName);
        return view('fronts.station_detail', $data);
    }
    public function stationListView(Request $request)
    {
        $items = RoadStation::get();
        $data = [
            'road_stations' => $items,
        ];
        return view('fronts.station_list', $data);
    }
}
