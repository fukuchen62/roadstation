<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoadStation;


class RoadstationController extends Controller
{
    public function stationMainView(Request $request)
    {
        // $items = RoadStation::all();

        // $data = [
        //     'road_stations' => $items,
        // ];

        $name = RoadStation::where('id', 4)->get();

        $outName = [
            'road_stations' => $name,
        ];

        // return view('fronts.station_detail', $data, $outName);
        return view('fronts.station_detail', $outName);
    }
}
