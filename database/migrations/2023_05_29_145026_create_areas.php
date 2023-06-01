<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * areas 〇
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->integer('id');
            $table->string('area_name', 10);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
