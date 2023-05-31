<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    /**
     * ブログのリレーション
     */
    public function blogs(){
        return $this->hasone(Brog::class);
    }

    /**
     * 表示中のブログのみ
     */
    public function blogsIsShow(){
        return $this->blogs()
            ->where('is_show',1);
    }

    public function getName(){
        return $this->category_name;
    }
}