<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Language;

class BookController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $languages = Language::all();
        return view('admin.admin-add-book', compact('categories', 'languages'));
    }

    public function store()
    {
        $user_id = Auth::user()->id; // current user id

        $book = new App\Book;
        // $author = new App\Author;
        $rating = new App\Rating;
        $purchase_date = new App\PurchaseDate;

        $author = App\Author::firstOrNew([
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
        $purchase_date->purchase_date = request('purchase_date');
        $purchase_date->user_id = $uers_id;

        $rating->book_id = $book->id;
        $rating->user_id = $user_id;
        $rating->value = request('value');

    }
}
