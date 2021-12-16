<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampor extends Model
{
    
    
    protected $table = 'lampors';
    protected $fillable = [
        'id',
        'name',
        'price',
        'content'
    ];
}
