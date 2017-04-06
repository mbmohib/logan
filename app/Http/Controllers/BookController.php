<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Language;
use Auth;
use Carbon\Carbon;

use \App\Book;
use \App\Rating;
use \App\Author;
use \App\PurchaseDate;


class BookController extends Controller
{
    public function create()
    {
        // return categories from categories table
        $categories = Category::all();
        // return languages from languages table
        $languages = Language::all();
        return view('admin.admin-add-book', compact('categories', 'languages'));
    }

    public function store()
    {
        // $fornmatted_date = Carbon::parse(request('purchase_date'))->format('Y-m-d');
        // dd($fornmatted_date);

        $user_id = Auth::user()->id; // current user id

        $book = new Book; // instance of Book model
        // $author = new App\Author;
        $rating = new Rating; // instance of Rating model
        $purchase_date = new PurchaseDate; // instance of PurchaseDate

        // this function add new author in author table
        // if author existed returned id 
        $author = Author::firstOrNew([
            'name' => request('name')
        ]);

        if ($author->id == null)
        {
            $author->save();
        }

        $book->category_id = request('category_id');
        $book->edition = request('edition');
        $book->image = request('image');
        $book->language_id = request('language_id');
        $book->pub_year = request('pub_year');
        $book->title = request('title');
        $book->save();

        $author->books()->attach($book->id);
        $book->users()->attach($user_id);

        $purchase_date->book_id = $book->id;
        $purchase_date->purchase_date = Carbon::parse(request('purchase_date'))
                                        ->format('Y-m-d');
        $purchase_date->user_id = $user_id;
        $purchase_date->save();

        $rating->book_id = $book->id;
        $rating->user_id = $user_id;
        $rating->value = request('value');
        $rating->save();

        return redirect('/dashboard');

    }
}
