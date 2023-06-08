<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;
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
        $items = Activity::all();

        $category = BlogCategory::all();

        /**
         * $dataに$itemを代入
         */
        $data = [
            'activities' => $items,
            'blog_category' =>$category,
        ];

        /**
         * $dataをviewヘルパを使い、activity_listページに送る処理
         */
        return view('fronts.activity_list',$data);


    }
}