<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id_roles' => 1, 'name' => 'staff'],
            ['id_roles' => 2, 'name' => 'manager'],
            ['id_roles' => 3, 'name' => 'supervisor'],
            ['id_roles' => 4, 'name' => 'director'],
            ['id_roles' => 5, 'name' => 'finance'],
        ]);
    }
}
