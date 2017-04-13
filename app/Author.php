<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name']; // for mass assignment

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

}
