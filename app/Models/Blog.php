<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
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

// ----------------------▼▼▼ about frontPage ▼▼▼-----------------------





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

    protected $table = 'blogs';





    // *********** ▼▼▼ データのリターン ▼▼▼ ***********

    /**
     * ブログのidを送るメソッド
     * （アクティビティビューで使用するため作成）
     *
     * @return void
     */
    public function getId(){
        return $this->id;
    }

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
     * ブログのカテゴリー名を送るメソッド
     *（で使用するため作成）
     * @return void
     */
    public function getCategoryName()
    {
        $data = '<p>' . $this->blogCategory->category_name . '</p>';
        return $data;
    }

    /**
     * ブログのカテゴリーidを送るメソッド
     *（で使用するため作成）
     * 
     * @return void
     */
    public function getData()
    {
        $data = $this->blog_category_id;
        return $data;
    }
}