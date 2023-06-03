<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'category_id' => 'required|integer',
        'title'       => 'required|string|max:50',
        'overview'    => 'max:200',
        'thumbnail'   => 'required|string|max:200',
        'is_show'     => 'required|boolean'
    );
    // 日本語エラーメッセージ
    public static $messages = [
        'category_id.required' => 'カテゴリーIDは必ず入力してください。',
        'title.required'       => 'タイトルは必ず入力してください。',
        'thumbnail.required'   => 'サムネ画像は必ず入力してください。',
        'is_show.required'     => '表示フラグは必ず入力してください。'
    ];


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