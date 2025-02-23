<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbGabung extends Model
{
    use HasFactory;  
    public $timestamps = false;
    protected $fillable = [
        'id_senyawa',
        'id_unsur',
    ];
}
