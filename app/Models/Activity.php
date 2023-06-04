<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;


    // public function activities()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    /**
     * ブログモデルとリレーション
     */
    public function blog(){

        return $this->belongsTo('App\Models\Blog');
    }

    //protected $table = 'activities';

    /**
     * ロードステーションモデルとリレーション
     */
    public function roadStation(){

        return $this->belongsTo('App\Models\RoadStation');
    }

    protected $table = 'activities';
}