<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'user_id' => 1,
                'first_name' => 'vivien',
                'last_name' => 'Caampued',
                'email_address' => 'vc@gmail.com',
                'password' => '$2y$12$hM0RbtITKhJfg2naYZw2Y..ee5K99hTI5pm8apBd/dIPM5W2XZEfG',
                'role' => 'user',
                'student_id' => 1,
                'updated_at' => '2024-02-19 20:47:26',
            ),
            1 =>
            array (
                'user_id' => 2,
                'first_name' => 'Angie',
                'last_name' => 'Libang',
                'email_address' => 'al@admin.com',
                'password' => '$2y$12$nG0DFmXVQBImei2lIqa2dubd3ZQ1I/6e43Nbwvu7T3A5yC5F4jxXq',
                'role' => 'admin',
                'student_id' => 0,
                'updated_at' => '2024-02-19 20:48:02',
            ),
        ));


    }
}
