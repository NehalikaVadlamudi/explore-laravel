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
        Schema::create('res_bookings', function (Blueprint $table) {
            $table->increments('bookings_id')->primary(); 
            $table->date('date_of_booking');
            $table->integer('number_in_party');
            $table->unsignedInteger('dinning_table_id');
            $table->integer('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');
            $table->foreign('dinning_table_id')->references('dinning_table_id')->on('dinning')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('res_bookings');
    }
};
