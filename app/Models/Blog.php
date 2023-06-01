<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //use HasFactory;

    /**
     * カテゴリーとのリレーション
     */
    public function blogCategory(){

        return $this->belongsTo('App\Models\BlogCategory');
    }

    protected $table = 'blogs';
    
        /**
         * アクティビティとのリレーション
         *
         * @return void
         */
        public function activity(){
            
        return $this->hasone(Brog::class);
    }
}