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
            $table->timestamps();
            $table->char("Company", 150);
            $table->char("Departure_station", 150);
            $table->char("Arrival_station", 150);
            $table->time("Departure_time");
            $table->time("Arrival_time");
            $table->char("Train_code", 15);
            $table->integer("Number_of_carriages");
            $table->boolean("On_time");
            $table->boolean("Cancelled");
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
