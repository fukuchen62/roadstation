<?php

namespace App\Libs;

/**
 * MyUtil class
 * 自定義クラス
 */
class MyUtil
{

    /**
     * charToNum function
     * アルファベットから数字に変換
     */
    static public function charToNum($id)
    {
        $item = $id;
        // a以降は、数字に変換$id
        if ($id == 'a') {
            $item = 10;
        } elseif ($id == "b") {
            $item = 11;
        } elseif ($id == 'c') {
            $item = 12;
        } elseif ($id == 'd') {
            $item = 13;
        } elseif ($id == 'e') {
            $item = 14;
        } elseif ($id == 'f') {
            $item = 15;
        } elseif ($item == 'g') {
            $item = 16;
        } elseif ($id == 'h') {
            $item = 17;
        } elseif ($id == 'i') {
            $item = 18;
        }
        return $item;
    }
}
