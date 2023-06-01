<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// DBクラスをインポートする
use Illuminate\Support\Facades\DB;
use App\Models\News;


class NewsController extends Controller
{

    public function newsListView(Request $request)
    {


        $items = DB::table('news')
            ->simplePaginate(6);

        $data = [
            'news' => $items,
        ];

        return view('fronts.news_list', $data);
    }


    public function newsMainView(Request $request)
    {

        // $id = $request->id;
        // $items = News::find($id);

        // $items = News::all();

        $items = DB::table('news')
            ->where('id', '=', 1)
            ->get();

        $data = [
            'news' => $items,
        ];

        return view('fronts.news', $data);
    }
}
