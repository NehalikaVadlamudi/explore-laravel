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
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->date('date_from'); // Date column for date_from
            $table->date('date_to'); // Date column for date_to
            $table->unsignedInteger('guest_id'); // Integer column for guest_id

            $table->timestamps(); // Adds created_at and updated_at columns

            // Foreign key constraint
            $table->foreign('guest_id')->references('id')->on('guest');

            // Index for guest_id
            $table->index('guest_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
