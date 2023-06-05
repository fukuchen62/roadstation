<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'category_id' => 'required|integer',
        'title'       => 'required|string|max:50',
        'overview'    => 'max:200',
        'thumbnail'   => 'required|string|max:200',
        'is_show'     => 'required|boolean'
    );
    // 日本語エラーメッセージ
    public static $messages = [
        'category_id.required' => 'カテゴリーIDは必ず入力してください。',
        'title.required'       => 'タイトルは必ず入力してください。',
        'thumbnail.required'   => 'サムネ画像は必ず入力してください。',
        'is_show.required'     => '表示フラグは必ず入力してください。'
    ];

    public function newsCategory()
    {
        $items = $this->belongsTo('App\Models\NewsCategory');
        return $items;
    }

    public function roadStation()
    {
        $items = $this->belongsTo('App\Models\RoadStation');
        return $items;
    }

    public function getData()
    {
        $data = $this->news_category_id;
        return $data;
    }

    public function getCategoryName()
    {
        $data = '<p>' . $this->newsCategory->category_name . '</p>';
        return $data;
    }

    public function getStationName()
    {
        $data = $this->station_list;

        $array = explode('|', $data);

        return $array;
    }

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
