<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbSenyawa extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'elemen',
        'media',
        'keterangan'
    ];
}

