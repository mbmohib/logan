<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestapms = false; // disable timestapms for authors table
    protected $fillable = ['name']; // for mass assignment

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

}
