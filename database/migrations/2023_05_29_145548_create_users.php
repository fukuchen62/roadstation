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
            $table->string('name', 40);
            $table->string('nickname', 40);
            $table->string('email', 250);
            // $table->timestamp('email_verified_at');
            $table->string('password', 100);
            $table->integer('authority');
            $table->string('remember_token', 100);
            $table->boolean('is_show');
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->timestamps();
            // $table->timestamp('deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
