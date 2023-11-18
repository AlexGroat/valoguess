<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('player_agent', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id;');
            $table->foreignId('agent_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('player_agent');
    }
};
