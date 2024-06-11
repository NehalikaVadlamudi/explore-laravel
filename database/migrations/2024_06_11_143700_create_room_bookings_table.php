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
        Schema::create('room_bookings', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->date('date_booking_from'); // Date column for date_booking_from
            $table->date('date_booking_to'); // Date column for date_booking_to
            $table->integer('room_count'); // Integer column for room_count
            $table->unsignedInteger('hotels_id'); // Unsigned integer column for hotels_id
            $table->unsignedInteger('ref_room_type_id'); // Unsigned integer column for ref_room_type_id
            $table->unsignedInteger('bookings_id'); // Unsigned integer column for bookings_id

            // Foreign key constraints
            $table->foreign('hotels_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('ref_room_type_id')->references('id')->on('ref_room_type')->onDelete('cascade');
            $table->foreign('bookings_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_bookings');
    }
};
