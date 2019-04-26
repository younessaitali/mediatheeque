<?php

use Illuminate\Database\Seeder;
use App\categorie;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorie::create([
            'name' => 'movies',
            'p_id' => '0',

        ]);
        categorie::create([
            'name' => 'books',
            'p_id' => '0',

        ]);
        categorie::create([
            'name' => 'journal',
            'p_id' => '0',

        ]);
        categorie::create([
            'name' => 'magazins',
            'p_id' => '0',

        ]);
    }
}
