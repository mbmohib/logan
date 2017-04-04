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
        $book = new App\Book;
        $author = new App\Author;
        $rating = new App\Rating;

    }
}
