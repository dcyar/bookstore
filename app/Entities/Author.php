<?php

namespace App\Entities;

use App\Entities\Book;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
