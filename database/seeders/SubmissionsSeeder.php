<?php

namespace Database\Seeders;

use App\Models\Submissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Submissions::factory()->create([
            'submission_name' => 'Submission 1',
            'submission_amount' => 100000000,
            'id_user' => 1,
            'id_category' => 1,
        ]);

        Submissions::factory()->create([
            'submission_name' => 'Submission 2',
            'submission_amount' => 2000000,
            'id_category' => 2,
            'id_user' => 2,
        ]);

        Submissions::factory()->create([
            'submission_name' => 'Submission 3',
            'submission_amount' => 3000000,
            'id_category' => 3,
            'id_user' => 3,
        ]);

        Submissions::factory()->create([
            'submission_name' => 'Submission 4',
            'submission_amount' => 400000,
            'id_category' => 4,
            'id_user' => 4,
        ]);

        Submissions::factory()->create([
            'submission_name' => 'Submission 5',
            'submission_amount' => 500000,
            'id_category' => 5,
            'id_user' => 5,
        ]);
    }
}
