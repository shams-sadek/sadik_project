<?php

use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->truncate();

        DB::table('foods')->insert([
            [
                'name'  => 'Apple'
            ],
            [
                'name'  => 'Orange'
            ],
            [
                'name'  => 'Mango'
            ],
            [
                'name'  => 'Banana'
            ]

        ]);


    }
}
