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
        Users::create([
            'id' => 1,
            'email' => 'staff@contoh.com',
            'password' => 'password',
        ]);

        Users::create([
            'id' => 2,
            'email' => 'manager@contoh.com',
            'password' => 'password',
        ]);

        Users::create([
            'id' => 3,
            'email' => 'spv@contoh.com',
            'password' => 'password',
        ]);

        Users::create([
            'id' => 4,
            'email' => 'direktur@contoh.com',
            'password' => 'password',
        ]);

        Users::create([
            'id' => 5,
            'email' => 'finance@contoh.com',
            'password' => 'password',
        ]);
    }
}
