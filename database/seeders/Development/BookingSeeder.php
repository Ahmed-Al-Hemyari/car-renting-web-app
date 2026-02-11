<?php

namespace Database\Seeders\Development;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [
            [
                'user_id' => 1,
                'car_id' => 1,
                'start_date' => '2026-01-01',
                'end_date' => '2026-01-05',
                'status' => 'completed',
                'rated' => false,
            ],
            [
                'user_id' => 2,
                'car_id' => 2,
                'start_date' => '2026-01-02',
                'end_date' => '2026-01-06',
                'status' => 'completed',
                'rated' => false,
            ],
            [
                'user_id' => 3,
                'car_id' => 3,
                'start_date' => '2026-01-03',
                'end_date' => '2026-01-07',
                'status' => 'completed',
                'rated' => false,
            ],
            [
                'user_id' => 4,
                'car_id' => 4,
                'start_date' => '2026-01-04',
                'end_date' => '2026-01-08',
                'status' => 'completed',
                'rated' => false,
            ],
            [
                'user_id' => 5,
                'car_id' => 5,
                'start_date' => '2026-01-05',
                'end_date' => '2026-01-09',
                'status' => 'completed',
                'rated' => false,
            ],

            // Same cars again — but different months (no overlap)
            [
                'user_id' => 6,
                'car_id' => 1,
                'start_date' => '2026-02-01',
                'end_date' => '2026-02-05',
                'status' => 'pending',
                'rated' => false,
            ],
            [
                'user_id' => 7,
                'car_id' => 2,
                'start_date' => '2026-02-02',
                'end_date' => '2026-02-06',
                'status' => 'pending',
                'rated' => false,
            ],
        ];

        foreach ($bookings as $booking) {
            Booking::create($booking);
        }
    }
}
