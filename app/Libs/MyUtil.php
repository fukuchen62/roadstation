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
     * @param [string] $id
     * @return void
     */
    static public function charToNum($id)
    {
        $item = $id;
        // a以降は、数字に変換
        if ($item == 'a') {
            $item = 10;
        } else if ($item == 'b') {
            $item = 11;
        } else if ($item == 'c') {
            $item = 12;
        } else if ($item == 'd') {
            $item = 13;
        } else if ($item == 'e') {
            $item = 14;
        } else if ($item == 'f') {
            $item = 15;
        } else if ($item == 'g') {
            $item = 16;
        } else if ($item == 'h') {
            $item = 17;
        } else if ($item == 'i') {
            $item = 18;
        }
        return $item;
    }
}
