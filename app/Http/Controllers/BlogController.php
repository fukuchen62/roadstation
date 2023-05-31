<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
        public function blogMainView(Request $request)
    {
        $items = Blog::all();

        $data = [
            'blogs' => $items,
        ];

        return view('fronts.article',$data);
    }

        public function blogListSearch(Request $request)
    {
        $items = Blog::all();

        $data = [
            'blogs' => $items,
        ];

        return view('fronts.blog_list',$data);
    }

    
}