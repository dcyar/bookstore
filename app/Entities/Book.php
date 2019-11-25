<?php

namespace App\Entities;

use App\User;
use App\Entities\Author;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Book extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'title', 'slug', 'price', 'published_date', 'author_id', 'publish',
    ];

    public function getCoverAttribute()
    {
        return $this->getFirstMedia('book');
        // return $this->getMedia('book')->last();
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
              ->width(150)
              ->height(100)
              ->sharpen(10);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
