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

    public function store(Request $request)
    {

        $lend_date = $request->input('lend_date');
		$fomatted_lend_date = Carbon::parse($lend_date)->format('Y-m-d');

        $return_date = $request->input('return_date');
		$fomatted_return_date = Carbon::parse($return_date)->format('Y-m-d');

        return Borrower::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'lend_date' => $fomatted_lend_date,
            'return_date' => $fomatted_return_date,
            'status' => 1,
            'user_id' => $request->user()
        ]);

    }
}
