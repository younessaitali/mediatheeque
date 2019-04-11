<?php

use Illuminate\Database\Seeder;
use App\categories;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categories::create([
            'name' => 'movies',
            'p_id' => '0',

        ]);
        categories::create([
            'name' => 'books',
            'p_id' => '0',

        ]);
        categories::create([
            'name' => 'journal',
            'p_id' => '0',

        ]);
        categories::create([
            'name' => 'magazins',
            'p_id' => '0',

        ]);
    }
}
