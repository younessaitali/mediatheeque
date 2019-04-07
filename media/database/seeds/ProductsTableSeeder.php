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
                'description' => 'this book is amazing by it now-' . $i,
                '_tags' => '{
                            "img_path":["/img/books/' . $i . '.jpg"],
                            "auth":"auth' . $i . '" ,
                            "genre":"genre' . $i . '"
                                }',

                'price' => rand(0, 249999),
                'promo_price' => rand(0, 249999),
                'stars' => 2,
                'quantity' => rand(0, 200),
                'type' => '{
                    "audiobook": {"price":"123","promo_price":"123"},
                    "Digital": {"price":"222","promo_price":"222"},
                    "hardcover": {"price":"33","promo_price":"333"}
                  }',
                'disp' => rand(true, false),



            ]);
        }
        for ($i = 1; $i <= 17; $i++) {
            Products::create([
                'title' => 'Movie ' . $i,
                'description' => 'this movie is amazing by it now-' . $i,
                '_tags' => '{
                            "img_path":["/img/movies/' . $i . '.jpg"],
                            "auth":"auth' . $i . '" ,
                            "genre":"genre' . $i . '"
                                }',

                'price' => rand(0, 249999),
                'promo_price' => rand(0, 249999),
                'quantity' => rand(0, 200),
                'type' => '{
                    "audiobook": {"price":"123","promo_price":"123"},
                    "Digital": {"price":"222","promo_price":"222"},
                    "hardcover": {"price":"33","promo_price":"333"}
                  }',
                'disp' => rand(true, false),


            ]);
        }
    }
}
