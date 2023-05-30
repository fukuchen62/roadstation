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
            $table->string('stations_name', 20);
            $table->integer('area_id');
            $table->string('catchphrase', 200);
            $table->text('review');
            $table->string('discription', 500);
            $table->char('zip_code', 8);
            $table->string('address', 100);
            $table->string('business_hours', 200);
            $table->string('regular_holiday', 200);
            $table->string('parking', 200);
            $table->string('tel', 20);
            $table->string('url', 200);
            $table->string('sns', 200);
            $table->string('map_url', 500);
            $table->string('longitude', 50);
            $table->string('latitude', 50);
            $table->string('picture1', 200);
            $table->string('picture2', 200);
            $table->string('picture3', 200);
            $table->boolean('atm_icon');
            $table->boolean('bed_icon');
            $table->boolean('restaurant_icon');
            $table->boolean('lightmeal_icon');
            $table->boolean('accommodation_icon');
            $table->boolean('spa_icon');
            $table->boolean('park_icon');
            $table->boolean('ev_icon');
            $table->boolean('lan_icon');
            $table->boolean('shower_icon');
            $table->boolean('experience_icon');
            $table->boolean('guide_icon');
            $table->boolean('disability_icon');
            $table->boolean('shop_icon');
            $table->boolean('others_icon');
            $table->string('memo', 500);
            $table->boolean('is_show');
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('road_stations');
    }
};
