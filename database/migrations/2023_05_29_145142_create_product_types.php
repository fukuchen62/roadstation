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
            $table->integer('category_id');
            $table->string('common_name', 50);
            $table->string('season', 50);
            $table->string('discription', 300);
            $table->string('station_list', 20);
            $table->string('picture', 200);
            $table->string('price', 50);
            $table->string('usage', 200);
            $table->string('memo', 500);
            $table->boolean('is_show');
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->timestamps();
            // $table->timestamp('deleted_at');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
