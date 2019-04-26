<?php

use Illuminate\Database\Seeder;
use App\option;

class optionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        option::create([
            'title' => 'buy',
            'description' => '0',

        ]);
    }
}
