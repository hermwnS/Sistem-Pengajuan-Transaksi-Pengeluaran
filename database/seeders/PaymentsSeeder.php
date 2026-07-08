<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payments;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payments::factory()->create([
            'payment_name' => 'Payment 1',
            'payment_amount' => 1000000,
            'id_submission' => 1,
        ]);
        Payments::factory()->create([
            'payment_name' => 'Payment 2',
            'payment_amount' => 2000000,
            'id_submission' => 2,
        ]);
        Payments::factory()->create([
            'payment_name' => 'Payment 3',
            'payment_amount' => 3000000,
            'id_submission' => 3,
        ]);
        Payments::factory()->create([
            'payment_name' => 'Payment 4',
            'payment_amount' => 4000000,
            'id_submission' => 4,
        ]);
        Payments::factory()->create([
            'payment_name' => 'Payment 5',
            'payment_amount' => 5000000,
            'id_submission' => 5,
        ]);
    }
}
