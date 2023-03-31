<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataBeasiswa;

class DataMahasiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataBeasiswa::insert([
            [
                'nama' => 'Dian Permatasari Sitanggang',
                'nim' => '11319053',
                'prodi' => 'DIII Teknologi Informasi',
                'angkatan'=> 2019,
                'beasiswa'=> 'Beasiswa TPL',
                'tahun'=>'2020',
                'status'=> 'Sudah Lulus',
                'tahunTerima'=> 2019,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Putri Ayu Elisabeth Sihotang',
                'nim' => '11316022',
                'prodi' => 'DIII Teknik Informatika',
                'angkatan'=> 2016,
                'beasiswa'=> 'Bidikmisi',
                'tahun'=>'2016-2019',
                'status'=> 'Sudah Lulus',
                'tahunTerima'=> 2019,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Yenni Juliana Sibarani',
                'nim' => '11316002',
                'prodi' => 'DIII Teknik Komputer',
                'angkatan'=> 2016,
                'beasiswa'=> 'Bidikmisi',
                'tahun'=>'2016-2019',
                'status'=> 'Sudah Lulus',
                'tahunTerima'=> 2020,
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
