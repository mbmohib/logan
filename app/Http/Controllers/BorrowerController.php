<?php

namespace App\Http\Controllers;

use App\Borrower;
use App\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\User;

class BorrowerController extends Controller
{


    public function create(Request $request)
    {
        //Return Book with authentic user
        $books = Book::with('users')
                    ->whereHas('users', function($q) {
                        $q->where([['user_id', Auth::id()], ['status', true]]);
                    })
                   ->get();

        return view('admin.admin-add-borrower', compact('books'));
    }

    public function index(Request $request)
    {
        $borrowers = Borrower::where('user_id', $request->user()->id)
                                ->get();


        // // For returning number
        // $total = Borrower::where('user_id', $request->user()->id)->count();
        // $not_return = Borrower::where([
        //         ['status', true],
        //         ['user_id', $request->user()->id]
        //     ])->count();
        // $return = Borrower::where([
        //         ['status', false],
        //         ['user_id', $request->user()->id]
        //     ])->count();


        return view('admin.admin-borrower-list', compact('borrowers'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'lend_date' => 'required|date|before_or_equal:today',
            'return_date' => 'required|date|after_or_equal:lend_date', //Only accept if return date > lend date
            'books' => 'required',
        ]);

        //Get user ID
        $user_id = Auth::user()->id;

        //Find the borrower instance
        $name = $request->input('name');
        $borrower = Borrower::where([['name', $name], ['user_id', $user_id]])->get();


        // To Redirect to Borrower Add Page if not Exist
        $checkEmpty = $borrower;

        // Create Borrower if not exist
        if ($borrower->isEmpty()) {
            $borrower = new Borrower;
            $borrower->name = $request->input('name');
            $borrower->user_id = $user_id;
            $borrower->save();

            $borrower = Borrower::where('id', $borrower->id)->get();
        }


        //Format the date according to DB
        $lend_date = $request->input('lend_date');
		$fomatted_lend_date = Carbon::parse($lend_date)->format('Y-m-d');

        $return_date = $request->input('return_date');
		$fomatted_return_date = Carbon::parse($return_date)->format('Y-m-d');


        //Split string and convert to array
        $books = $request->input('books');
        $booksToArray = explode(',', $books);




        // Add multiple book to pivot table and update book status
        foreach ($booksToArray as $bookId) {
            $borrower[0]->books()->attach($bookId, [
                'lend_date' => $fomatted_lend_date,
                'return_date' => $fomatted_return_date
            ]);

			// for updating pivot table according to the user and book id
	        User::find($user_id)->books()->updateExistingPivot($bookId, [
	            'status' => false
	        ]);
        }



        if ($checkEmpty->isEmpty()) {
            $request->session()->flash('status', 'Please Complete the Borrower Info!');
            return redirect()->route('borrower-update');
        }
        //Return a flash message
        $request->session()->flash('status', 'Add books to borrower Successfully!');
        return redirect()->route('borrowers');
    }

    public function borrowerUpdateCreate()
    {
        return view('admin.admin-borrower-update');
    }

	public function borrowerUpdate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'mobile' => 'required',
        ]);


        $borrower = Borrower::all()
                ->last()
                ->update([
                    'email' => $request->input('email'),
                    'mobile' => $request->input('mobile'),
                ]);



        $request->session()->flash('status', 'Borrower Added Successfully!');

        return redirect()->route('borrowers');

    }

    public function show(Borrower $borrower)
    {
        $books = $borrower->books;
        return view('admin.admin-borrower-show', compact('borrower', 'books'));
    }
}
