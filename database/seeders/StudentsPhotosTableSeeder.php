<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students_photos')->delete();
        
        \DB::table('students_photos')->insert(array (
            0 => 
            array (
                'sp_id' => 1,
                'student_id' => 1,
                'image' => '202401260552000000michael.jpg',
            ),
            1 => 
            array (
                'sp_id' => 2,
                'student_id' => 6,
                'image' => '202401260557000000andrea.jpg',
            ),
            2 => 
            array (
                'sp_id' => 3,
                'student_id' => 1,
                'image' => '202401260607000000michael2.jpg',
            ),
        ));
        
        
    }
}