<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *road_stations 〇
     */
    public function up(): void
    {
        Schema::create('road_stations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('station_name', 50)->nullable(false);
            $table->string('ruby', 100)->nullable(true);
            $table->integer('area_id')->nullable(false);
            $table->string('catchphrase', 50)->nullable(true);
            $table->string('review', 100)->nullable(true);
            $table->string('overview', 200)->nullable(true);
            $table->string('discription', 500)->nullable(true);
            $table->char('zip_code', 8)->nullable(true);
            $table->string('address', 100)->nullable(true);
            $table->string('business_hours', 200)->nullable(true);
            $table->string('regular_holiday', 200)->nullable(true);
            $table->string('parking', 200)->nullable(true);
            $table->string('tel', 20)->nullable(false);
            $table->string('url', 200)->nullable(true);
            $table->string('sns', 200)->nullable(true);
            $table->string('map_url', 500)->nullable(true);
            $table->string('longitude', 50)->nullable(true);
            $table->string('latitude', 50)->nullable(true);
            $table->string('picture1', 200)->nullable(true);
            $table->string('picture2', 200)->nullable(true);
            $table->string('picture3', 200)->nullable(true);
            $table->boolean('atm_icon')->nullable(false)->default(true);
            $table->boolean('bed_icon')->nullable(false)->default(true);
            $table->boolean('restaurant_icon')->nullable(false)->default(true);
            $table->boolean('lightmeal_icon')->nullable(false)->default(true);
            $table->boolean('accommodation_icon')->nullable(false)->default(true);
            $table->boolean('spa_icon')->nullable(false)->default(true);
            $table->boolean('park_icon')->nullable(false)->default(true);
            $table->boolean('ev_icon')->nullable(false)->default(true);
            $table->boolean('lan_icon')->nullable(false)->default(true);
            $table->boolean('shower_icon')->nullable(false)->default(true);
            $table->boolean('experience_icon')->nullable(false)->default(true);
            $table->boolean('guide_icon')->nullable(false)->default(true);
            $table->boolean('disability_icon')->nullable(false)->default(true);
            $table->boolean('shop_icon')->nullable(false)->default(true);
            $table->boolean('observatory_icon')->nullable(false)->default(true);
            $table->boolean('museum_icon')->nullable(false)->default(true);
            $table->string('memo', 500)->nullable(true);
            $table->boolean('is_show')->nullable(false)->default(true);
            // $table->timestamp('created_at');
            $table->timestamps();
            $table->softDeletes('deleted_at')->nullable(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('road_stations');
    }
};
