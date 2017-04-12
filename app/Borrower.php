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
        return $this->belongsToMany(Book::class);
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
