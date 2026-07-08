<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::factory()->create([
            'id_role' => 'STF',
            'name' => 'staff'
        ]);
        Roles::factory()->create([
            'id_role' => 'MGR',
            'name' => 'manager'
        ]);
        Roles::factory()->create([
            'id_role' => 'SPV',
            'name' => 'supervisor'
        ]);
        Roles::factory()->create([
            'id_role' => 'DIR',
            'name' => 'director'
        ]);
        Roles::factory()->create([
            'id_role' => 'FIN',
            'name' => 'finance'
        ]);
    }
}
