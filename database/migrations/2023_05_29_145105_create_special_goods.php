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
            $table->integer('goods_category_id')->nullable(false);
            $table->string('goods_name', 50)->nullable(false);
            $table->string('month', 30)->nullable(true);
            $table->string('season', 50)->nullable(true);
            $table->text('discription', 300)->nullable(true);
            $table->integer('road_station_id')->nullable(false);
            $table->string('picture', 200)->nullable(true);
            $table->string('price', 50)->nullable(true);
            $table->string('usage', 500)->nullable(true);
            $table->string('memo', 500)->nullable(true);
            $table->boolean('is_show')->nullable(false)->default(true);
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->timestamps();
            $table->softDeletes('deleted_at')->nullable(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('special_goods');
    }
};
