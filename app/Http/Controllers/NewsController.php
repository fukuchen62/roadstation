<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// DBクラスをインポートする
use Illuminate\Support\Facades\DB;
use App\Models\News;


class NewsController extends Controller
{

    public function newsMainView(Request $request)
    {
        $items = News::all();

        $data = [
            'news' => $items,
        ];

        return view('fronts.news', $data);
    }
}
