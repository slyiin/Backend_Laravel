<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mall extends Model
{
    protected $fillable = [
        'name',
        'address'
    ];

    use HasFactory;
}
