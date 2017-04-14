<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{

	// for mass assignment
	protected $fillable = [
        'name', 'email', 'mobile', 'user_id', 'borrower',
    ];

    public function books()
    {
        //return with extra column in pivot table
        return $this->belongsToMany(Book::class)->withPivot('borrower_id', 'book_id','lend_date', 'return_date', 'orginal_return_date');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
        if ($filters['return'] == 'true') {
            $query->where('status', false);
        }
        if ($filters['return'] == 'false') {
            $query->where('status', true);
        }
    }
}
