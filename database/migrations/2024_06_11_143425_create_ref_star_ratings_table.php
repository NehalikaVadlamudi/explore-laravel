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
        Schema::create('ref_star_ratings', function (Blueprint $table) {
            $table->increments('id')->primary(); // Auto-incrementing primary key
            $table->enum('star_ratings_code', ['Low', 'Medium', 'High', 'None'])->default('None'); // Enum column for star_ratings_code with default 'None'
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_star_ratings');
    }
};
