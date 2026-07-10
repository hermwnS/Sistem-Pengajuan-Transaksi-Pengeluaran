<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id_category' => 1, 'category_name' => 'PO Produk'],
            ['id_category' => 2, 'category_name' => 'Perbaikan Kendaraan'],
            ['id_category' => 3, 'category_name' => 'Perbaikan Gedung'],
            ['id_category' => 4, 'category_name' => 'Perbaikan Komputer'],
            ['id_category' => 5, 'category_name' => 'Maintenance Website'],
            ['id_category' => 6, 'category_name' => 'Maintenance Server'],
            ['id_category' => 7, 'category_name' => 'Maintenance Jaringan'],
            ['id_category' => 8, 'category_name' => 'Biaya Kendaraan'],
        ]);
    }
}
