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
        $sort = $request->sort;

        $items = News::where('deleted_at', null)
            // ->where('is_show', 1)
            ->orderby('id', 'DESC')
            // ->orderby('id', 'ASC')
            ->paginate(6);
        // ->get();

        $category = NewsCategory::all();

        $data = [
            'news' => $items,
            'news_categories' => $category,
            'sort' => $sort,
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
