<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name']; // for mass assignment
    
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
