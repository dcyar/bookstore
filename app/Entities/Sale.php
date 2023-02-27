<?php

namespace App\Entities;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'plan_id',
        'price',
        'quantity',
        'session_id',
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
