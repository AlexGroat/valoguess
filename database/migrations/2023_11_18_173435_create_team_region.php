<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('team_region', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id');
            $table->foreignId('region_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('team_region');
    }
};