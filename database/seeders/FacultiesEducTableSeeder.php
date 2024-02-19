<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FacultiesEducTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faculties_educ')->delete();
        
        \DB::table('faculties_educ')->insert(array (
            0 => 
            array (
                'faculty_id' => 1,
                'has_unders' => 1,
                'unders_enrolled' => 'Batangas State University',
                'unders_year_received' => '2003',
                'has_masters' => 1,
                'masters_enrolled' => 'Batangas State University',
                'masters_year_received' => '2003',
                'has_doctors' => 1,
                'doctors_enrolled' => 'Batangas State University',
                'doctors_year_received' => '2003',
                'academe_points' => 0,
            ),
            1 => 
            array (
                'faculty_id' => 2,
                'has_unders' => 1,
                'unders_enrolled' => 'Batangas State University',
                'unders_year_received' => '2003',
                'has_masters' => 1,
                'masters_enrolled' => 'Batangas State University',
                'masters_year_received' => '2003',
                'has_doctors' => 1,
                'doctors_enrolled' => 'Batangas State University',
                'doctors_year_received' => '2003',
                'academe_points' => 0,
            ),
            2 => 
            array (
                'faculty_id' => 3,
                'has_unders' => 1,
                'unders_enrolled' => 'Batangas State University',
                'unders_year_received' => '2003',
                'has_masters' => 1,
                'masters_enrolled' => 'Batangas State University',
                'masters_year_received' => '2003',
                'has_doctors' => 1,
                'doctors_enrolled' => 'Batangas State University',
                'doctors_year_received' => '2003',
                'academe_points' => 0,
            ),
            3 => 
            array (
                'faculty_id' => 4,
                'has_unders' => 1,
                'unders_enrolled' => 'Batangas State University',
                'unders_year_received' => NULL,
                'has_masters' => 1,
                'masters_enrolled' => 'Batangas State University',
                'masters_year_received' => NULL,
                'has_doctors' => 1,
                'doctors_enrolled' => 'Batangas State University',
                'doctors_year_received' => NULL,
                'academe_points' => 0,
            ),
            4 => 
            array (
                'faculty_id' => 5,
                'has_unders' => 1,
                'unders_enrolled' => 'Batangas State University',
                'unders_year_received' => '2024',
                'has_masters' => 1,
                'masters_enrolled' => 'Batangas State University',
                'masters_year_received' => '2000',
                'has_doctors' => 1,
                'doctors_enrolled' => 'Batangas State University',
                'doctors_year_received' => '2000',
                'academe_points' => 0,
            ),
            5 => 
            array (
                'faculty_id' => 6,
                'has_unders' => 1,
                'unders_enrolled' => 'Batangas State University',
                'unders_year_received' => '2001',
                'has_masters' => 1,
                'masters_enrolled' => 'Batangas State University',
                'masters_year_received' => '2001',
                'has_doctors' => 1,
                'doctors_enrolled' => 'Batangas State University',
                'doctors_year_received' => '2001',
                'academe_points' => 0,
            ),
            6 => 
            array (
                'faculty_id' => 497,
                'has_unders' => 1,
                'unders_enrolled' => 'Saint Louis University',
                'unders_year_received' => '2000',
                'has_masters' => 1,
                'masters_enrolled' => 'Saint Louis University',
                'masters_year_received' => '2000',
                'has_doctors' => 1,
                'doctors_enrolled' => 'Saint Louis University',
                'doctors_year_received' => '2000',
                'academe_points' => 0,
            ),
            7 => 
            array (
                'faculty_id' => 498,
                'has_unders' => 1,
                'unders_enrolled' => 'Saint Louis University',
                'unders_year_received' => '2000',
                'has_masters' => 1,
                'masters_enrolled' => 'Saint Louis University',
                'masters_year_received' => '2003',
                'has_doctors' => 1,
                'doctors_enrolled' => 'Saint Louis University',
                'doctors_year_received' => '2006',
                'academe_points' => 0,
            ),
        ));
        
        
    }
}