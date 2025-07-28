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
        Schema::create('journey_routes', function (Blueprint $table) {
            $table->id();
            $table->string('DepartureFrom')->nullable(true);
            $table->string('DepartureTo')->nullable(true);
            $table->time('DepartureDepTime')->nullable(true);
            $table->time('DepartureArrTime')->nullable(true);
            $table->string('ReturnFrom')->nullable(true);
            $table->string('ReturnTo')->nullable(true);
            $table->time('ReturnDepTime')->nullable(true);
            $table->time('ReturnArrTime')->nullable(true);
            $table->foreignId(column: 'Journey_id')->constrained('journeys');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journey_routes');
    }
};
