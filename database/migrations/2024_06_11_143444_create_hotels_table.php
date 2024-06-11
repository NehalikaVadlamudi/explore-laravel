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
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('hotel_code', 50)->notNull(); // Define 'hotel_code' column
            $table->string('hotel_name', 255)->notNull(); // Define 'hotel_name' column
            $table->string('hotel_address', 255)->notNull(); // Define 'hotel_address' column
            $table->string('hotel_postcode', 20)->notNull(); // Define 'hotel_postcode' column
            $table->string('hotel_city', 100)->notNull(); // Define 'hotel_city' column
            $table->string('hotel_url', 255)->nullable(); // Define 'hotel_url' column as nullable
            $table->Integer('country_code'); // Define 'country_code' column
            $table->unsignedInteger('star_rating_id'); // Define 'star_rating_id' column
            $table->unsignedInteger('hotel_chain_id'); // Define 'hotel_chain_id' column
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns for timestamps

            // Define foreign key constraints
            $table->foreign('country_code')->references('country_code')->on('countries');
            $table->foreign('star_rating_id')->references('id')->on('ref_star_ratings');
            $table->foreign('hotel_chain_id')->references('id')->on('hotel_chains');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
