<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;





// *********** ▼▼▼ 各テーブルとリレーション ▼▼▼ ***********

    /**
     * アクティビティとリレーション
     */
    public function activity(){
        return $this->hasone(activity::class);
    }

    /**
     * カテゴリーとリレーション
     */
    public function blogCategory(){

        return $this->belongsTo('App\Models\BlogCategory');
    }


    /**
     * ロードステーションとリレーション
     */
    public function roadStation(){

        return $this->belongsTo('App\Models\RoadStation');
    }

    // protected $table = 'blogs';





    // *********** ▼▼▼ データのリターン ▼▼▼ ***********


    /**
     * ブログの記事タイトルを送るメソッド
     * （アクティビティビューで使用するため作成）
     *
     * @return void
     */
    public function getName(){
        return $this->title;
    }

    /**
     * ブログのカテゴリーidを送るメソッド
     *（関連記事の表示で使用するため作成）
     * 
     * @return void
     */
    public function getCategoryId()
    {
        return $this->blog_category_id;
    }
}