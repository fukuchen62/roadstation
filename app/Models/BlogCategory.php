<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    /**
     * ブログのリレーション
     */
    public function blogs(){
        return $this->hasone(Blog::class);
    }

    /**
     * 表示の値が1のブログのみ表示するメソッド
     */
    public function blogsIsShow(){
        return $this->blogs()
            ->where('is_show',1);
    }

    /**
     * 記事のカテゴリー名をビューに送るメソッド
     *
     * @return void
     */
    public function getName(){
        return $this->category_name;
    }
}