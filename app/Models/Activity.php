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
     * （アクティビティ一覧にブログ記事のidを送るため作成 / 作成者：小山）
     */
    public function blog(){

        return $this->belongsTo('App\Models\Blog');
    }

    //protected $table = 'activities';

    /**
     * ロードステーションモデルとリレーション
     * （アクティビティ一覧に道の駅名を表示するため作成 / 作成者：小山）
     * 
     */
    public function roadStation(){

        return $this->belongsTo('App\Models\RoadStation');
    }

    protected $table = 'activities';


    /**
     * ブログのblog_category_idを取得し送るメソッド
     *（ブログ記事内の関連記事を表示するため作成 / 作成者：小山）
     * 
     * @return void
     */
    public function getCategoryId()
    {
        return $this->blog_category_id;
    }

    /**
     * ブログのis_showを取得し送るメソッド
     *（アクティビティ一覧内のブログ記事を正しく表示するため作成 / 作成者：小山）
     * 
     * @return void
     */
    public function getIs_show()
    {
        return $this->is_show;
    }

    /**
     * ブログのactivbvity_idを取得し送るメソッド
     *（アクティビティ一覧内のブログ記事を正しく表示するため作成 / 作成者：小山）
     * 
     * @return void
     */
    public function getActivity_id()
    {
        return $this->activity_id;
    }

    public function getBlogName()
    {
        $data = $this->blog_list;
        $array = explode('|',$data);
        return $array;
    }

    public static function changeName($id)
    {
        switch($id){
            case 'a';
                $id = 10;
                break;
            case'b';
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
        }

        return $id;
    }
}