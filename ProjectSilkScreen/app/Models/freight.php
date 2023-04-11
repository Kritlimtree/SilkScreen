<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freight extends Model
{
    use HasFactory;
    
    protected $table="freights";
    protected $fillable = [
        'id_transport','min','max','price'
    ];
}
