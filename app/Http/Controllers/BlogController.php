<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

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

        // $item = \DB::table('blogs')->where('is_show','1')->get();

        // $data = [
        //     'blogs' => $items,
        // ];

        // return view('fronts.blog_list',$data);

        $items = Blog::where('is_show','1')->get();

        $data = [
            'blogs' => $items,
        ];

        return view('fronts.blog_list',$data);
    }

        //withCountにリレーションの関数名を指定
        public function blogList()
    {
            $items = items()->blog()->id;
            $blogCategories = BlogCategory::where('id',$items)->get();

            return view('fronts.blog_list',compact('blogCategories'));
    }
}