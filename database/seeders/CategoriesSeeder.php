<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
            'id_category' => 1,
            'category_name' => 'PO Produk',
        ]);

        Categories::create([
            'id_category' => 2,
            'category_name' => 'Perbaikan Kendaraan',
        ]);

        Categories::create([
            'id_category' => 3,
            'category_name' => 'Perbaikan Gedung',
        ]);

        Categories::create([
            'id_category' => 4,
            'category_name' => 'Perbaikan Komputer',
        ]);

        Categories::create([
            'id_category' => 5,
            'category_name' => 'Maintenance Website',
        ]);

        Categories::create([
            'id_category' => 6,
            'category_name' => 'Maintenance Server',
        ]);

        Categories::create([
            'id_category' => 7,
            'category_name' => 'Maintenance Jaringan',
        ]);

        Categories::create([
            'id_category' => 8,
            'category_name' => 'Biaya Kendaraan',
        ]);
    }
}
