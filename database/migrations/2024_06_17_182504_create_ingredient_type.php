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
        Schema::create('ingredient_type', function (Blueprint $table) {
            $table->increments('ingredient_type_id'); // Auto-incrementing primary key
            $table->string('ingredient_type_description', 250); // String column for ingredient_type_description with a max length of 250
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_type');
    }
};
