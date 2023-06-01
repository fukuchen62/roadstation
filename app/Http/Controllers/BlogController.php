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

        /**
         * データから指定のidを基に記事を取得する処理
         */
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
         * データから表示可能の記事を取得する処理
         */
        $items = Blog::where('is_show','1')->get();

        $data = [
            'blogs' => $items,
        ];

        return view('fronts.blog_list',$data);
    }

    /**
     * blogs_tableの全てのデータを配列にしてブログ記事に渡す処理
     *
     * @return void
     */
    // public function blogs(){

    //     $blogs = App\blogs::all();

    //     return view('article',compact('$blogs'));
    // }

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