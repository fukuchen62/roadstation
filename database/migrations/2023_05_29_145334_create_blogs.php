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
            $table->integer('category_id')->nullable(false);
            $table->string('title', 50)->nullable(false);
            $table->string('user_name', 10)->nullable(true);
            $table->text('content')->nullable(true);
            $table->integer('roadstation_id')->nullable(true);
            $table->string('goods_id', 50)->nullable(true);
            $table->string('activity', 50)->nullable(true);
            $table->string('picture', 200)->nullable(true);
            $table->string('memo', 500)->nullable(true);
            $table->boolean('is_show')->nullable(false)->default(true);
            $table->boolean('is_highlight')->nullable(false)->default(false);
            $table->boolean('user_id')->nullable(true);
            // $table->timestamp('updated_at');
            $table->timestamps();
            $table->softDeletes('deleted_at')->nullable(true);

            // $table->timestamp('deleted_at');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};