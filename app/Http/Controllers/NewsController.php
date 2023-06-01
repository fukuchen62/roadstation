<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// DBクラスをインポートする
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\NewsCategory;


class NewsController extends Controller
{

    /**
     * newsListView function
     * news一覧ページの表示
     *
     * @param Request $request
     * @return void
     */
    public function newsListView(Request $request)
    {
        $items = DB::table('news')
            ->simplePaginate(6);

        $category = DB::table('news_categories')
            ->get();

        $data = [
            'news' => $items,
            'news_categories' => $category,
        ];

        return view('fronts.news_list', $data);
    }


    /**
     * newsMainView function
     * news詳細ページの表示
     *
     * @param Request $request
     * @return void
     */
    public function newsMainView(Request $request)
    {

        // $items = News::all();
        // $id = $request->id;
        // $items = News::find($id);

        $item = DB::table('news')
            ->where('id', $request->id)
            ->get();

        $data = [
            'news' => $item,
        ];

        return view('fronts.news', $data);
    }
}
