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
        Schema::create('ingredient', function (Blueprint $table) {
            $table->increments('ingredient_id')->primary();
            $table->string('ingredient_name', 50);
            $table->unsignedInteger('ingredient_type_id');
            $table->foreign('ingredient_type_id')->references('ingredient_type_id')->on('ingredient_type')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient');
    }
};
