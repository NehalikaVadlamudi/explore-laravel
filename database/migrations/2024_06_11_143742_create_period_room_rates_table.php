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
        Schema::create('period_room_rates', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->float('room_rate'); // Float column for room_rate
            $table->unsignedInteger('ref_room_type_id'); // Unsigned integer column for ref_room_type_id
            $table->unsignedInteger('room_rates_periods_id'); // Unsigned integer column for room_rate_periods_id

            // Foreign key constraints
            $table->foreign('ref_room_type_id')->references('id')->on('ref_room_type')->onDelete('cascade');
            $table->foreign('room_rates_periods_id')->references('id')->on('room_rates_periods')->onDelete('cascade');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('period_room_rates');
    }
};
