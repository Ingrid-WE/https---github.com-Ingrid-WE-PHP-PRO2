<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lampor extends Model
{
    

    protected $table = 'lampors';
    protected $fillable = [
        'name',
        'course',
        'content'
    ];
}
