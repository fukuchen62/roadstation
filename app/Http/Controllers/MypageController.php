<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cookie;

class MypageController extends Controller
{
    /**
     * myPage
     * お気に入りに書き込み
     *
     * @return void
     */
    public function myPage(Request $request)
    {
        $station_id = "0,";

        if ($request->id != "") {

            // cookieがすでにあったら、
            if ($request->hasCookie('id')) {
                $input1 = $request->id;

                $station_list = $request->cookie('id');

                // 配列に変換
                $station_array = explode(',', $station_list);

                // foreachで完全一致かどうか見る
                $flag_delete = 0;
                foreach ($station_array as $key => $value) {


                    // お気に入りリストから該当IDを外す
                    if ($value == $input1) {
                        // $result = array_diff($station_array, array($input1,));
                        // $result = array_values($result);

                        array_splice($station_array, $key, 1);
                        $flag_delete = 1;
                    }
                }

                // 新規追加の場合は、
                if ($flag_delete == 0) {
                    array_push($station_array, $input1);
                }

                // 配列から文字列に変換
                $station_id = implode(',', $station_array);
            } else {
                $station_id .= $request->id;
            }

            $data = [
                'id' => $request->id,
                'url' => 'spotsinfo',
            ];

            $response = response()->view('fronts.cookie_save', $data);

            // １年保存
            $response->cookie('id', $station_id, 525600);

            return $response;
        }
    }
}
