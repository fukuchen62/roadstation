<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadStation extends Model
{
    use HasFactory;

    // newsのやつをまねてroad_stationsに合わせるMODEL
    public static $rules = array(
        'news_category_id' => 'required|integer',
        'title'       => 'required|string|max:32',
        'discription'    => 'required',
        'overview'    => 'max:200',
        'picture'   => 'max:200',
        'is_show'     => 'required|boolean'
        // こういったものをroadstationに合わせる
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
