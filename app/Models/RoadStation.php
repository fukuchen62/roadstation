<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadStation extends Model
{
    //use HasFactory;









    
    /**
     * ブログとリレーション
     */
    public function blog(){
        return $this->hasone(blog::class);
    }

    /**
     * 道の駅のURLをビュー（アーティクル）に送るメソッド
     *
     * @return void
     */
    public function getUrl(){
        return $this->url;
    }

    /**
     * アクティビティとリレーション
     */
    public function activity(){
        return $this->hasone(activity::class);
    }

    /**
     * 道の駅名をビュー（アクティビティ）に送るメソッド
     *
     * @return void
     */
    public function getName(){
        return $this->station_name;
    }
}