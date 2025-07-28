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
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->integer('JournyCode')->nullable(false);
            $table->integer('JournyDate')->nullable(false);
            $table->string('JournyDestination')->nullable(true);
            $table->boolean('JourneyPretrip')->nullable(true);
            $table->foreignId(column: 'contact_id')->constrained('contacts');
            $table->foreignId(column: 'reason_id')->constrained('reasons');
            $table->string('Comments')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journeys');
    }
};
