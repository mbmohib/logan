<?php

use Illuminate\Database\Seeder;

class BorrowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Borrower::class, 20)->create()->each(function ($borrower) {
            $books = App\Book::all();
            $borrower->books()->save($books->random());
        });
    }
}
