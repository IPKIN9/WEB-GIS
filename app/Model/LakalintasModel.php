<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LakalintasModel extends Model
{
    protected $table = 'kasus';
    protected $fillable = [
        'id', 'kasus_id', 'jalan_id',
        'jumlah_korban', 'kon_id', 'user_id',
        'ket', 'created_at', 'updated_at'
    ];
    public function kasus_rol()
    {
        return $this->belongsTo(JenisKasusModel::class, 'kasus_id');
    }
    public function jalan_rol()
    {
        return $this->belongsTo(JalanModel::class, 'jalan_id');
    }
    public function kon_rol()
    {
        return $this->belongsTo(KondisiKorbanModel::class, 'kon_id');
    }
}
