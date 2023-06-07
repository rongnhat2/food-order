<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $fillable = ['name', 'description', 'image', 'price', 'coefficient', 'status', 'created_at', 'updated_at'];
}
