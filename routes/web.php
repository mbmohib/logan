<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test', function() {
    $borrowers = App\Borrower::where('user_id', 3)->get();
    return $borrowers;
});
