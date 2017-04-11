<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDate extends Model
{
    public $timestapms = false; // disable timestapms in purchase_dates table
    
    // for mass assignment
    protected $fillable = [
        'book_id', 'purchase_date', 'user_id',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
