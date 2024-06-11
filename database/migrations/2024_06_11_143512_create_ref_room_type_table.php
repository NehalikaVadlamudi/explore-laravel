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
        Schema::create('ref_room_type', function (Blueprint $table) {
            $table->increments('id')->primary();// This will automatically create an auto-incrementing primary key column named 'id'
            $table->integer('room_standard_rate')->nullable(); // Integer column for room_standard_rate with max length 20
            $table->string('room_type_description', 250); // String column for room_type_description with a max length of 250
            $table->enum('smoking_YN', ['Y', 'N']); // Enum column for smoking_YN with possible values 'Y' and 'N'
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_room_type');
    }
};
