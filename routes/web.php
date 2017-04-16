<?php

Auth::routes();


// Welcome Section
Route::get('/', function () {
    return view('welcome');
});
Route::get('/registration', function() {
	return view('register');
});


//Dashboard Panel Route:
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
  Route::get('/', 'DashboardController@index');

	Route::get('/edit-profile', function ()    {
        return view('admin.admin-edit-profile');
    });

    Route::get('/change-password', function ()    {
        return view('admin.admin-change-password');
    });

    Route::get('/add-book', 'BookController@create')->name('add-book');
    // Route::get('/book/update/{book}', 'BookController@bookUpdateCreate')->name('book-update-create');
    Route::post('/book-update', 'BookController@bookUpdateStore')->name('book-update-store');
    Route::post('/add-book', 'BookController@store')->name('store-book');
    Route::get('/books', 'BookController@index')->name('show-books');
    Route::get('/books/{book}', 'BookController@show')->name('show-single-book');
    Route::get('/book-ajax','BookController@bookAjax');
    // Route::get('/books', function ()    {
    //     return view('admin.admin-books-list');
    // });

    Route::get('/add-borrower', 'BorrowerController@create');
    Route::post('/add-borrower', 'BorrowerController@store')->name('add-borrower');
    Route::get('/borrowers', 'BorrowerController@index')->name('borrowers');
    Route::get('/borrowers/{borrower}', 'BorrowerController@show')->name('borrower-show');
    Route::get('/borrower-update', 'BorrowerController@borrowerUpdateCreate')->name('borrower-update');
    Route::post('/borrower-update', 'BorrowerController@borrowerUpdate')->name('borrower-update');
    Route::post('/borrower-lend-update', 'BorrowerController@AddOrginalReturnDate')->name('orginal-return-update');
    Route::get('/borrower-ajax','BorrowerController@borrowerAjax')->name('borrower-ajax');

});

//Api Panel Route:
Route::group(['prefix' => 'api'], function () {
    Route::get('/borrowers', function ()    {
        $borrowers = \App\Borrower::all();
        return $borrowers;
    });
});
