<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
