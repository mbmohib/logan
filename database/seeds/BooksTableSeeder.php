<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        factory(App\Book::class, 25)->create()->each(function ($book) {

            $author = App\Author::all();
            $user = App\User::all();

            // For same user id for Book, Rating, PurchaseDate
            $userRandom = $user->random();

            //Every Books create a Rating and PurchaseDate
            factory(App\Rating::class)->create([
                'book_id' => $book->id,
                'user_id' => $userRandom->id,
            ]);

            factory(App\PurchaseDate::class)->create([
                'book_id' => $book->id,
                'user_id' => $userRandom->id,
            ]);

            //Save Data to pivot table
            $book->authors()->save($author->random());
            $book->users()->save($userRandom);
        });
    }
}
