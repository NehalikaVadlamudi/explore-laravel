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
        Schema::create('ref_hotel_characteristics_hotels', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->unsignedInteger('characteristics_id'); // Unsigned integer column for characteristics_id
            $table->unsignedInteger('hotels_id'); // Unsigned integer column for hotels_id
            
            // Foreign key constraints
            $table->foreign('characteristics_id')->references('id')->on('characteristics')->onDelete('cascade');
            $table->foreign('hotels_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_hotel_characteristics_hotels');
    }
};
