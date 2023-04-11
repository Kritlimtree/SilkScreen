<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambon extends Model
{
    use HasFactory;
    
    protected $table="tambons";
    protected $fillable = [
        'id_district','tumbon_name'
    ];
}
