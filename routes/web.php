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

    Route::get('/add-book', 'BookController@create')->name('add-book');

    Route::post('/add-book', 'BookController@store')->name('store-book');

    Route::get('/books', function ()    {
        return view('admin.admin-books-list');
    });

    Route::get('/add-borrower', 'BorrowerController@create');
    Route::post('/add-borrower', 'BorrowerController@store')->name('add-borrower');
    Route::get('/borrowers', 'BorrowerController@index')->name('borrowers');
    Route::post('/borrowers', 'BorrowerController@bookStore');

});
