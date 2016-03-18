<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::insert([
            [
                'id'        => 1,
                'name'      => 'super_admin',
                'label'     => 'Super Admin'
            ],
            [
                'id'        => 2,
                'name'      => 'admin',
                'label'     => 'Admin'
            ],
            [
                'id'        => 3,
                'name'      => 'general_manager',
                'label'     => 'General Manager'
            ],
            [
                'id'        => 4,
                'name'      => 'accounts_officer',
                'label'     => 'Accounts Officer'
            ],
            [
                'id'        => 5,
                'name'      => 'diagnostic',
                'label'     => 'Diagnostic'
            ],
            [
                'id'        => 6,
                'name'      => 'hospital',
                'label'     => 'Hospital'
            ],

        ]);
    }
}
