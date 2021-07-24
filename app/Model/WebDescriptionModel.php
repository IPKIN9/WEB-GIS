<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WebDescriptionModel extends Model
{
    protected $table = '_web_description';
    protected $fillable = [
        'web_description', 'created_at', 'updated_at'
    ];
}
