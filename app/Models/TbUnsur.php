<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbUnsur extends Model
{
    use HasFactory;

    protected $primaryKey = 'no';
    protected $fillable = [
        'no',
        'code',
        'nama',
        'atomic_mass',
        'melting_point',
        'boiling_point',
        'deskripsi',
        'media',
        'jenis',
    ];
}
