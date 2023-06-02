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
        return $this->belongsTo('App\Models\GoodsCategory');
    }

    public function getCategoryName()
    {
        return $this->goodsCategory->category_name;
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
}
