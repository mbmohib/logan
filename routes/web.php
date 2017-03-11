<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/cat-lang', function() {
    $category = new \App\Category;
    $category->name = "Framework";
    $category->save();

    $language = new \App\Language;
    $language->name = "English";
    $language->save();

});

Route::get('/book', function() {
    $category = \App\Category::first();
    $language = \App\Language::first();
    $user = \App\User::first();

    $book = new \App\Book;
    $book->title = 'Pandas';
    $book->pub_year = 2015;

    $book->category()->associate($category);
    $book->language()->associate($language);
    $book->user()->associate($user);

    $book->save();

});
