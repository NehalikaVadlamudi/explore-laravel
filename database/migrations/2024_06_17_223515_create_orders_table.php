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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id')->primary(); 
            $table->datetime('order_date_time');
            $table->integer('staff_id');
            $table->unsignedInteger('dinning_table_id');
            $table->foreign('staff_id')->references('staff_id')->on('staff')->onDelete('cascade');
            $table->foreign('dinning_table_id')->references('dinning_table_id')->on('dinning')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
