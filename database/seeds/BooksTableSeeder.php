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
        factory(App\Book::class, 2)->create()->each(function ($book) {
            $author = App\Author::all();
            $user = App\User::all();
            $userRandom = $user->random();

            factory(App\Rating::class)->create([
                'book_id' => $book->id,
                // 'user_id' => $userRandom,
            ]);

            $book->authors()->save($author->random());
            $book->users()->save($userRandom);
        });
    }
}
