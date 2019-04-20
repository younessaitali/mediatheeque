<?php

use Illuminate\Database\Seeder;
use App\products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 9; $i++) {
            Products::create([
                'title' => 'Boook ' . $i,
                'description' => 'this book is amazing buy it now-' . $i,
                'images' => ["/img/books/" . $i . ".jpg", " "],

                'price' => rand(0, 100),
                'promo_price' => rand(0, 100),
                'stars' => 5,
                'categories_id' => 2,
                'quantity' => rand(0, 200),
                'tags' => ["audiobook", "autho"],
                'disp' => rand(true, false),
                'option_id' => 1,
                'mult' => false,

            ]);
        }
        for ($i = 1; $i <= 17; $i++) {
            Products::create([
                'title' => 'Movie ' . $i,
                'description' => 'this movie is amazing by it now-' . $i,
                'images' => ["/img/movies/" . $i . ".jpg", " "],

                'price' => rand(0, 100),
                'promo_price' => rand(0, 100),
                'stars' => 5,
                'categories_id' => 1,
                'quantity' => rand(0, 200),
                'tags' => ["movie", "director"],
                'disp' => rand(true, false),
                'option_id' => 1,
                'mult' => false,

            ]);
        }
    }
}
