<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JenisKasusModel extends Model
{
    protected $table = 'jenis_kasus';
    protected $fillable = [
        'id','j_kasus',
        'created_at',
        'updated_at',
    ];
}
