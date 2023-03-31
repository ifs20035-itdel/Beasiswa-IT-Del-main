<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeasiswaEksternal extends Model
{

    protected $table = 'beasiswa-eksternal';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_scholarship','title','tags', 'caption','thumbnail','registration_link','description', 'created_at', 'updated_at'
    ];
}
