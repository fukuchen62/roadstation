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
        $id = 1;
        $items = News::find($id);
        $data = [
            'news' => $items,
        ];

        return view('fronts.news', $data);
    }
}
