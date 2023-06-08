<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialGoods extends Model
{
    use HasFactory;

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
}
