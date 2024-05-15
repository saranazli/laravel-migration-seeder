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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 100);
            $table->string('leaving_station', 100);
            $table->string('arrival_station', 100);
            $table->string('leaving_at');
            $table->string('arrival_at');
            $table->string('train_number')->unique;
            $table->string('number_of_wagon');
            $table->boolean('on_time')->default();
            $table->boolean('deleted')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
