<?php

namespace App\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'credits', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
