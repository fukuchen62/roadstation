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

        $goods = SpecialGoods::where('road_station_id', $request->id)->get();
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
        $items = [];

        if (isset($request->area)) {
            foreach ($request->area as $val) {
                if ($val == 1) {
                    $items = RoadStation::where('area_id', 1)
                        ->orderby('station_name', 'DESC')
                        ->get();
                } elseif ($request->area == 2) {
                    $items = RoadStation::where('area_id', 2)
                        ->orderby('station_name', 'DESC')
                        ->get();
                } elseif ($request->area == 3) {
                    $items = RoadStation::where('area_id', 3)
                        ->orderby('station_name', 'DESC')
                        ->get();
                } else {
                    // $items = RoadStation::all();
                    $items = [];
                }
            }
        }

        $data = [
            // 'road_stations' => $name,
            // 'activities' => $act,
            // 'special_goods' => $goods,
            // 'product_types' => $pro,
            'search' => $items,
        ];

        return view('fronts.station_search', $data);
    }


    public function stationAreaSearch(Request $request)
    {
        $items = "";
        // // $name = RoadStation::where('id', $request->id)->get();
        // $name = RoadStation::all();

        // $goods = SpecialGoods::where('road_station_id', $request->id)->get();
        // // $goods = SpecialGoods::all();

        // $pro = ProductType::where('station_list', $request->id)->get();
        // // $pro = ProductType::all();

        // // $act = Activity::where('road_station_id', $request->id)->get();
        // $act = Activity::where('road_station_id', $request->id)->get();

        if ($request->area == "east") {
            $items = RoadStation::where('area_id', 1)
                ->orderby('station_name', 'DESC')
                ->get();
        } elseif ($request->area == "west") {
            $items = RoadStation::where('area_id', 2)
                ->orderby('station_name', 'DESC')
                ->get();
        } elseif ($request->area == "south") {
            $items = RoadStation::where('area_id', 3)
                ->orderby('station_name', 'DESC')
                ->get();
        } else {
            // $items = RoadStation::all();
            $items = [];
        }



        $data = [
            // 'road_stations' => $name,
            // 'activities' => $act,
            // 'special_goods' => $goods,
            // 'product_types' => $pro,
            'search' => $items,
        ];
        return view('fronts.station_area', $data);
    }
}
