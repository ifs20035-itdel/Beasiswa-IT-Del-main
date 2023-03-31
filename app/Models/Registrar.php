<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    protected $table = 'registrar';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_daftar','emailMhs','nama', 'nim','prodi','tipeBeasiswa','emailPribadi','noHp','tanggalLahir','ipk', 'tempatTinggal','ktm','ktp','transkrip','suratPernyataan','lainnya','created_at', 'updated_at'
    ];

    // use HasFactory;
}
