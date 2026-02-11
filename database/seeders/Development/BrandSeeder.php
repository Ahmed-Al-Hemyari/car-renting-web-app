<?php

namespace Database\Seeders\Development;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Toyota',
                'website_url' => 'https://toyota.com'
            ],
            [
                'name' => 'Honda',
                'website_url' => 'https://honda.com'
            ],
            [
                'name' => 'Ford',
                'website_url' => 'https://ford.com'
            ],
            [
                'name' => 'Chevrolet',
                'website_url' => 'https://chevrolet.com'
            ],
            [
                'name' => 'BMW',
                'website_url' => 'https://bmw.com'
            ],
            [
                'name' => 'Mercedes-Benz',
                'website_url' => 'https://mercedes-benz.com'
            ],
            [
                'name' => 'Audi',
                'website_url' => 'https://audi.com'
            ],
            [
                'name' => 'Lexus',
                'website_url' => 'https://lexus.com'
            ],
            [
                'name' => 'Acura',
                'website_url' => 'https://acura.com'
            ],
            [
                'name' => 'Infiniti',
                'website_url' => 'https://infiniti.com'
            ],
            [
                'name' => 'Porsche',
                'website_url' => 'https://porsche.com'
            ],
            [
                'name' => 'Ferrari',
                'website_url' => 'https://ferrari.com'
            ],
            [
                'name' => 'Lamborghini',
                'website_url' => 'https://lamborghini.com'
            ],
            [
                'name' => 'Maserati',
                'website_url' => 'https://maserati.com'
            ],
            [
                'name' => 'McLaren',
                'website_url' => 'https://mclaren.com'
            ],
            [
                'name' => 'Aston Martin',
                'website_url' => 'https://astonmartin.com'
            ],
            [
                'name' => 'Bentley',
                'website_url' => 'https://bentley.com'
            ],
            [
                'name' => 'Rolls-Royce',
                'website_url' => 'https://rolls-royce.com'
            ],
            [
                'name' => 'Jaguar',
                'website_url' => 'https://jaguar.com'
            ],
            [
                'name' => 'Land Rover',
                'website_url' => 'https://landrover.com'
            ],
            [
                'name' => 'Mini',
                'website_url' => 'https://mini.com'
            ],
            [
                'name' => 'Fiat',
                'website_url' => 'https://fiat.com'
            ],
            [
                'name' => 'Alfa Romeo',
                'website_url' => 'https://alfaromeo.com'
            ],
            [
                'name' => 'Maserati',
                'website_url' => 'https://maserati.com'
            ],
            [
                'name' => 'McLaren',
                'website_url' => 'https://mclaren.com'
            ],
            [
                'name' => 'Aston Martin',
                'website_url' => 'https://astonmartin.com'
            ],
            [
                'name' => 'Bentley',
                'website_url' => 'https://bentley.com'
            ],
            [
                'name' => 'Rolls-Royce',
                'website_url' => 'https://rolls-royce.com'
            ],
            [
                'name' => 'Jaguar',
                'website_url' => 'https://jaguar.com'
            ],
            [
                'name' => 'Land Rover',
                'website_url' => 'https://landrover.com'
            ],
            [
                'name' => 'Mini',
                'website_url' => 'https://mini.com'
            ],
            [
                'name' => 'Fiat',
                'website_url' => 'https://fiat.com'
            ],
            [
                'name' => 'Alfa Romeo',
                'website_url' => 'https://alfaromeo.com'
            ],
        ];

        Brand::insert($brands);
    }
}
