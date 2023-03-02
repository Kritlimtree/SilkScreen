<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shirtcolor extends Model
{
    use HasFactory;
    
    protected $table="shirtcolors";
    protected $fillable = [
        'shirtcolor_name','shirtcolor_picture'
    ];
}
