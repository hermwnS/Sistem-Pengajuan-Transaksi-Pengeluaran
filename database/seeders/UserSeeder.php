<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Staff',
            'email' => 'staff@contoh.com',
            'id_roles' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Manager',
            'email' => 'manager@contoh.com',
            'id_roles' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Supervisor',
            'email' => 'spv@contoh.com',
            'id_roles' => 3,
        ]);

        DB::table('users')->insert([
            'name' => 'Direktur',
            'email' => 'direktur@contoh.com',
            'id_roles' => 4,
        ]);

        DB::table('users')->insert([
            'name' => 'Finance',
            'email' => 'finance@contoh.com',
            'id_roles' => 5,
        ]);
    }
}
