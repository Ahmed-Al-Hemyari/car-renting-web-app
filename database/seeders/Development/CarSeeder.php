<?php

namespace Database\Seeders\Development;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'name' => 'Camry',
                'brand_id' => 1,
                'category_id' => 1,
                'price' => 100,
            ],
            [
                'name' => 'Civic',
                'brand_id' => 2,
                'category_id' => 1,
                'price' => 100,
            ],
            [
                'name' => 'Corolla',
                'brand_id' => 2,
                'category_id' => 1,
                'price' => 100,
            ],
            [
                'name' => 'Avalon',
                'brand_id' => 2,
                'category_id' => 1,
                'price' => 100,
            ],
            [
                'name' => 'Accord',
                'brand_id' => 2,
                'category_id' => 1,
                'price' => 100,
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
