<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestapms = false; // disable timestapms in books table

    // for mass assignment
    protected $fillable = [
        'category_id', 'edition', 'language_id', 'pub_year', 'title',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function borrowers()
    {
        return $this->belongsToMany(Borrower::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function purchaseDates()
    {
        return $this->hasMany(PurchaseDate::class);
    }
}
