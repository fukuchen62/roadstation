<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogsCategory;

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
        // $items = Blog::all();
        // $data = [
        //     'blogs' => $items,
        // ];
        // return view('fronts.blog_list',$data);

        /**
         * 表示可能の記事からデータを取得する処理
         */
        $items = Blog::where('is_show','1')->get();

        $data = [
            'blogs' => $items,
        ];

        return view('fronts.blog_list',$data);
    }

    public function blogs(){

        $blogs = App\blogs::all();

        return view('article',compact('$blogs'));
    }
    
}