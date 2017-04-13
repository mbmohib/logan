<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Language;
use Auth;
use Carbon\Carbon;

use \App\Book;
use \App\Author;


class BookController extends Controller
{

    public function index ()
    {
        // $user_id = Auth::user()->id;
        // $books = Book::with('users')->get();
        // dd($books);
        $books = Book::with('users')
                    ->whereHas('users', function($q) {
                                   $q->where('user_id', Auth::id());
                        })
                   ->get();
        // return $books[0]->purchaseDates[0]->purchase_date;
        // return $books[1]->users[0]->pivot->status;
        return view('admin.admin-books-list', compact('books'));
    }

    public function create()
    {
        // return categories from categories table
        $categories = Category::all();
        // return languages from languages table
        $languages = Language::all();

        return view('admin.admin-add-book', compact('categories', 'languages'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'name' => 'required|string',
            'cat_name' => 'required|string',
            // array(
            //         'required',
            //         'regex:/(^([a-zA-z]+)(\d+)?$)/u'
            //     ),
            'lang_name' => 'required|string',
        ]);

        // this function add new author in author table
        // if author existed returned id
        $author = Author::firstOrNew([
            'name' => $request->input('name')
        ]);

        if ($author->id == null)
        {
            $author->save();
        }

        $category = Category::firstOrNew([
            'name' => $request->input('cat_name')
        ]);

        if ($category->id == null) {
            $category->save();
        }

        $language = Language::firstOrNew([
            'name' => $request->input('lang_name')
        ]);

        if ($language->id == null) {
            $language->save();
        }

        $book = Book::firstOrNew([
            'title' => $request->input('title'),
            'category_id' => $category->id,
            'language_id' => $language->id
        ]);

        if ($book->id == null) {
            $book->save();
        }
        // return $book;

        $user_id = Auth::user(); // current user id

        $author->books()->attach($book); // inserting data in the pivot table
        // $book->users()->attach($user_id);
        $user_id->books()->attach($book);

        // for success notification
        $request->session()->flash('status', 'Book added successfully!');

        return redirect('/dashboard');

    }

    public function bookUpdateCreate()
    {
        return view('admin.admin-book-update');
    }

    public function bookUpdateStore(Request $request)
    {
        $this->validate([
            'category_id' => 'required|numeric',
            'language_id' => 'required|numeric',
            'pub_year' => 'required|numeric',
        ]);
    }
}
