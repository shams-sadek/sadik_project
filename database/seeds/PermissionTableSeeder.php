<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Permission::insert([

            /* *
             * -------------------------------------------------------
             * Register Module = 10000
             * -------------------------------------------------------
             */
            [
               'id'         => 10001,
               'name'       => 'patient_list',
               'label'      => 'Patient List'
            ],
            [
               'id'         => 10002,
               'name'       => 'doctor_list',
               'label'      => 'Doctor List'
            ],
            [
               'id'         => 10003,
               'name'       => 'broker_list',
               'label'      => 'Broker List'
            ],


            /* *
             * -------------------------------------------------------
             * Diagnostic Module = 20000
             * -------------------------------------------------------
             */
            [
               'id'         => 20001,
               'name'       => 'investigate',
               'label'      => 'Investigate'
            ],
            [
               'id'         => 20002,
               'name'       => 'investigation_dues',
               'label'      => 'Investigation Dues'
            ],
            [
               'id'         => 20003,
               'name'       => 'broker_transaction',
               'label'      => 'Broker Transaction'
            ],



            /* *
             * -------------------------------------------------------
             * Hospital Module = 30000
             * -------------------------------------------------------
             */
            [
               'id'         => 30001,
               'name'       => 'patient_admission',
               'label'      => 'Patient Admission'
            ],
            [
               'id'         => 30002,
               'name'       => 'patient_transaction',
               'label'      => 'Patient Transaction'
            ],
            [
               'id'         => 30003,
               'name'       => 'bed_list',
               'label'      => 'Bed List'
            ],


        ]);
    }
}
