<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudgetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('budgets')->insert([
            ['id_category' => 1, 'budget_name' => 'Budget 1', 'budget_amount' => 1000000],
            ['id_category' => 2, 'budget_name' => 'Budget 2', 'budget_amount' => 2000000],
            ['id_category' => 3, 'budget_name' => 'Budget 3', 'budget_amount' => 3000000],
            ['id_category' => 4, 'budget_name' => 'Budget 4', 'budget_amount' => 4000000],
            ['id_category' => 5, 'budget_name' => 'Budget 5', 'budget_amount' => 5000000],
        ]);
    }
}
