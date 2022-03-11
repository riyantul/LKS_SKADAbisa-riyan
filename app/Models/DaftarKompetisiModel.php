<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarKompetisiModel extends Model
{
    use HasFactory;
    protected $table='kompetisi';
    protected $guarded = [
        'id'
    ];
}
