<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statuspayment extends Model
{
    use HasFactory;
    
    protected $table="statuspayments";
    protected $fillable = [
        'statuspayment_name'
    ];
}
