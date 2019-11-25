<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name', 'credits', 'price',
    ];
}
