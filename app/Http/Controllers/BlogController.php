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
     * （制作者：小山）
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
         * 2.$blogに取得したidのデータを代入
         */
        $blog = Blog::find($request->id);

        // ブログのカテゴリIDを取得
        $blog_category_id = $blog->blog_category_id;

        /**
         * 関連記事の検索と取得
         * （制作者：小山）
         *
         * 1.リクエスト時blog_tableのblog_category_idを検索
         * 2.リクエスト済みの本文を除外
         * 3.さらにis_showが1のデータを検索
         * 4.idの値が大きいものから順番に整列
         * 5.ページネーションを利用し、データを2つ取得
         * 6.取得したデータを第一引数idに代入
         * 7.第一引数idを$itemsに代入
         */
        $items = Blog::where('blog_category_id', $blog_category_id)
            ->wherenot('id', $request->id)
            ->where('is_show', 1)
            ->orderby('created_at', 'DESC')
            ->limit(2)
            ->get();
        // var_dump($items);
        // dump($items);

        /**
         * $categoryにblog_categoriesのデータをすべて代入（初期化）
         * 制作者：小山
         */
        $categories = BlogCategory::all();

        /**
         * $dataにblogとcategories、blog_categoriesを代入初期化・二次元配列）
         * 制作者：小山
         * 値$blogは記事本文（カテゴリー一覧と関連記事を除く）に使用
         * 値$itemsは関連記事の表示に使用
         * 値$categoryはカテゴリー一覧の表示に使用
         */
        $data = [
            'blog' => $blog,
            'recommend_blogs' => $items,
            'blog_categories' => $categories,
            // 'id_list' => $id_list,
        ];
        // var_dump($data);

        /**
         * $dataをviewヘルパを使い、blog_listページに送る処理
         * （制作者：小山）
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

        // fukushima Mod 2023-06-14 Start

        // if ($request->id == 1) {
        //     $items = Blog::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->where('blog_category_id', 1)
        //         ->orderby('id', 'DESC')
        //         ->Paginate(4);
        // } elseif ($request->id == 2) {
        //     $items = Blog::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->where('blog_category_id', 2)
        //         ->orderby('id', 'DESC')
        //         ->Paginate(4);
        // } elseif ($request->id == 3) {
        //     $items = Blog::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->where('blog_category_id', 3)
        //         ->orderby('id', 'DESC')
        //         ->Paginate(4);
        // } else {
        //     $items = Blog::where('deleted_at', null)
        //         ->where('is_show', 1)
        //         ->orderby('id', 'DESC')
        //         ->Paginate(4);
        // }

        // カテゴリーIDを取得
        $category_id = 0;
        if (isset($request->category_id)) {
            $category_id = $request->category_id;
        }

        $count = 0;
        if ($category_id != 0) {
            // 指定IDでブログ記事を読み込む
            $items = Blog::where('blog_category_id', $category_id)
                ->where('deleted_at', null)
                ->where('is_show', 1)
                ->orderby('id', 'DESC')
                ->Paginate(4);

            // 件数を取得
            $count = Blog::where('blog_category_id', $category_id)
                ->where('deleted_at', null)
                ->where('is_show', 1)
                ->count();
        } else {
            // すべての記事を読み込む
            $items = Blog::where('deleted_at', null)
                ->where('is_show', 1)
                ->orderby('id', 'DESC')
                ->Paginate(4);
            // 件数を取得
            $count = Blog::where('deleted_at', null)
                ->where('is_show', 1)
                ->count();
        }
        // fukushima Mod 2023-06-14 End

        /**
         * $categoryにblog_categoriesのデータをすべて代入
         */
        $category = BlogCategory::all();

        /**
         * $dataにblogとblog_categoriesを代入
         * （二次元配列）
         */
        $data = [
            'blogs' => $items,
            'blog_categories' => $category,
            'count' => $count,
        ];

        /**
         * $dataをviewヘルパを使い、blog_listページに送る処理
         */
        return view('fronts.blog_list', $data);
    }
}
