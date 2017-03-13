<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->word,
    ];
});

$factory->define(App\Language::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->word,
    ];
});

$factory->define(App\Author::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->unique()->domainWord,
        'pub_year' => $faker->year,
        'image' => $faker->imageUrl,
        'category_id' => function() {
            $categories = App\Category::all();
            return $categories->random()->id;
        },
        'language_id' => function() {
            $languages = App\Language::all();
            return $languages->random()->id;
        },
    ];
});

$factory->define(App\Rating::class, function (Faker\Generator $faker) {

    return [
        'value' => $faker->randomDigit,
        'user_id' => function() {
            $users = App\User::all();
            return $users->random()->id;
        },
        'book_id' => function() {
            $books = App\Book::all();
            return $books->random()->id;
        },
    ];
});

$factory->define(App\PurchaseDate::class, function (Faker\Generator $faker) {

    return [
        'purchase_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'user_id' => function() {
            $users = App\User::all();
            return $users->random()->id;
        },
        'book_id' => function() {
            $books = App\Book::all();
            return $books->random()->id;
        },
    ];
});

$factory->define(App\Borrower::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'lend_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'return_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => $faker->boolean,
        'user_id' => function() {
            $users = App\User::all();
            return $users->random()->id;
        }

    ];
});
