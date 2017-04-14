<?php

namespace App\Http\Controllers;

use App\Borrower;
use App\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
      $latest_books = Book::whereHas('users', function($q) {
                        $q->where('user_id', Auth::id());
                      })->orderBy('id', 'desc')->take(7)->get();

      $expire_return_books = Book::whereHas('borrowers', function($q){
                              $q->where('user_id', Auth::id())->
                              whereDate("return_date",'<', date('Y-m-d'))->
                              whereNull("orginal_return_date")->
                              orderBy('return_date', 'ASC')->take(7);
              })->get();

      $upcoming_return_books = Book::whereHas('borrowers', function($q){
                              $q->where('user_id', Auth::id())->
                              whereDate("return_date",'>=', date('Y-m-d'))->
                              whereNull("orginal_return_date")->
                              orderBy('return_date', 'desc')->take(7);
              })->get();

      return view('admin.admin-dashboard', compact(
                              'latest_books',
                              'expire_return_books',
                              'upcoming_return_books'
                              ));
    }
}
