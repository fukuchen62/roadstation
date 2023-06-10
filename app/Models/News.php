<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'news_category_id' => 'required|integer',
        'title'       => 'required|string|max:32',
        'overview'    => 'max:200',
        'discription'    => 'required',
        'picture'   => 'max:200',
        'is_show'     => 'required|boolean'
    );
    // 日本語エラーメッセージ
    public static $messages = [
        'news_category_id.required' => 'カテゴリーIDは必ず入力してください。',
        'title.required' => 'タイトルは必ず入力してください。',
        'discription.required' => '詳細内容は必ず入力してください。',
        'picture.max:200' => '画像は200文字まで入力してください。',
        'overview.max:200' => '概要は200文字まで入力してください。',
        'is_show.required' => '表示フラグは必ず入力してください。0 or 1'
    ];

    /**
     * newsCategory function
     * ニュースカテゴリーテーブルとのリレーション
     *
     * @return void
     */
    public function newsCategory()
    {
        $items = $this->belongsTo('App\Models\NewsCategory');
        return $items;
    }

    /**
     * roadStation function
     * 道の駅テーブルとのリレーション
     *
     * @return void
     */
    public function roadStation()
    {
        $items = $this->belongsTo('App\Models\RoadStation');
        return $items;
    }

    /**
     * getCategoryName function
     * ニュースカテゴリー名を取得
     *
     * @return void
     */
    public function getCategoryName()
    {
        $data = '<p>' . $this->newsCategory->category_name . '</p>';
        return $data;
    }

    /**
     * getStationName function
     * 道の駅listから、|を外す
     *
     * @return void
     */
    public function getStationName()
    {
        $data = $this->station_list;

        $array = explode('|', $data);

        return $array;
    }

    /**
     * changeName function
     * アルファベットを数字に置き換え
     *
     * @param [type] $id
     * @return void
     */
    public function changeName($id)
    {
        switch ($id) {
            case 'a':
                $id = 10;
                break;
            case 'b':
                $id = 11;
                break;
            case 'c':
                $id = 12;
                break;
            case 'd':
                $id = 13;
                break;
            case 'e':
                $id = 14;
                break;
            case 'f':
                $id = 15;
                break;
            case 'g':
                $id = 16;
                break;
            case 'h':
                $id = 17;
                break;
            case 'i':
                $id = 18;
                break;
        }

        return $id;
    }

    /**
     * getRoadstationName function
     * 道の駅名を取得
     *
     * @param [type] $id
     * @return void
     */
    public static function getRoadstationName($id)
    {
        $item = RoadStation::find($id);
        if ($item != null) {
            $name = $item->station_name;
        } else {
            $name = "No name";
        }

        return $name;
    }

    /**
     * previous function
     * 戻るボタン
     *
     * @return void
     */
    public function previous()
    {
        return $this->where('id', '<', $this->id)
            ->orderBy('id', 'desc')->first();
    }

    /**
     * next function
     * 前に進むボタン
     *
     * @return void
     */
    public function next()
    {
        return $this->where('id', '>', $this->id)
            ->orderBy('id', 'asc')->first();
    }
}
