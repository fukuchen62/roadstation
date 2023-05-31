<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //use HasFactory;

    /**
     * カテゴリーとのリレーション
     */
    // public function blogCategory(){
    //     return $this->hasOne(BlogCategory::class);
    // }
    public function blogCategory()
{
    return $this->hasOne('App\Models\BlogCategory');

    
}

//https://qiita.com/kamome_susume/items/b37709e1ba29abacdbd9
//postsとusersを逆にしてテスト
// public function getUserNameById()
// {
//   return DB::table('posts')
//           ->join('users', 'posts.user_id', '=', 'users.id')
//           ->get();
//}
}