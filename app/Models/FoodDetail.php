<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDetail extends Model
{
    use HasFactory;
    protected $table = 'food_detail';
    protected $fillable = ['food_id', 'ingredient_id', 'value', 'status', 'created_at', 'updated_at'];
}
