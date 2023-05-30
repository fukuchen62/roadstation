<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SpecialGoods;

class GoodsController extends Controller
{
    public function goodsMainView(Request $request)
    {
        $items = SpecialGoods::all();
        $data = [
            'special_goods' => $items,
        ];
        return view('fronts.goods_list', $data);
    }
}
