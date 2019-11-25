<?php

namespace App\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
