<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPesertaModel extends Model
{
    use HasFactory;
    protected $table='daftar_peserta';
    protected $guarded = [
        'id'
    ];
}
