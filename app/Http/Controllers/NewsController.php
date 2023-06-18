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
        $count = 0;

        if (isset($request->news_category_id)) {

            $items = News::where('news_category_id', $request->news_category_id)
                ->where('deleted_at', null)
                ->where('is_show', 1)
                ->orderby('id', 'DESC')
                ->paginate(4);

            // 件数を取得
            $count = News::where('blog_category_id', $request->news_category_id)
                ->where('deleted_at', null)
                ->where('is_show', 1)
                ->count();
        } else {
            $items = News::where('deleted_at', null)
                ->where('is_show', 1)
                ->orderby('id', 'DESC')
                ->paginate(4);

            $count = News::where('deleted_at', null)
                ->where('is_show', 1)
                ->count();
        }


        // if ($request->news_category_id == 1) {

        //     $items = News::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->where('news_category_id', 1)
        //         ->orderby('id', 'DESC')
        //         ->paginate(4);
        // } elseif ($request->news_category_id == 2) {
        //     $items = News::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->where('news_category_id', 2)
        //         ->orderby('id', 'DESC')
        //         ->paginate(4);
        // } elseif ($request->news_category_id == 3) {
        //     $items = News::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->where('news_category_id', 3)
        //         ->orderby('id', 'DESC')
        //         ->paginate(4);
        // } else {
        //     $items = News::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->orderby('id', 'DESC')
        //         ->paginate(4);
        // }

        $category = NewsCategory::all();

        $data = [
            'news' => $items,
            'news_categories' => $category,
            'count' => $count,
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
        $item = News::find($request->id);

        $items = News::where('news_category_id', $request->news_category_id)
            ->wherenot('id', $request->id)
            ->where('is_show', 1)
            ->orderby('id', 'DESC')
            ->simplePaginate(2);

        $category = NewsCategory::all();

        $data = [
            'news_item' => $item,
            'categories' => $items,
            'news_categories' => $category,
        ];

        return view('fronts.news', $data);
    }
}
