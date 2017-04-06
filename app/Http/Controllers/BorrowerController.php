<?php

namespace App\Http\Controllers;

use App\Borrower;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BorrowerController extends Controller
{
    public function create()
    {
        return view('admin.admin-add-borrower');
    }

    public function index(Request $request)
    {
        $borrowers = Borrower::where('user_id', $request->user()->id)->latest();

        if ($request->has('return')) {
            if ($request->return == 'true') {
                $borrowers = $borrowers->where('status', false);
            } elseif ($request->return == 'false') {
                $borrowers = $borrowers->where('status', true);
            }
        }

        $total = Borrower::where('user_id', $request->user()->id)->count();
        $not_return = Borrower::where([
                ['status', true],
                ['user_id', $request->user()->id]
            ])->count();
        $return = Borrower::where([
                ['status', false],
                ['user_id', $request->user()->id]
            ])->count();

        $borrowers = $borrowers->get();

        return view('admin.admin-borrower-list', compact('borrowers', 'total' , 'return', 'not_return'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:borrowers',
            'mobile' => 'required|unique:borrowers',
            'lend_date' => 'required',
            'return_date' => 'required|date|after_or_equal:lend_date',
        ]);

        $lend_date = $request->input('lend_date');
		$fomatted_lend_date = Carbon::parse($lend_date)->format('Y-m-d');

        $return_date = $request->input('return_date');
		$fomatted_return_date = Carbon::parse($return_date)->format('Y-m-d');

        Borrower::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'lend_date' => $fomatted_lend_date,
            'return_date' => $fomatted_return_date,
            'user_id' => $request->user()->id
        ]);
        $request->session()->flash('status', 'Borrower added successfully!');
        return redirect()->route('borrowers');
    }
}
