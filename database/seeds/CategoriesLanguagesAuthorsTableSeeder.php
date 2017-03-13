<?php

use Illuminate\Database\Seeder;

class CategoriesLanguagesAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 5)->create();
        factory(App\Language::class, 5)->create();
        factory(App\Author::class, 5)->create();
    }
}
