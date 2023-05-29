<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * goods_categories 〇
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('goods_categories', function (Blueprint $table) {
            $table->integer('category_id');
            $table->string('category_name', 10);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('goods_categories');
    }
};
