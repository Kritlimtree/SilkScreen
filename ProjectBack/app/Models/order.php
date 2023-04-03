<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    
    protected $table="orders";
    protected $fillable = [
        'id_order','id_user','id_status','id_post','order_id','order_type','picture','id_color',
        'order_price','postcode','order_orderdate','order_deliverydate','blockprice','id_sample','numshirtcolor','delivery_price'
    ];
}
