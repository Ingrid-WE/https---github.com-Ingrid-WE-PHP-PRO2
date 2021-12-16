<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampor extends Model
{
    

    public $table = 'lampors';
    public $fillable = [
        'id',
        'name',
        'price',
        'content'
    ];
}
