<?php

namespace App\model\painel;

use Illuminate\Database\Eloquent\Model;

class TablePrice extends Model
{
    
    protected $fillable = [
        'name_service', 'price'
    ];

}
