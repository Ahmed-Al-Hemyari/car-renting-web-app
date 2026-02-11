<?php

namespace Database\Seeders\Development;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Sedan',
            ],
            [
                'name' => 'SUV',
            ],
            [
                'name' => 'Coupe',
            ],
            [
                'name' => 'Convertible',
            ],
            [
                'name' => 'Hatchback',
            ],
            [
                'name' => 'Truck',
            ],
            [
                'name' => 'Van',
            ],
            [
                'name' => 'Minivan',
            ],
            [
                'name' => 'Pickup',
            ],
            [
                'name' => 'Sports Car',
            ],
            [
                'name' => 'Luxury Car',
            ],
            [
                'name' => 'Electric Car',
            ],
            [
                'name' => 'Hybrid Car',
            ],
            [
                'name' => 'Convertible',
            ],
        ];

        Category::insert($categories);
    }
}
