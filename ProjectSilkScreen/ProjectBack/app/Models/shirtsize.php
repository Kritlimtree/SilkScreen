<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shirtsize extends Model
{
    use HasFactory;
    
    protected $table="shirtsizes";
    protected $fillable = [
        'shirtsize_size','shirtsize_chest','shirtsize_long','shirtsize_price'
    ];
}
