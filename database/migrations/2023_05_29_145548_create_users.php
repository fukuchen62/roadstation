<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * users 〇
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 40)->nullable(false);
            $table->string('nickname', 40)->nullable(true);
            $table->string('email', 100)->nullable(false)->unique();
            $table->timestamp('email_verified_at')->nullable(true);
            $table->string('password', 100)->nullable(false);
            $table->integer('authority')->nullable(false)->default(1);
            $table->string('remember_token', 100)->nullable(false);
            $table->boolean('is_show')->nullable(false)->default(true);
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->timestamps();
            $table->softDeletes('deleted_at')->nullable(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
