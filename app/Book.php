<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Book extends Model
{

    // for mass assignment
    protected $fillable = [
        'category_id', 'edition', 'language_id', 'pub_year', 'title',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)
        ->withPivot('status', 'edition', 'pub_year')
        ->wherePivot('user_id', Auth::id());
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function borrowers()
    {
        //return with extra column in pivot table
        return $this->belongsToMany(Borrower::class)->withPivot('borrower_id', 'book_id','lend_date', 'return_date', 'orginal_return_date');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
