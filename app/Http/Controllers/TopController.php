<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategories;
use App\Models\Blog;

class TopController extends Controller
{
    public function index(Request $request)
    {
        // Newsテーブルから、表示のニュースを取得

        $news = News::orderBy('id', 'desc')
            ->paginate(3)
            ->all();

        // brogsテーブルから、表示のブログを取得
        $blogs = Blog::orderBy('id', 'desc')
            ->paginate(3)
            ->all();

        $data = [
            'news' => $news,
            'blog' => $blogs,
        ];

        return view('fronts.index', $data);
    }
}
