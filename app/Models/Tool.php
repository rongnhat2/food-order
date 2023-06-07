<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
    protected $table = 'tool';
    protected $fillable = ['name', 'description', 'size', 'total', 'valid', 'status', 'created_at', 'updated_at'];
}
