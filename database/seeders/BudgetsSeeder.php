<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Budgets;

class BudgetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Budgets::create([
            'budget_name' => 'Budget 1',
            'budget_amount' => 1000000,
        ]);
        Budgets::create([
            'budget_name' => 'Budget 2',
            'budget_amount' => 2000000,
        ]);
        Budgets::create([
            'budget_name' => 'Budget 3',
            'budget_amount' => 3000000,
        ]);
        Budgets::create([
            'budget_name' => 'Budget 4',
            'budget_amount' => 4000000,
        ]);
        Budgets::create([
            'budget_name' => 'Budget 5',
            'budget_amount' => 5000000,
        ]);
    }
}
