<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;




    // *********** ▼▼▼ 各テーブルとリレーション ▼▼▼ ***********

    /**
     * ブログとリレーション
     * （ / 作成者：小山）
     */
    // public function blogs(){
    //     return $this->hasone(Blog::class);
    // }

    /**
     * ブログとリレーション
     * （ / 作成者：小山）
     */
    // public function blogs(){
    //     return $this->hasMany(Blog::class);
    // }




    // *************** ▼▼▼ データのリターン ▼▼▼ ***************

    /**
     * 表示の値が1のブログのみ表示するメソッド
     */
    // public function blogsIsShow(){
    //     return $this->blogs()
    //         ->where('is_show',1);
    // }

    /**
     * blog_categoriesテーブルのカテゴリー名をビューに送るメソッド
     * （ブログ記事一覧と各ブログ記事で使用するため作成 / 作成者：小山）
     *
     * @return void
     */
    public function getName(){
        return $this->category_name;
    }

    /**
     *blog_categoriesテーブルのidをビューに送るメソッド
     *ルート設定の確認テストで使用するため作成
     *作成者：小山
     *
     * @return void
     */
    public function getId(){
        return $this->id;
    }
}