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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 100);
            $table->string('leaving station', 100);
            $table->string('arrival station', 100);
            $table->datetime('leaving at');
            $table->datetime('arrival at');
            $table->tinyInteger('train number')->unique;
            $table->tinyInteger('number of wagon');
            $table->boolean('on time')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};
