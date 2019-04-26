<?php

use Illuminate\Database\Seeder;
use App\mediatheque;

class mediathequeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mediatheque::create([

            'name' => 'lazaret',
            'adresse' => 'adresse',
            'phone' => '+212649871'

        ]);
    }
}
