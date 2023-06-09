<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;
use App\Models\Blog;
use App\Models\BlogCategory;

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
        // $items = Activity::all();
        $items = Activity::where('deleted_at', null)
                ->where('is_show', 1)
                ->orderby('created_at', 'DESC')
                ->simplePaginate(6);

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