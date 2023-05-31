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

        //リレーションの関数名を指定
    //     public function blogList()
    // {
    //         $items = items()->blog()->id;
    //         $blogCategories = BlogCategory::where('id',$items)->get();

    //         return view('fronts.blog_list',compact('blogCategories'));
    // }


        // public function categoryName(){
        //     // $items = Blog::with(['blogCategory.blogs'])->get();

        //     // $data = $items->blogCategory->blogs->category_name;

        //     $items = Blog::all();

        //     return view('fronts.blog_list',$items);
        // }

        // public function categoryName()
        // {
        //     $this->blogs = new blog();
    
        //     $results = $this->blogs->getCategoryNameById();
    
        //     return view('fronts.blog_list', compact(
        //         'blogs',
        //     ));
        //}
    
}