<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'email' => 'staff@contoh.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'email' => 'manager@contoh.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'email' => 'spv@contoh.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'email' => 'direktur@contoh.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'email' => 'finance@contoh.com',
            'password' => 'password',
        ]);
    }
}
