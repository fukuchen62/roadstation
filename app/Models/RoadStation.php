<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadStation extends Model
{
    //use HasFactory;









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