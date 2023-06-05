<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    /**
     * activityMainView function
     * アクティビティ一覧の表示
     *
     * @param Request $request
     * @return void
     */
    public function activityMainView(Request $request)
    {
        /**
         * データの取得
         * 
         * 1.データベースからactivitiesテーブルのデータを全て取得
         * 2.$itemにデータを代入
         */
        $items = Activity::all();

        /**
         * $dataに$itemを代入
         */
        $data = [
            'activities' => $items,
        ];

        /**
         * $dataをviewヘルパを使い、activity_listページに送る処理
         */
        return view('fronts.activity_list',$data);
    }
}