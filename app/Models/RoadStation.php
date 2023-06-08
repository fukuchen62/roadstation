<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadStation extends Model
{
    use HasFactory;




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
