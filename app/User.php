<?php

namespace App;

use App\Entities\Book;
use App\Entities\Role;
use App\Entities\Wallet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        foreach ($this->roles()->get() as $role) {
            if ($role->name == 'Admin') {
                return true;
            }
        }
    }

    public function haveMoney($price)
    {
        if ($this->wallet->credits > $price) {
            return true;
        }

        return false;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'id');
    }
}
