<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoadStation;
use App\Models\SpecialGoods;
use App\Models\Area;

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
        $area = $request->area;
        // if ($request->area) {
        //     $area = $request->area;
        //     foreach ($area as $val) {
        //         $areas = $val;
        //     }
        //     $items = RoadStation::where('area_id', $areas)
        //         ->get();
        // }
        $items = RoadStation::all();

        $data = [
            // 'road_stations' => $name,
            // 'activities' => $act,
            // 'special_goods' => $goods,
            // 'product_types' => $pro,
            'count' => $area,
            'search' => $items,
        ];

        return view('fronts.station_search', $data);
    }


    public function stationAreaSearch(Request $request)
    {
        // $items = "";

        // if (isset($request->id)) {
        //     $name = RoadStation::where('area_id', $request->id)->get();


        //     $goods = SpecialGoods::where('road_station_id', $request->id)->get();
        //     // $goods = SpecialGoods::all();

        //     $pro = ProductType::where('station_list', $request->id)->get();
        //     // $pro = ProductType::all();

        //     // $act = Activity::where('road_station_id', $request->id)->get();
        //     $act = Activity::where('road_station_id', $request->id)->get();
        //     // $area = Area::where('id', 1)->get();
        //     $data = [
        //         'road_stations' => $name,
        //         'activities' => $act,
        //         'special_goods' => $goods,
        //         'product_types' => $pro,
        //         // 'area' => $area,
        //         // 'search' => $items,
        //     ];
        // } else {
        //     $name = RoadStation::where('area_id', 1)->get();
        //     $data = [
        //         'road_stations' => $name,
        //         // 'area' => $area,
        //         // 'search' => $items,
        //     ];
        // }

        $area_id = 1;
        if (isset($request->area_id)) {
            $area_id = $request->area_id;
        }
        $items = RoadStation::where('area_id', $area_id)
            ->where('is_show', 1)
            ->where('deleted_at', null)
            ->orderby('ruby', 'DESC')
            ->paginate(6);

        // $area = Area::where('id', $area_id)->get();
        $area = Area::find($area_id);

        $count  = RoadStation::where('area_id', $area_id)
            ->where('is_show', 1)
            ->where('deleted_at', null)
            ->count();

        // if ($request->area == "east") {
        //     $items = RoadStation::where('area_id', 1)
        //         ->orderby('station_name', 'DESC')
        //         ->paginate(6);
        //     $area = Area::where('id', 1)->get();
        // } elseif ($request->area == "west") {
        //     $items = RoadStation::where('area_id', 2)
        //         ->orderby('station_name', 'DESC')
        //         ->paginate(6);
        //     $area = Area::where('id', 2)->get();
        // } elseif ($request->area == "south") {
        //     $items = RoadStation::where('area_id', 3)
        //         ->orderby('station_name', 'DESC')
        //         ->paginate(6);
        //     $area = Area::where('id', 3)->get();
        // } else {
        //     // $items = RoadStation::all();
        //     $items = RoadStation::where('area_id', 1)
        //         ->orderby('station_name', 'DESC')
        //         ->paginate(6);
        //     $area = Area::where('id', 1)->get();
        // }

        $data = [
            // 'road_stations' => $name,
            // 'activities' => $act,
            // 'special_goods' => $goods,
            // 'product_types' => $pro,
            'com' => $count,
            'area' => $area,
            'search' => $items,
        ];
        return view('fronts.station_area', $data);
    }
}
