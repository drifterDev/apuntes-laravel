<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // Mutators
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = strtolower($name);
    }

    // Accessors
    public function getSlugAttribute()
    {
        return Str::slug($this->attributes['name']);
    }

    public function href()
    {
        return "blog/{$this->slug}";
    }
}
