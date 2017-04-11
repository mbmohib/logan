<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $timestamps = false; // disable timestamps in languages table 

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
