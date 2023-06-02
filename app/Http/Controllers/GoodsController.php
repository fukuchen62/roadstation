<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductType;
use App\Models\RoadStation;

class GoodsController extends Controller
{
    public function goodsMainView(Request $request)
    {

        // ProductTyepsテーブルから、全ての特産品の種別を取得
        $items = ProductType::orderBy('goods_category_id', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $agricultural_products = ProductType::where('goods_category_id', '1')
            ->get();

        $seafood = ProductType::where('goods_category_id', '2')
            ->get();

        $craft = ProductType::where('goods_category_id', '3')
            ->get();

        $data = [
            'goods_type' => $items,
            'agricultural_products' => $agricultural_products,
            'seafood' => $seafood,
            'craft' => $craft,
        ];
        return view('fronts.goods_list', $data);
    }
}
