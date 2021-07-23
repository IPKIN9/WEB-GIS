<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KriminalitasModel extends Model
{
    protected $table = 'kasus_kriminal';
    protected $fillable = [
        'id', 'kasus', 'j_kasus_id', 'tkp_id', 'jumlah',
        'user_id', 'ket', ' created_at', 'updated_at'
    ];
    public function j_kasus_rol()
    {
        return $this->belongsTo(JenisKasusModel::class, 'j_kasus_id');
    }
    public function tkp_rol()
    {
        return $this->belongsTo(TkpModel::class, 'tkp_id');
    }
}
