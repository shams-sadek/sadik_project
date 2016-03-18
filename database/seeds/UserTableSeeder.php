<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory('App\User', 5)->create(
//            [
//                'password'  => bcrypt('123456')
//            ]
//        );

        App\User::insert([

            [
               'name'           => 'Shams Sadek',
               'email'          => 'shamssadek@gmail.com',
               'password'       => bcrypt('123456')
            ],
            [
               'name'           => 'Talha Ekhlas',
               'email'          => 'talha@gmail.com',
               'password'       => bcrypt('123456')
            ],
            [
               'name'           => 'Mahbub Rabbani',
               'email'          => 'mahbub.com',
               'password'       => bcrypt('123456')
            ]

        ]);
    }
}
