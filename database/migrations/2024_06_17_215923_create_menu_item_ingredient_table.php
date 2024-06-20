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
        Schema::create('menu_item_ingredient', function (Blueprint $table) {
            
            $table->increments('menu_item_ingredient_id')->primary();
            $table->integer('item_quantity');
            $table->unsignedInteger('menu_item_id');
            $table->unsignedInteger('ingredient_id');
            $table->foreign('ingredient_id')->references('ingredient_id')->on('ingredient')->onDelete('cascade');
            $table->foreign('menu_item_id')->references('menu_item_id')->on('menu_item')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_item_ingredient');
    }
};
