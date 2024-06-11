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
        Schema::create('guest', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->string('name', 200); // String column for name with a max length of 200
            $table->string('address', 250); // String column for address with a max length of 250
            $table->string('city', 50); // String column for city with a max length of 50
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest');
    }
};
