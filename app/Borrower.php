<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
	protected $fillable = [
        'name', 'email', 'mobile', 'lend_date', 'return_date', 'status', 'user_id',
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
