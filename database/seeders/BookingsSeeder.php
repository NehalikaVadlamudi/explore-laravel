<?php

namespace Database\Seeders;

use App\Models\bookings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bookings::factory()
        ->count(10)
        ->create();
    }
}
