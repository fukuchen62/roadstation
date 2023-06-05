<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategories;

class TopController extends Controller
{
    public function index(Request $request)
    {
        // Newsテーブルから、全てのニュースの種別を取得
        $items = News::orderBy('id', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $category = News::where('news_category_id')
            ->get();

        $data = [
            'news' => $items,
            'category' => $category,
        ];

        return view('fronts.index', $data);
    }
}
