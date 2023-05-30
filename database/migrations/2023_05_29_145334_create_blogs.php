<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * blogs
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('title', 50);
            $table->string('user_name', 10);
            $table->text('content');
            $table->integer('roadstation_id');
            $table->string('goods_id', 50);
            $table->string('activity', 50);
            $table->string('picture', 200);
            $table->string('memo', 500);
            $table->boolean('is_show');
            $table->boolean('is_highlight');
            $table->boolean('user_id');
            // $table->timestamp('updated_at');
            $table->timestamps();
            $table->softDeletes('deleted_at');

            // $table->timestamp('deleted_at');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
