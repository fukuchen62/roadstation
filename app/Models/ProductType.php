<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    /**
     * リレーション
     *
     * @return void
     */
    public function goodsCategory()
    {
        $items = $this->belongsTo('App\Models\GoodsCategory');
        return $this->belongsTo('App\Models\GoodsCategory');
        return $items;
    }

    public function getCategoryName()
    {
        $items = '<p>' . $this->goodsCategory->category_name . '</p>';
        return $this->goodsCategory->category_name;
        return $items;
    }

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

    protected $guarded = array('id');

    public static $rules = array(
        'goods_category_id' => 'required|integer',
        'common_name'       => 'required|string|max:32',
        'season'       => 'string|max:32',
        'usage'    => 'max:500',
        'discription'    => 'required',
        'picture'   => 'max:200',
        'station_list'   => 'max:4',
        'price'   => 'integer',
        'is_show'     => 'required|boolean'
    );
    // 日本語エラーメッセージ
    public static $messages = [
        'goods_category_id.required' => 'カテゴリーIDは必ず入力してください。',
        'common_name.required' => '特産品名は必ず入力してください。',
        'discription.required' => '詳細内容は必ず入力してください。',
        'picture.max:200' => '画像は200文字まで入力してください。',
        'usage.max:500' => '概要は500文字まで入力してください。',
        'is_show.required' => '表示フラグは必ず入力してください。0 or 1'
    ];
}
