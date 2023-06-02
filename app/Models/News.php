<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // use HasFactory;

    public function newsCategory()
    {
        $items = $this->belongsTo('App\Models\NewsCategory');
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
}
