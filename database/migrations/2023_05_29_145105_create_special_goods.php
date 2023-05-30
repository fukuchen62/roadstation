<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * special_goods 〇
     */

    public function up(): void
    {
        Schema::create('special_goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('goods_name', 50);
            $table->string('month', 30);
            $table->string('season', 50);
            $table->text('discription', 300);
            $table->string('station_list', 20);
            $table->string('picture', 200);
            $table->string('price', 50);
            $table->string('usage', 500);
            $table->string('memo', 500);
            $table->boolean('is_show');
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('special_goods');
    }
};
