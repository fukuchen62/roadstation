<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoadStation;


class RoadstationController extends Controller
{
    public function stationMainView(Request $request)
    {
        // $items = News::all();

        // $data = [
        //     'boards' => $items,
        // ];

        // return view('board.index', $data);

        return view('fronts.station_detail');
    }
}
