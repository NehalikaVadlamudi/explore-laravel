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
        Schema::create('order_menu_item', function (Blueprint $table) {
            $table->integer('order_menu_item_id');
            $table->integer('order_menu_item_quantity');
            $table->string('order_menu_item_comments', 250);
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('menu_item_id');
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
            $table->foreign('menu_item_id')->references('menu_item_id')->on('menu_item')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_menu_item');
    }
};
