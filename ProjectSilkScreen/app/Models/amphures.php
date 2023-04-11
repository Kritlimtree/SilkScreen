<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amphures extends Model
{
    protected $table="amphures";
    protected $fillable = [
        'id','name_th','name_en','province_id',
    ];
}
