<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //use HasFactory;

    // public function activities()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

        public function blogs(){

        return $this->belongsTo('App\Models\Blog');
    }

    protected $table = 'activities';
}