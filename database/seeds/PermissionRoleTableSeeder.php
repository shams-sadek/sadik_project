<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /* *
         * --------------------------------------------------------------------------------------
         * Roles Variable
         * --------------------------------------------------------------------------------------
         */

            $super_admin        = 1;

            $admin              = 2;

            $general_manager    = 3;

            $diagnostic         = 5;

            $hospital           = 6;




        /* *
         * --------------------------------------------------------------------------------------
         * Permissions Variable
         * --------------------------------------------------------------------------------------
         */

            /* *
             * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
             * Register
             * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
             */

                $patient_list           = 10001;

                $doctor_list            = 10002;

                $broker_list            = 10003;

            /* *
             * -----------------------------------
             * Diagnostic
             * -----------------------------------
             */

                $investigate            = 20001;

                $investigation_dues     = 20002;

                $broker_transaction     = 20003;


            /* *
             * -----------------------------------
             * Hospital
             * -----------------------------------
             */

                $patient_admission      = 30001;

                $patient_transaction    = 30002;

                $bed_list               = 30003;






        DB::table('permission_role')->insert([

            /* *
             * ---------------------------------------------------------------------------------------------------------
             * Role: Super Admin = 1
             * ---------------------------------------------------------------------------------------------------------
             */

                /* *
                 * ----------------------------------------------------
                 * Register Module = 10000
                 * ----------------------------------------------------
                 */

                    [
                        'permission_id'     =>    $patient_list,
                        'role_id'           =>    $super_admin,
                    ],
                    [
                        'permission_id'     =>    $doctor_list,
                        'role_id'           =>    $super_admin,
                    ],
                    [
                        'permission_id'     =>    $broker_list,
                        'role_id'           =>    $super_admin,
                    ],


                /* *
                 * -------------------------------------------------------
                 * Diagnostic Module = 20000
                 * -------------------------------------------------------
                 */
                    [
                        'permission_id'     =>    $investigate,
                        'role_id'           =>    $super_admin,
                    ],
                    [
                        'permission_id'     =>    $investigation_dues,
                        'role_id'           =>    $super_admin,
                    ],
                    [
                        'permission_id'     =>    $broker_transaction,
                        'role_id'           =>    $super_admin,
                    ],



                /* *
                 * -------------------------------------------------------
                 * Hospital Module = 30000
                 * -------------------------------------------------------
                 */
                    [
                        'permission_id'     =>    $patient_admission,
                        'role_id'           =>    $super_admin,
                    ],
                    [
                        'permission_id'     =>    $patient_transaction,
                        'role_id'           =>    $super_admin,
                    ],
                    [
                        'permission_id'     =>    $bed_list,
                        'role_id'           =>    $super_admin,
                    ],



            /* *
             * ---------------------------------------------------------------------------------------------------------
             * Role: Admin = 2
             * ---------------------------------------------------------------------------------------------------------
             */

                /* *
                 * ----------------------------------------------------
                 * Register Module = 10000
                 * ----------------------------------------------------
                 */

                    [
                        'permission_id'     =>    $patient_list,
                        'role_id'           =>    $admin,
                    ],
                    [
                        'permission_id'     =>    $doctor_list,
                        'role_id'           =>    $admin,
                    ],
                    [
                        'permission_id'     =>    $broker_list,
                        'role_id'           =>    $admin,
                    ],


                /* *
                 * -------------------------------------------------------
                 * Diagnostic Module = 20000
                 * -------------------------------------------------------
                 */
                    [
                        'permission_id'     =>    $investigate,
                        'role_id'           =>    $admin,
                    ],
                    [
                        'permission_id'     =>    $investigation_dues,
                        'role_id'           =>    $admin,
                    ],
                    [
                        'permission_id'     =>    $broker_transaction,
                        'role_id'           =>    $admin,
                    ],



                /* *
                 * -------------------------------------------------------
                 * Hospital Module = 30000
                 * -------------------------------------------------------
                 */
                    [
                        'permission_id'     =>    $patient_admission,
                        'role_id'           =>    $admin,
                    ],
                    [
                        'permission_id'     =>    $patient_transaction,
                        'role_id'           =>    $admin,
                    ],
                    [
                        'permission_id'     =>    $bed_list,
                        'role_id'           =>    $admin,
                    ],




            /* *
             * ---------------------------------------------------------------------------------------------------------
             * Role: Diagnostic = 4
             * ---------------------------------------------------------------------------------------------------------
             */

                /* *
                 * -------------------------------------------------------
                 * Diagnostic Module
                 * -------------------------------------------------------
                 */
                    [
                        'permission_id'     =>    $investigate,
                        'role_id'           =>    $diagnostic,
                    ],
                    [
                        'permission_id'     =>    $investigation_dues,
                        'role_id'           =>    $diagnostic,
                    ],
                    [
                        'permission_id'     =>    $broker_transaction,
                        'role_id'           =>    $diagnostic,
                    ],



            /* *
             * ---------------------------------------------------------------------------------------------------------
             * Role: Hospital = 5
             * ---------------------------------------------------------------------------------------------------------
             */

                /* *
                 * -------------------------------------------------------
                 * Hospital Module
                 * -------------------------------------------------------
                 */
                    [
                        'permission_id'     =>    $patient_admission,
                        'role_id'           =>    $hospital,
                    ],
                    [
                        'permission_id'     =>    $patient_transaction,
                        'role_id'           =>    $hospital,
                    ],
                    [
                        'permission_id'     =>    $bed_list,
                        'role_id'           =>    $hospital,
                    ],










        ]);
    }
}
