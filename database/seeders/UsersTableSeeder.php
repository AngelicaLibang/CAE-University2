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
                'user_id' => 2,
                'first_name' => 'Michael',
                'last_name' => 'Arnold',
                'email' => 'practice@gmail.com',
                'password' => '$2y$10$6J8GuEvAnc/tRbt9cNQwuOa91CQiQFA3uRrcv37l17P7SKqDA23AG',
                'role' => 'user',
                'student_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 4,
                'first_name' => 'Sharon',
                'last_name' => 'Valentine',
                'email' => 'daibenangelosanchez@gmail.com',
                'password' => '$2y$10$NNt7G.hUnJhXzi/1WzoLX.sSE6Ev3zTCkhETdAsr2sEuKEkHMT8xm',
                'role' => 'user',
                'student_id' => 2,
            ),
            2 => 
            array (
                'user_id' => 5,
                'first_name' => 'Miranda',
                'last_name' => 'Scott',
                'email' => '13e1221@gmail.com',
                'password' => '$2y$10$TYRGz3dn6zw285Gtf6hODuyGV.2TVLXIboKeZFrqll.cwGyVF8rii',
                'role' => 'user',
                'student_id' => 3,
            ),
            3 => 
            array (
                'user_id' => 6,
                'first_name' => 'Daiben',
                'last_name' => 'Sanchez',
                'email' => 'admin@iscp.com',
                'password' => '$2y$10$X2RR6m0J2hOZ1/F8Y5gt6uo3GJutrVaDd6wKDyTNcn75vi8MWVjdW',
                'role' => 'admin',
                'student_id' => 0,
            ),
            4 => 
            array (
                'user_id' => 8,
                'first_name' => 'Andrea',
                'last_name' => 'Johnson',
                'email' => 'renner.christopher@balistreri.com',
                'password' => '$2y$12$OALnYwQNjnR3sU3LAR.cT.WNKaIVzWSEKduRO1TrXg2OwR2NvZlFS',
                'role' => 'user',
                'student_id' => 6,
            ),
        ));
        
        
    }
}