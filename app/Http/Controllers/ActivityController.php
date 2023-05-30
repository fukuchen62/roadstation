<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activityMainView(Request $request)
    {
        $items = Activity::all();

        $data = [
            'activities' => $items,
        ];

        return view('fronts.activity_list',$data);
    }
}