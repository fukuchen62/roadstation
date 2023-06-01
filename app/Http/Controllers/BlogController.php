<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogsCategory;

class BlogController extends Controller
{
        public function blogMainView(Request $request)
    {
        // $items = Blog::all();

        $items = Blog::where('id', $request->id)
            ->get();

        $data = [
            'blogs' => $items,
        ];

        return view('fronts.article',$data);
    }

        public function blogListSearch(Request $request)
    {

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

    /**
     * ページネーションを表示する処理
     *
     * @param Request $request
     * @return void
     */
    // public function page(Request $request)
    // {

    //     $items = Blog::simplePaginate(6);

    //     return view('blog', ['items' => $items ]);
    // }
    
}