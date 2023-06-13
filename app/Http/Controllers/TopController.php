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
        // Newsテーブルから、表示のニュースを昇順に取得

        $news = News::orderBy('id', 'desc')
            // 最新３件取得
            ->paginate(3)
            ->all();

        // brogsテーブルから、表示のブログを昇順に取得
        $blogs = Blog::orderBy('id', 'desc')
            // 最新３件取得
            ->paginate(3)
            ->all();

        $data = [
            'news' => $news,
            'blog' => $blogs,
        ];

        return view('fronts.index', $data);
    }

    public function about(Request $request)
    {
        return view('fronts.about');
    }

    public function privacy(Request $request)
    {
        return view('fronts.privacy_policy');
    }
}
