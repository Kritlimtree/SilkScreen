<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class geographies extends Model
{
    protected $table="geographies";
    protected $fillable = [
        'id','name',
    ];
}
