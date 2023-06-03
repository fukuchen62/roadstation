<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{


    /**
     * blogMainView function
     * ブログ記事（本文と関連記事）の取得と表示
     *
     * @param Request $request
     * @return void
     */
public function blogMainView(Request $request)
{

    /**
     * ブログ記事（本文）の検索と取得
     * 
     * 1.リクエストされたblogs_tableのidを検索し取得
     * 2.$itemに取得したidのデータを代入
     */
    $item = Blog::where('id', $request->id)
    ->get();

    /**
     * 関連記事の検索と取得
     * 
     * 1.リクエストされたblog_tableのblog_category_idを検索
     * 2.さらにis_showが1のデータを検索
     * idの値が大きいものから順番に整列
     * ページネーションを利用し、データを2つ取得
     * 取得したデータを第一引数idに代入
     * 第一引数idを$itemsに代入
     */
    $items = Blog::where('blog_category_id',$request->blog_category_id)
    ->where('is_show', 1)
    ->orderby('id', 'DESC')
    ->simplePaginate(2);


    /**
     * $categoryにblog_categoriesのデータをすべて代入
     * （初期化）
     */
    $category = BlogCategory::all();

    /**
         * $dataにblogとcategories、blog_categoriesを代入
         * （初期化・二次元配列）
         */
    $data = [
        'blogs' => $item,
        'categories' => $items,
        'blog_categories' => $category,
    ];

    /**
     * $dataをviewヘルパを使い、blog_listページに送る処理
     */
    return view('fronts.article', $data);
}






/**
 * blogListSearch function
 * ブログ記事一覧の表示
 *
 * @param Request $request
 * @return void
 */
public function blogListSearch(Request $request)
{
        /**
         * データから表示可能の記事を取得
         */
        // $items = Blog::where('is_show',1)->get();

        /***
         * データベースから表示できる記事を取得
         * 
         * 【ifelse文の解説】
         * 
         * idと数字が同じ場合、下記を順番に行う
         * 1.deleted_atの値が、nullのものを検索
         * 2.blogs_tableからis_showと同じ数字のデータを検索
         * 3.blogs_tableからblog_category_idと同じ数字のデータを検索
         * 4.検索結果より、1と2の条件をみたすデータを取得
         * 5.取得したデータをidの大きいものから順番に並べる
         * 6.取得したデータが6以上ならページネーションを行う
         */
        if ($request->id == 1) {
            $items = Blog::where('deleted_at', null)
                ->where('is_show', 1)
                ->where('blog_category_id', 1)
                ->orderby('id', 'DESC')
                ->simplePaginate(6);
        } elseif ($request->id == 2) {
            $items = Blog::where('deleted_at', null)
                ->where('is_show', 1)
                ->where('blog_category_id', 2)
                ->orderby('id', 'DESC')
                ->simplePaginate(6);
        } elseif ($request->id == 3) {
            $items = Blog::where('deleted_at', null)
                ->where('is_show', 1)
                ->where('blog_category_id', 3)
                ->orderby('id', 'DESC')
                ->simplePaginate(6);
        } else {
            $items = Blog::where('deleted_at', null)
                ->where('is_show', 1)
                ->orderby('id', 'DESC')
                ->simplePaginate(6);
        }

        /**
         * $categoryにblog_categoriesのデータをすべて代入
         * （初期化）
         */
        $category = BlogCategory::all();

        /**
         * $dataにblogとblog_categoriesを代入
         * （初期化・二次元配列）
         */
        $data = [
            'blogs' => $items,
            'blog_categories' => $category,
        ];

        /**
         * $dataをviewヘルパを使い、blog_listページに送る処理
         */
        return view('fronts.blog_list',$data);
}
}