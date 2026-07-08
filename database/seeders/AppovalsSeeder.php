<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Approvals;

class ApprovalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Approvals::create([
            'approval_name' => 'Approval 1',
            'status' => 'pending',
            'approved_by' => null,
        ]);
        Approvals::create([
            'approval_name' => 'Approval 2',
            'status' => 'pending',
            'approved_by' => null,
        ]);
        Approvals::create([
            'approval_name' => 'Approval 3',
            'status' => 'pending',
            'approved_by' => null,
        ]);
        Approvals::create([
            'approval_name' => 'Approval 4',
            'status' => 'pending',
            'approved_by' => null,
        ]);
        Approvals::create([
            'approval_name' => 'Approval 5',
            'status' => 'pending',
            'approved_by' => null,
        ]);
    }
}
