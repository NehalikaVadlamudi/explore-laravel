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
        Schema::create('room_rates_periods', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->string('rate_period_description', 250); // String column for rate_period_description with a max length of 250
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_rate_periods');
    }
};
