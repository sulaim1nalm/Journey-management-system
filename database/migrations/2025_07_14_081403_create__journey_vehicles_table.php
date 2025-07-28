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
        Schema::create('_journey_vehicles', function (Blueprint $table) {
              $table->id();
            //$table->integer('vehicle_id');
            $table->foreignId(column: 'vehicle_id')->constrained('vehicles');
            $table->foreignId(column: 'contact_id')->constrained('contacts');
            $table->text('PassengersList')->nullable(true);
            $table->date('JourneyVehicleDate')->nullable(true);
            $table->time('JourneyVehicleDepTime')->nullable(true);
            $table->time('JourneyVehicleArrTime')->nullable(true);
            $table->foreignId(column: 'Journey_id')->constrained('journeys');
            $table->timestamps();



            //-------------------------------------
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            //-----------two diffeerent ways-------------------
            //$table->foreignId('user_id')->constrained();
            //--------------------------------------
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_journey_vehicles');
    }
};
