<?php

use Illuminate\Database\Seeder;

class VendorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendor_types')->truncate();

        DB::table('vendor_types')->insert([
           [
               'id'     => 1,
               'name'   => 'Supplier'
           ],
           [
               'id'     => 2,
               'name'   => 'Customer'
           ],
           [
               'id'     => 3,
               'name'   => 'Supplier & Customer'
           ]

        ]);
    }
}
