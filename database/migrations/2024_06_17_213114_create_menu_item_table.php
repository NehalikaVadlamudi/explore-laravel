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
        Schema::create('menu_item', function (Blueprint $table) {
            $table->increments('menu_item_id')->primary(); 
            $table->string('menu_item_description', 250);
            $table->integer('menu_item_price');
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('menu_id')->on('menu')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_item');
    }
};
