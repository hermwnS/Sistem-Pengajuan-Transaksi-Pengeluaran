<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            CategoriesSeeder::class,
            UserSeeder::class,
            BudgetsSeeder::class,
            SubmissionsSeeder::class,
            ApprovalsSeeder::class,
            PaymentsSeeder::class,
        ]);
    }
}
