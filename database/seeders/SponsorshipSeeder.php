<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsorship;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sponsorship::insert(
            [
            'title' => 'Rajawali Foundation',
            'description' => "Rajawali Foundation menyediakan beasiswa kepada Mahasiswa Strata 1 IT Del. Beasiswa ini diberikan kepada mahasiswa terbaik IT Del yang terpilih. Sebagai bentuk kepedulian swasta di bidang pendidikan, Rajawali Foundation memberikan beasiswa bagi mahasiswa berprestasi di Institut Teknologi DEL, Toba, Sumatra Utara. 
                Beasiswa ini berupa penanggungan biaya kuliah hingga lulus kuliah. Sedangkan untuk dosen, beasiswa berupa kuliah gratis ke luar negeri.",
            'image' => 'https://lh4.googleusercontent.com/chAttRoW6s9PIeiC0YUKhlS_Ab0vfAXJSC8fNVHe71tB0pPDuON7PdVD_Pi_zPCeqAU=w2400'
            ],
            [
            'title' => 'Tanoto Foundation',
            'description' => "Tanoto Foundation menggandeng mitra PT Toba Pulp Lestari Tbk untuk mendukung peningkatan kualitas pendidikan di Institut Teknologi Del (IT Del), Sumatra Utara. 
                    Komitmen tersebut diwujudkan melalui penandatanganan perjanjian kerjasama antara ketiga lembaga tersebut sebagai landasan dalam mendukung program-program peningkatan kualitas pendidikan di IT Del. 
                    Acara penandatanganan digelar di Kampus IT Del, Balige, Toba Samosir, Sumatra Utara, Senin (17/6).",
            'image' => 'https://lh5.googleusercontent.com/1mn7CVVYlpTmAp2lkn7xNW9BQCxp9HWqkkDLvb2n-QmK2ynROY9qv-VOfYWwyMQRLtU=w2400'
            ],
            [
                'title' => 'BNI Foundation',
                'description' => "PT Bank Negara Indonesia (Persero), Tbk menyerahkan bantuan beasiswa kepada mahasiswa Institut Teknologi Del, bertempat di Desa Sitoluama, Kecamatan Laguboti, Kabupaten Toba Samosir yang berlangsung pada hari, Selasa, tanggal 7 Juli 2020. 
                                    Penyerahan beasiswa tersebut dilakukan oleh Pimpinan Bank BNI Cabang Balige yaitu Ibu Yohana Paulina H. dan disaksikan Pimpinan Bank BNI Cabang Porsea Ibu Hilda bersama tim CSR(corporate social responcibility) serta tim dari pihak IT Del yaitu Rektor, WR1, WR3, dan Lembaga Kemahasiswaan.",
                'image' => 'https://lh5.googleusercontent.com/N3cyBI3MH2GUxbBahc0DJWkec_ltjlF6zqTax-PZ3HIdiuuhydcBG1U8agunaaKRRsw=w2400'
            ],
            [
                'title' => 'Inalum Foundation',
                'description' => "Pada hari Senin, 4 April 2016, Direktur Umum dan Sumber Daya Manusia PT. Indonesia Asahan Alumenium (Inalum) Dr. Ir. Carry Mumbunan, MMA bersama dua orang staf mengunjungi kampus Institut Teknologi Del (IT Del). Kunjungan Dr. Carry Mumbunan disambut Wakil Rektor 3 IT Del Deni Lumbantoruan, ST, M.Eng dan Ketua Program Studi Teknik Elektro IT Del, Albert Sagala, ST, MT. 
                                    Pertemuan ini bertujuan untuk menjajaki kerjasama yang akan dilakukan antara kedua institusi yaitu PT. Inalum dan IT Del.",
                'image' => 'https://lh3.googleusercontent.com/HL64qvHfbYdHYz5RC20FSoKK-9wuFPUHyRnwKWq9g3yULvKoAd5Spor0jE4tYTN_gE8=w2400'
            ],
            [
                'title' => 'CIMB Foundation',
                'description' => "Program Beasiswa CIMB Niaga mendukung mimpi para generasi penerus bangsa untuk mendapatkan pendidikan yang memadai. Khususnya di kondisi Pandemi Covid-19 yang membawa banyak dampak perubahan bagi kehidupan bermasyarakat, tanpa terkecuali di sektor ekonomi dan pendidikan. 
                                    Kedua hal ini harus menjadi kebutuhan yang diperjuangkan, karena kondisi perekonomian yang sulit seharusnya tidak memadamkan semangat dan mimpi para generasi muda untuk melanjutkan studinya.",
                'image' => 'https://lh3.googleusercontent.com/8HB7lmSgcnAo8pPBifiyTXtqs3LYB0bBfffx6vJP0wLYogOqdx9K3pmtM-YDwF6iIp8=w2400'
            ],
            [
                'title' => 'Bidikmisi/KIP',
                'description' => "Program beasiswa Bidikmisi adalah program bantuan biaya pendidikan yang diberikan oleh Pemerintah melalui Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti) Kementerian Pendidikan dan Kebudayaan mulai tahun 2010 kepada mahasiswa yang memiliki potensi akademik memadai dan kurang mampu secara ekonomi.
                Program Bidikmisi bertujuan:;
                1. meningkatkan motivasi belajar dan prestasi calon mahasiswa, khususnya mereka yang menghadapi kendala ekonomi.;
                2. meningkatkan akses dan kesempatan belajar di perguruan tinggi bagi rakyat Indonesia yang berpotensi akademik tinggi dan kurang mampu secara ekonomi.; 
                3. menjamin keberlangsungan studi mahasiswa sampai selesai.; 
                4. meningkatkan prestasi mahasiswa, baik pada bidang akademik/kurikuler, kokurikuler maupun ekstra kurikuler.; 
                5. menimbulkan dampak positif bagi mahasiswa dan calon mahasiswa lain untuk selalu meningkatkan prestasi.; 
                6. melahirkan lulusan yang mandiri, produktif, dan memiliki kepedulian sosial, sehingga mampu berperan dalam upaya pengentasan kemiskinan.",
                'image' => '-'
            ]
    );
    }
}
