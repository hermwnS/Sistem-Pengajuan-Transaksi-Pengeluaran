<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            ['id_submission' => 1, 'payment_name' => 'Payment 1', 'status_payment' => 'pending', 'payment_date' => null, 'payment_amount' => 1000000],
            ['id_submission' => 2, 'payment_name' => 'Payment 2', 'status_payment' => 'pending', 'payment_date' => null, 'payment_amount' => 2000000],
            ['id_submission' => 3, 'payment_name' => 'Payment 3', 'status_payment' => 'pending', 'payment_date' => null, 'payment_amount' => 3000000],
            ['id_submission' => 4, 'payment_name' => 'Payment 4', 'status_payment' => 'pending', 'payment_date' => null, 'payment_amount' => 4000000],
            ['id_submission' => 5, 'payment_name' => 'Payment 5', 'status_payment' => 'pending', 'payment_date' => null, 'payment_amount' => 5000000],
        ]);
    }
}
