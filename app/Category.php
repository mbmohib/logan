<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; // disable timestapms in category table

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
