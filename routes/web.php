<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//Dashboard Panel Route:
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function ()    {
        return view('admin.dashboard');
    });

	Route::get('/edit-profile', function ()    {
        return view('admin.admin-edit-profile');
    });

    Route::get('/change-password', function ()    {
        return view('admin.admin-change-password');
    });

    Route::get('/add-book', function ()    {
        return view('admin.admin-add-book');
    });

    Route::get('/books', function ()    {
        return view('admin.admin-books-list');
    });

    Route::get('/add-borrower', function ()    {
        return view('admin.admin-add-borrower');
    });

    Route::get('/borrowers', function ()    {
        return view('admin.admin-borrower-list');
    });
});
