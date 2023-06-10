<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductType;
use App\Models\RoadStation;
use App\Models\SpecialGoods;

class GoodsController extends Controller
{
    public function goodsMainView(Request $request)
    {

        // ProductTyepsテーブルから、全ての特産品の種別を取得
        $items = ProductType::orderBy('goods_category_id', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        // ProductTyepsテーブルから、農産物のデータを取得
        $agricultural_products = ProductType::where('goods_category_id', '1')
            ->get();

        // ProductTyepsテーブルから、海産物のデータを取得
        $seafood = ProductType::where('goods_category_id', '2')
            ->get();

        // ProductTyepsテーブルから、工芸品のデータを取得
        $craft = ProductType::where('goods_category_id', '3')
            ->get();

        // ProductTyepsテーブルから、グルメのデータを取得
        $gourmet = ProductType::where('goods_category_id', '4')
            ->get();

        // ProductTyepsテーブルから、その他のデータを取得
        $others = ProductType::where('goods_category_id', '5')
            ->get();

        // SpecialGoodsテーブルから、全てのデータを取得
        $special_goods = SpecialGoods::orderBy('goods_category_id', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $data = [
            'goods_type' => $items,
            'agricultural_products' => $agricultural_products,
            'seafood' => $seafood,
            'craft' => $craft,
            'gourmet' => $gourmet,
            'others' => $others,
            'special_goods' => $special_goods,
        ];
        return view('fronts.goods_list', $data);
    }
}
