<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KondisiKorbanModel extends Model
{
    protected $table = 'kondisi_korban';
    protected $fillable = [
        'id', 'kon_kasus', 'ket',
        'created_at', 'updated_at'
    ];
}
