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
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('customer_id')->primary();
            $table->string('customer_first_name', 50);
            $table->string('customer_last_name', 50);
            $table->string('phone_number', 50);
            $table->string('cellphone_number', 50);
            $table->string('email_address', 100);
            $table->text('other_customer_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
