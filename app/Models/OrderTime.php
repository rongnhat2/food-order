<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTime extends Model
{
    use HasFactory;
    protected $table = 'order_time';
    protected $fillable = ['name', 'email', 'phone', 'address', 'prices', 'status', 'created_at', 'updated_at'];
}
