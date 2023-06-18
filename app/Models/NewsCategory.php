<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    public function getData()
    {
        $data = $this->category_name;
        return $data;
    }

    /**
     * getCount function
     * カテゴリ
     *
     * @return void
     */
    public function getCount()
    {
        $count = News::where('news_category_id', $this->id)
            ->count();
        return $count;
    }
}
