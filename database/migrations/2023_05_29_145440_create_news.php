<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * news 〇
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('news_category_id', 20)->nullable(false);
            $table->string('title', 32)->nullable(false);
            $table->string('station_list', 20)->nullable(true);
            $table->text('discription')->nullable(true);
            $table->string('picture', 200)->nullable(true);
            $table->string('memo', 500)->nullable(true);
            $table->boolean('is_show')->nullable(false)->default(true);
            $table->integer('user_id')->nullable(true);
            // $table->timestamp('created_at');
            $table->timestamps();
            $table->softDeletes('deleted_at')->nullable(true);

            // $table->timestamp('deleted_at');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
