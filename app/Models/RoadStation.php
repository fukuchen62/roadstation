<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadStation extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    // newsのやつをまねてroad_stationsに合わせるMODEL
    public static $rules = array(
        'area_id' => 'required|integer',
        'station_name' => 'required|string|max:50',
        'ruby' => 'required|string|max:100',
        'catchphrase' => 'required|string|max:100',
        'review' => 'required|string|max:200',
        'overview'    => 'required|string|max:200',
        'discription'    => 'required|string|max:500',
        'zip_code'   => 'required|string|max:8',
        'address' => 'required|string|max:100',
        'business_hours' => 'required|string|max:200',
        'regular_holiday' => 'required|string|max:200',
        'parking' => 'required|string|max:200',
        'tel' => 'required|string|max:20',
        'url' => 'required|string|max:200',
        'sns' => 'required|string|max:200',
        'map_url' => 'required|string|max:500',
        'longitude' => 'required|string|max:50',
        'latitude' => 'required|string|max:50',
        'picture1' => 'required|string|max:200',
        'picture2' => 'required|string|max:200',
        'picture3' => 'required|string|max:200',
        'atm_icon' => 'required|boolean',
        'bed_icon' => 'required|boolean',
        'restaurant_icon' => 'required|boolean',
        'lightmeal_icon' => 'required|boolean',
        'accommodation_icon' => 'required|boolean',
        'spa_icon' => 'required|boolean',
        'park_icon' => 'required|boolean',
        'ev_icon' => 'required|boolean',
        'lan_icon' => 'required|boolean',
        'shower_icon' => 'required|boolean',
        'experience_icon' => 'required|boolean',
        'guide_icon' => 'required|boolean',
        'disability_icon' => 'required|boolean',
        'shop_icon' => 'required|boolean',
        'observatory_icon' => 'required|boolean',
        'museum_icon' => 'required|boolean',
        'memo' => 'string|max:500',
        'is_show'     => 'required|boolean'
        // こういったものをroadstationに合わせる
    );
    // 日本語エラーメッセージ
    public static $messages = [
        // 'news_category_id.required' => 'カテゴリーIDは必ず入力してください。',
        'station_name.required' => '道の駅名は必ず入力してください',
        // 'title.required' => 'タイトルは必ず入力してください。',
        // 'discription.required' => '詳細内容は必ず入力してください。',
        // 'picture.max:200' => '画像は200文字まで入力してください。',
        // 'overview.max:200' => '概要は200文字まで入力してください。',
        // 'is_show.required' => '表示フラグは必ず入力してください。0 or 1'
        'area_id' => 'エリアIDはかならず入力してください',
        // 'station_name' => 'required|string|max:50',
        // 'ruby' => 'required|string|max:100',
        // 'catchphrase' => 'required|string|max:100',
        // 'review' => 'required|string|max:200',
        // 'overview'    => 'required|string|max:200',
        // 'discription'    => 'required|string|max:500',
        // 'zip_code'   => 'required|string|max:8',
        // 'address' => 'required|string|max:100',
        // 'business_hours' => 'required|string|max:200',
        // 'regular_holiday' => 'required|string|max:200',
        // 'parking' => 'required|string|max:200',
        // 'tel' => 'required|string|max:20',
        // 'url' => 'required|string|max:200',
        // 'sns' => 'required|string|max:200',
        // 'map_url' => 'required|string|max:500',
        // 'longitude' => 'required|string|max:50',
        // 'latitude' => 'required|string|max:50',
        // 'picture1' => 'required|string|max:200',
        // 'picture2' => 'required|string|max:200',
        // 'picture3' => 'required|string|max:200',
        // 'atm_icon' => 'required|boolean',
        // 'bed_icon' => 'required|boolean',
        // 'restaurant_icon' => 'required|boolean',
        // 'lightmeal_icon' => 'required|boolean',
        // 'accommodation_icon' => 'required|boolean',
        // 'spa_icon' => 'required|boolean',
        // 'park_icon' => 'required|boolean',
        // 'ev_icon' => 'required|boolean',
        // 'lan_icon' => 'required|boolean',
        // 'shower_icon' => 'required|boolean',
        // 'experience_icon' => 'required|boolean',
        // 'guide_icon' => 'required|boolean',
        // 'disability_icon' => 'required|boolean',
        // 'shop_icon' => 'required|boolean',
        // 'observatory_icon' => 'required|boolean',
        // 'museum_icon' => 'required|boolean',

        // 'memo' => 'string|max:500',
        // 'is_show'    => 'required|boolean'
    ];



    /**
     * ブログとリレーション
     * （ブログのURLを取得するためのもの）
     * （ブログ記事にURLを表示するため作成 / 作成者：小山）
     *
     */
    public function blog()
    {
        return $this->hasone(blog::class);
    }

    /**
     * 道の駅のURLをビュー（アーティクル）に送るメソッド
     * （ブログ記事にURLを表示するため作成 / 作成者：小山）
     *
     * @return void
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * アクティビティとリレーション
     * （アクティビティ名を取得するためのもの / 作成者：小山）
     */
    public function activity()
    {
        return $this->hasone(activity::class);
    }

    /**
     * 道の駅名をビュー（アクティビティ）に送るメソッド
     * （アクティビティ一覧に各道の駅名を表示するため作成 / 作成者：小山）
     *
     * @return void
     */
    public function getName()
    {
        return $this->station_name;
    }

    /**
     * 道の駅のidをビュー（アクティビティリスト）に送るメソッド
     * （アクティビティ一覧に各道の駅のURLを表示するため作成 / 作成者：小山）
     *
     * @return void
     */
    public function getId()
    {
        return $this->id;
    }
}
