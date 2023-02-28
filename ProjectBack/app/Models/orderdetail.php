<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    use HasFactory;
    
    protected $table="orderdetails";
    protected $fillable = [
        'id_shirtcolor','id_color','id_shirtprice','id_order','orderdetail_picture','orderdetail_number','orderdetail_upper',
        'orderdetail_lower','orderdetail_left','orderdetail_right','orderdetail_wide','orderdetail_long','orderdetail_price',
        'quantity'
    ];
}
