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
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->integer('room_floor'); // Integer column for room_floor
            $table->integer('room_floor_count'); // Integer column for room_floor_count
            $table->unsignedInteger('hotels_id'); // Unsigned integer column for hotels_id
            $table->unsignedInteger('ref_room_type_id'); // Unsigned integer column for ref_room_type_id
            
            // Foreign key constraints
            $table->foreign('hotels_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('ref_room_type_id')->references('id')->on('ref_room_type')->onDelete('cascade');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_rooms');
    }
};
