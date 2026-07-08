<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Users::factory()->create([
            'email' => 'staff@contoh.com',
            'password' => 'password',
        ]);

        Users::factory()->create([
            'email' => 'manager@contoh.com',
            'password' => 'password',
        ]);

        Users::factory()->create([
            'email' => 'spv@contoh.com',
            'password' => 'password',
        ]);

        Users::factory()->create([
            'email' => 'direktur@contoh.com',
            'password' => 'password',
        ]);

        Users::factory()->create([
            'email' => 'finance@contoh.com',
            'password' => 'password',
        ]);
    }
}
