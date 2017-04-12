<?php

namespace App\Http\Controllers;

use App\Borrower;
use App\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BorrowerController extends Controller
{
    public function create(Request $request)
    {
        $books = Book::all();

        return view('admin.admin-add-borrower', compact('books'));
    }

    public function index(Request $request)
    {
        $borrowers = Borrower::where('user_id', $request->user()->id)
                                // ->filter(request(['return'])) //Scope function for filtering by return and non return
                                ->get();


        // For returning number
        $total = Borrower::where('user_id', $request->user()->id)->count();
        $not_return = Borrower::where([
                ['status', true],
                ['user_id', $request->user()->id]
            ])->count();
        $return = Borrower::where([
                ['status', false],
                ['user_id', $request->user()->id]
            ])->count();

        $books = Book::all();

        return view('admin.admin-borrower-list', compact('borrowers', 'books', 'total' , 'return', 'not_return'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'lend_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:lend_date', //Only accept if return date > lend date
            'books' => 'required',
        ]);


        //Find the borrower instance
        $name = $request->input('name');
        $borrower = Borrower::where('name', $name)->get();

        // To Redirect to Borrower Add Page if not Exist
        $checkEmpty = $borrower;

        // Create Borrower if not exist
        if ($borrower->isEmpty()) {
            $borrower = Borrower::insertGetId([
                'name' => $request->input('name'),
                'user_id' => $request->user()->id
            ]);
            $borrower = Borrower::where('id', $borrower)->get();
        }


        //Format the date according to DB
        $lend_date = $request->input('lend_date');
		$fomatted_lend_date = Carbon::parse($lend_date)->format('Y-m-d');

        $return_date = $request->input('return_date');
		$fomatted_return_date = Carbon::parse($return_date)->format('Y-m-d');


        //Split string and convert to array
        $books = $request->input('books');
        $booksToArray = explode(',', $books);

        // Add multiple book to pivot table
        foreach ($booksToArray as $bookId) {
            $borrower[0]->books()->attach($bookId, [
                'lend_date' => $fomatted_lend_date,
                'return_date' => $fomatted_return_date,
                'orginal_return_date' => $fomatted_return_date
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


        $borrower = $borrower = \App\Borrower::all()
                ->last()
                ->update([
                    'email' => $request->input('email'),
                    'mobile' => $request->input('mobile'),
                ]);



        $request->session()->flash('status', 'Borrower Added Successfully!');

        return redirect()->route('borrowers');

    }
}
