<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class block extends Model
{
    protected $table="blocks";
    protected $fillable = [
        'block_name','block_wide','block_long','block_price'
    ];
}
