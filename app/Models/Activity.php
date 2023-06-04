<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;


    // public function activities()
    // {
    //     return $this->belongsTo('App\Models\activity');
    // }

    /**
     * ブログモデルとリレーション
     * （アクティビティ一覧にブログ記事のidを送るため作成/作成者：小山）
     */
    public function blog(){

        return $this->belongsTo('App\Models\Blog');
    }

    //protected $table = 'activities';

    /**
     * ロードステーションモデルとリレーション
     * （アクティビティ一覧に道の駅名を表示するため作成/作成者：小山）
     * 
     */
    public function roadStation(){

        return $this->belongsTo('App\Models\RoadStation');
    }

    protected $table = 'activities';


    /**
     * ブログのカテゴリーidを取得し送るメソッド
     *（ブログ記事内の関連記事を表示するため作成/作成者：小山）
     * 
     * @return void
     */
    public function getCategoryId()
    {
        return $this->blog_category_id;
    }
}