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
        Schema::create('characteristics', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->integer('characteristic_code'); // Integer column for characteristic_code
            $table->string('characteristic_description', 250)->nullable(); // String column with a max length of 250, allowing NULL values
            $table->timestamps(); // Adds created_at and updated_at columns with current timestamp by default

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characteristics');
    }
};
