<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprovalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('approvals')->insert([
            ['id_submission' => 1, 'id_roles' => 1, 'status' => 'pending', 'catatan' => null, 'approved_by' => ''],
            ['id_submission' => 2, 'id_roles' => 2, 'status' => 'pending', 'catatan' => null, 'approved_by' => ''],
            ['id_submission' => 3, 'id_roles' => 3, 'status' => 'pending', 'catatan' => null, 'approved_by' => ''],
            ['id_submission' => 4, 'id_roles' => 4, 'status' => 'pending', 'catatan' => null, 'approved_by' => ''],
            ['id_submission' => 5, 'id_roles' => 5, 'status' => 'pending', 'catatan' => null, 'approved_by' => ''],
        ]);
    }
}
