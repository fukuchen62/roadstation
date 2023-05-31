<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     *product_types 〇
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('goods_category_id')->nullable(false);
            $table->string('common_name', 50)->nullable(false);
            $table->string('season', 50)->nullable(true);
            $table->string('discription', 300)->nullable(true);
            $table->string('station_list', 20)->nullable(true);
            $table->string('picture', 200)->nullable(true);
            $table->string('price', 50)->nullable(true);
            $table->string('usage', 200)->nullable(true);
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
        Schema::dropIfExists('product_types');
    }
};
