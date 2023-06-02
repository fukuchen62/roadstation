<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //use HasFactory;

    /**
     * カテゴリーとリレーション
     */
    public function blogCategory(){

        return $this->belongsTo('App\Models\BlogCategory');
    }

    // protected $table = 'blogs';
    
    /**
     * アクティビティとリレーション
     */
    public function activity(){
        return $this->hasone(activity::class);
    }

        /**
     * 記事タイトルをビュー（アクティビティ）に送るメソッド
     *
     * @return void
     */
    public function getName(){
        return $this->title;
    }

    /**
     * blogs_tableのデータ全てをビュー（アーティクル）に送るメソッド
     *
     * @return void
     */
    public function getData(){
        return $this->item;
    }

    /**
     * ロードステーションとリレーション
     */
    public function roadStation(){

        return $this->belongsTo('App\Models\RoadStation');
    }

    protected $table = 'blogs';

}