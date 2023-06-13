<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialGoods extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'goods_category_id' => 'required|integer',
        'goods_name'       => 'required|string|max:32',
        // 'month'       => 'string|max:32',
        // 'usage'    => 'max:500',
        'discription'    => 'required',
        // 'picture'   => 'max:200',
        // 'road_station_id'   => 'max:4',
        // 'price'   => 'integer',
        'is_show'     => 'required|boolean'
    );
    // 日本語エラーメッセージ
    public static $messages = [
        'goods_category_id.required' => 'カテゴリーIDは必ず入力してください。',
        'goods_name.required' => '特産品名は必ず入力してください。',
        'discription.required' => '詳細内容は必ず入力してください。',
        'picture.max:200' => '画像は200文字まで入力してください。',
        'usage.max:500' => '利用方法は500文字まで入力してください。',
        'is_show.required' => '表示フラグは必ず入力してください。0 or 1'
    ];

    /**
     * newsCategory function
     * 道の駅特産品カテゴリーテーブルとのリレーション
     *
     * @return void
     */
    public function goodsCategory()
    {
        $items = $this->belongsTo('App\Models\GoodsCategory');
        return $items;
    }

    public function getCategoryName()
    {
        $items = '<p>' . $this->goodsCategory->category_name . '</p>';
        return $items;
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
}
