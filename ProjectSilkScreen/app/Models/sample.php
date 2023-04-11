<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sample extends Model
{
    use HasFactory;
    
    protected $table="samples";
    protected $fillable = [
        'id_order','sample_picture','sample_status','sample_detail'
    ];
}
