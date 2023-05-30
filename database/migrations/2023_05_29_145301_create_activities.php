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
            $table->string('activity_name', 50)->nullable(false);
            $table->string('discription', 300)->nullable(true);
            $table->string('business_hours', 200)->nullable(true);
            $table->string('price', 100)->nullable(true);
            $table->string('conditions', 500)->nullable(true);
            $table->integer('roadstation_id')->nullable(true);
            $table->integer('blog_id')->nullable(true);
            $table->string('picture1', 200)->nullable(true);
            $table->string('picture2', 200)->nullable(true);
            $table->string('picture3', 200)->nullable(true);
            $table->string('memo', 500)->nullable(true);
            $table->boolean('is_show')->nullable(false)->default(true);

            // $table->timestamp('created_at');
            $table->timestamps();
            $table->softDeletes('deleted_at')->nullable(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
