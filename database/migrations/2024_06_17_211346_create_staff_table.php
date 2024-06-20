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
        Schema::create('staff', function (Blueprint $table) {
            
            $table->integer('staff_id')->primary();
            $table->string('staff_first_name', 50);
            $table->string('staff_last_name', 50);
            $table->integer('staff_role_id');

            $table->foreign('staff_role_id')->references('staff_role_id')->on('staff_role')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
