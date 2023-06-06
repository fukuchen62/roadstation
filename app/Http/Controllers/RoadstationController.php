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
        // $name = RoadStation::where('id', $request->id)->get();
        $name = RoadStation::where('id', $request->id)->get();

        $goods = SpecialGoods::where('station_list', $request->id)->get();
        // $goods = SpecialGoods::all();

        $pro = ProductType::where('station_list', $request->id)->get();
        // $pro = ProductType::all();

        // $act = Activity::where('road_station_id', $request->id)->get();
        $act = Activity::where('road_station_id', $request->id)->get();


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

    public function stationDetailSearch(Request $request)
    {
        // $name = RoadStation::where('id', $request->id)->get();
        $name = RoadStation::all();

        $goods = SpecialGoods::where('station_list', $request->id)->get();
        // $goods = SpecialGoods::all();

        $pro = ProductType::where('station_list', $request->id)->get();
        // $pro = ProductType::all();

        // $act = Activity::where('road_station_id', $request->id)->get();
        $act = Activity::where('road_station_id', $request->id)->get();

        // $area = 0;
        // if (isset($_GET['east'])) {
        //     $area = 1;
        //     // var_dump($area);
        // } elseif (isset($_GET['west'])) {
        //     $area = 2;
        //     // var_dump($area);
        // } elseif (isset($_GET['south'])) {
        //     $area = 3;
        //     // var_dump($area);
        // }



        $data = [
            'road_stations' => $name,
            'activities' => $act,
            'special_goods' => $goods,
            'product_types' => $pro,
            // 'station_area' => $area,
        ];
        return view('fronts.station_search', $data);
    }

    public function stationAreaSearch(Request $request)
    {
        // $name = RoadStation::where('id', $request->id)->get();
        $name = RoadStation::all();

        $goods = SpecialGoods::where('station_list', $request->id)->get();
        // $goods = SpecialGoods::all();

        $pro = ProductType::where('station_list', $request->id)->get();
        // $pro = ProductType::all();

        // $act = Activity::where('road_station_id', $request->id)->get();
        $act = Activity::where('road_station_id', $request->id)->get();

        // $area = 0;
        // if (isset($_GET['east'])) {
        //     $area = 1;
        //     // var_dump($area);
        // } elseif (isset($_GET['west'])) {
        //     $area = 2;
        //     // var_dump($area);
        // } elseif (isset($_GET['south'])) {
        //     $area = 3;
        //     // var_dump($area);
        // }



        $data = [
            'road_stations' => $name,
            'activities' => $act,
            'special_goods' => $goods,
            'product_types' => $pro,
            // 'station_area' => $area,
        ];
        return view('fronts.station_area', $data);
    }
}
