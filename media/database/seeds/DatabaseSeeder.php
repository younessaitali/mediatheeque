<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(categoriesTableSeeder::class);
        $this->call(optionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(mediathequeSeeder::class);
    }
}
