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
            $table->string('category_id', 20);
            $table->string('title', 32);
            $table->string('station_list', 20);
            $table->text('discription');
            $table->string('picture', 200);
            $table->string('remarks_column', 500);
            $table->boolean('is_show');
            $table->integer('user_id');
            // $table->timestamp('created_at');
            $table->timestamps();
            $table->softDeletes('deleted_at');

            // $table->timestamp('deleted_at');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
