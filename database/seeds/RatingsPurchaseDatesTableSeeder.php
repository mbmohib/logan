<?php

use Illuminate\Database\Seeder;

class RatingsPurchaseDatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rating::class, 15)->create();
        factory(App\PurchaseDate::class, 15)->create();
    }
}
