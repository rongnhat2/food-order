<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    use HasFactory;
    protected $table = 'kitchen';
    protected $fillable = ['name', 'coefficient', 'valid', 'status', 'created_at', 'updated_at'];
}
