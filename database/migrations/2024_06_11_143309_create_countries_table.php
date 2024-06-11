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
        Schema::create('countries', function (Blueprint $table) {
            $table->integer('country_code')->primary(); // Primary key
            $table->string('country_currency', 10); // String column for country_currency with a max length of 10
            $table->string('country_name', 50); // String column for country_name with a max length of 50
            $table->timestamps(); // Adds created_at and updated_at columns
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
