<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoadStation;


class RoadstationController extends Controller
{
    public function stationMainView(Request $request)
    {
        $items = RoadStation::where('id', 4)->get();

        $data = [
            'road_stations' => $items,
        ];

        return view('fronts.station_detail', $data);
    }
}
