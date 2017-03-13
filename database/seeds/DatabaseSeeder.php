<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Independent Tables
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesLanguagesAuthorsTableSeeder::class);

        // Dependent Tables
        $this->call(BooksTableSeeder::class);
        $this->call(BorrowersTableSeeder::class);


    }
}
