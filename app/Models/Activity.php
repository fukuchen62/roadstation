<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';

    protected $guarded = array('id');
    public static $rules = array(
        'activity_name' => 'required|string|max:50',
        'discription' => 'max:200',
        'business_hours'    => 'max:200',
        'price' => 'max:100',
        'conditions'    => 'max:500',
        'road_station_id' => 'integer',
        'blog_list'  => 'max:20',
        'picture1'   => 'string|max:200',
        'picture2'   => 'string|max:200',
        'picture3'   => 'string|max:200',
        'memo'       => 'string|max:500',
        'is_show'    => 'required|boolean'
    );
    // 日本語エラーメッセージ
    public static $messages = [
        'activity_name.required' => 'お名前は必ず入力してください。',
        'is_show.required'     => '表示フラグは必ず入力してください。'
    ];

    // *********** ▼▼▼ 各テーブルとリレーション ▼▼▼ ***********

    /**
     * ブログモデルとリレーション
     * アクティビティ一覧にブログ記事のidを送るため作成
     * 作成者：小山
     */
    public function blog()
    {

        return $this->belongsTo('App\Models\Blog');
    }

    /**
     * blogCategory function
     * アクティビティ一覧からブログ記事に遷移した際、
     * ブログ記事に関連記事を表示させるために作成
     * 作成者：小山
     *
     * @return void
     */
    public function blogCategory()
    {
        return $this->belongsTo('App\Models\BlogCategory');
    }

    /**
     * ロードステーションモデルとリレーション
     * アクティビティ一覧に道の駅名を表示するため作成
     * 作成者：小山
     *
     */
    public function roadStation()
    {

        return $this->belongsTo('App\Models\RoadStation');
    }

    // *************** ▼▼▼ データのリターン ▼▼▼ ***************

    /**
     * ブログのblog_category_idを取得し送るメソッド
     * ブログ記事内の関連記事を表示するため作成
     * 作成者：小山
     *
     * @return void
     */
    public function getCategoryId()
    {
        return $this->blog_category_id;
    }

    /**
     * ブログのis_showを取得し送るメソッド
     *アクティビティ一覧内のブログ記事を正しく表示するため作成
     * 作成者：小山
     *
     * @return void
     */
    public function getIs_show()
    {
        return $this->is_show;
    }

    /**
     * ブログのactivbvity_idを取得し送るメソッド
     * アクティビティ一覧内のブログ記事を正しく表示するため作成
     * 作成者：小山
     *
     * @return void
     */
    // public function getActivity_id()
    // {
    //     return $this->activity_id;
    // }

    /**
     * getBlogName function
     * idによるブログ記事のタイトルを取得
     *
     * @param integer $id
     * @return void
     */
    public function getBlogName($id)
    {
        $blog = Blog::find($id);
        if ($blog->is_show == 1) {
            return $blog->title;
        }
    }

    public function changeName($id)
    {
        switch ($id) {
            case 'a';
                $id = 10;
                break;
            case 'b';
                $id = 11;
                break;
            case 'c';
                $id = 12;
                break;
            case 'd';
                $id = 13;
                break;
            case 'e';
                $id = 14;
                break;
            case 'f';
                $id = 15;
                break;
            case 'g';
                $id = 16;
                break;
            case 'h';
                $id = 17;
                break;
            case 'i';
                $id = 18;
                break;
            case 'j';
                $id = 19;
                break;
            case 'k';
                $id = 20;
                break;
        }
        return $id;
    }
}
