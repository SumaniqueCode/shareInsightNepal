<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livemarkets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('stockId');
            $table->string('symbol');
            $table->string('ltp');
            $table->string('pointChange');
            $table->string('percentChange');
            $table->string('openPrice');
            $table->string('highPrice');
            $table->string('lowPrice');
            $table->string('volume');
            $table->string('prevClosePrice');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livemarket');
    }
};
