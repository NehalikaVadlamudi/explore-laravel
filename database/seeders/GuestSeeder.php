<?php


namespace Database\Seeders;

use App\Models\guest;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::factory()
        ->count(10)
        ->create();
    }
}
