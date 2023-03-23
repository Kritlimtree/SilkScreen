<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usershop extends Model
{
    use HasFactory;
    
    protected $table="usershops";
    protected $fillable = [
        'id_tumbon','user_name','user_fname','user_phone','user_email','user_password','user_address','is_admin'
    ];
}
