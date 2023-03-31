<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::insert([
            [
                'nama_prodi' => 'DIII Teknologi Informasi',
                'id_prodi' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_prodi' => 'DIV Teknologi Rekayasa Perangkat Lunak',
                'id_prodi' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_prodi' => 'S1 Informatika',
                'id_prodi' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_prodi' => 'S1 Sistem Informasi',
                'id_prodi' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_prodi' => 'S1 Manajemen Rekayasa',
                'id_prodi' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_prodi' => 'S1 Teknik Elektro',
                'id_prodi' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_prodi' => 'S1 Teknik Bioproses',
                'id_prodi' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}
