<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;





// *********** ▼▼▼ 各テーブルとリレーション ▼▼▼ ***********

    /**
     * アクティビティとリレーション
     * （アクティビティ一覧にブログ記事を表示するため作成 / 作成者：小山）
     * 
     */
    public function activity(){
        return $this->hasone(activity::class);
    }

    /**
     * カテゴリーとリレーション
     * （ブログ記事一覧とブログ記事にカテゴリー名を表示するため作成 / 作成者：小山）
     * 
     */
    public function blogCategory(){

        return $this->belongsTo('App\Models\BlogCategory');
    }


    /**
     * ロードステーションとリレーション
     * （ブログ記事に道の駅名を表示するため作成 / 作成者：小山）
     * 
     */
    public function roadStation(){

        return $this->belongsTo('App\Models\RoadStation');
    }

    // protected $table = 'blogs';





    // *********** ▼▼▼ データのリターン ▼▼▼ ***********


    /**
     * ブログの記事タイトルを送るメソッド
     * （アクティビティビューで使用するため作成 / 作成者：小山）
     *
     * @return void
     */
    public function getName(){
        return $this->title;
    }

    /**
     * ブログのカテゴリーidを取得し送るメソッド
     *（関連記事の表示で使用するため作成 / 作成者：小山）
     * 
     * @return void
     */
    public function getCategoryId()
    {
        return $this->blog_category_id;
    }

    public static function getRoadstationName($id)
    {
        $item = Roadstation::find($id);
        if($item != null){
            $name = $item->station_name;
        }else{
            $name = "NO name";
        }
        return $name;
    }

    public function previous()
    {
        return $this->where('id','<',$this->id)->where('is_show',1)->orderBy('id','desc')->first();
    }

    public function next()
    {
        return  $this->where('id', '>', $this->id)->where('is_show',1)->orderBy('id','asc')->first();
    }
}