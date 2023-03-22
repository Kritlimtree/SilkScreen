<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    
    protected $table="payments";
    protected $fillable = [
        'id_order','id_statuspayment','payment_slip','payment_4num','payment_paid','payment_arrears','payment_date'
    ];
}
