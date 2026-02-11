<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\Development\CategorySeeder;
use Database\Seeders\Development\BrandSeeder;
use Database\Seeders\Development\CarSeeder;
use Database\Seeders\Development\UserSeeder;
use Database\Seeders\Development\BookingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            CarSeeder::class,
            UserSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
