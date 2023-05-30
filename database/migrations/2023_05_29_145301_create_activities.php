<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * activities 〇
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('activity_name', 50);
            $table->string('discription', 300);
            $table->string('business_hours', 200);
            $table->string('price', 100);
            $table->string('conditions', 500);
            $table->integer('roadstation_id');
            $table->integer('blog_id');
            $table->string('picture1', 200);
            $table->string('picture2', 200);
            $table->string('picture3', 200);
            $table->string('memo', 500);
            $table->boolean('is_show');

            // $table->timestamp('created_at');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
