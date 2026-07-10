<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('submissions')->insert([
            'name' => 'Submission 1',
            'id_user' => 1,
            'id_category' => 1,
            'tanggal' => now()->toDateString(),
            'nilai_pengajuan' => 1000000,
            'deskripsi' => 'Contoh pengajuan pertama',
            'lampiran_dokumen' => null,
            'status' => 'submitted',
        ]);

        DB::table('submissions')->insert([
            'name' => 'Submission 2',
            'id_user' => 2,
            'id_category' => 2,
            'tanggal' => now()->toDateString(),
            'nilai_pengajuan' => 200000,
            'deskripsi' => 'Contoh pengajuan kedua',
            'lampiran_dokumen' => null,
            'status' => 'draft',
        ]);

        DB::table('submissions')->insert([
            'name' => 'Submission 3',
            'id_user' => 3,
            'id_category' => 3,
            'tanggal' => now()->toDateString(),
            'nilai_pengajuan' => 300000,
            'deskripsi' => 'Contoh pengajuan ketiga',
            'lampiran_dokumen' => null,
            'status' => 'waiting SPV approved',
        ]);

        DB::table('submissions')->insert([
            'name' => 'Submission 4',
            'id_user' => 4,
            'id_category' => 4,
            'tanggal' => now()->toDateString(),
            'nilai_pengajuan' => 40000,
            'deskripsi' => 'Contoh pengajuan keempat',
            'lampiran_dokumen' => null,
            'status' => 'waiting manager approved',
        ]);

        DB::table('submissions')->insert([
            'name' => 'Submission 5',
            'id_user' => 5,
            'id_category' => 5,
            'tanggal' => now()->toDateString(),
            'nilai_pengajuan' => 50000,
            'deskripsi' => 'Contoh pengajuan kelima',
            'lampiran_dokumen' => null,
            'status' => 'paid',
        ]);
    }
}
