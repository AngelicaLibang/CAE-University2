<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('classes')->delete();
        
        \DB::table('classes')->insert(array (
            0 => 
            array (
                'class_id' => 0,
                'room' => 'B117',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 263,
            ),
            1 => 
            array (
                'class_id' => 1,
                'room' => 'B101',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 218,
            ),
            2 => 
            array (
                'class_id' => 2,
                'room' => 'B107',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 266,
            ),
            3 => 
            array (
                'class_id' => 3,
                'room' => 'B104',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 45,
            ),
            4 => 
            array (
                'class_id' => 4,
                'room' => 'B107',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 224,
            ),
            5 => 
            array (
                'class_id' => 5,
                'room' => 'B105',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 356,
            ),
            6 => 
            array (
                'class_id' => 6,
                'room' => 'A111',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 342,
            ),
            7 => 
            array (
                'class_id' => 7,
                'room' => 'B105',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 15,
                'faculty_id' => 33,
            ),
            8 => 
            array (
                'class_id' => 8,
                'room' => 'B115',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 239,
            ),
            9 => 
            array (
                'class_id' => 9,
                'room' => 'B101',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 13,
            ),
            10 => 
            array (
                'class_id' => 10,
                'room' => 'C111',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 358,
            ),
            11 => 
            array (
                'class_id' => 11,
                'room' => 'A110',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 337,
            ),
            12 => 
            array (
                'class_id' => 12,
                'room' => 'C110',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 13,
                'faculty_id' => 100,
            ),
            13 => 
            array (
                'class_id' => 13,
                'room' => 'C113',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 353,
            ),
            14 => 
            array (
                'class_id' => 14,
                'room' => 'A109',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 91,
            ),
            15 => 
            array (
                'class_id' => 15,
                'room' => 'A120',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 226,
            ),
            16 => 
            array (
                'class_id' => 16,
                'room' => 'C108',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 201,
            ),
            17 => 
            array (
                'class_id' => 17,
                'room' => 'A109',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 229,
            ),
            18 => 
            array (
                'class_id' => 18,
                'room' => 'A113',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 363,
            ),
            19 => 
            array (
                'class_id' => 19,
                'room' => 'B104',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 24,
            ),
            20 => 
            array (
                'class_id' => 20,
                'room' => 'B102',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 57,
            ),
            21 => 
            array (
                'class_id' => 21,
                'room' => 'B101',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 9,
                'faculty_id' => 207,
            ),
            22 => 
            array (
                'class_id' => 22,
                'room' => 'A118',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 351,
            ),
            23 => 
            array (
                'class_id' => 23,
                'room' => 'C109',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 179,
            ),
            24 => 
            array (
                'class_id' => 24,
                'room' => 'A105',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 172,
            ),
            25 => 
            array (
                'class_id' => 25,
                'room' => 'C103',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 44,
            ),
            26 => 
            array (
                'class_id' => 26,
                'room' => 'B116',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 102,
            ),
            27 => 
            array (
                'class_id' => 27,
                'room' => 'A109',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 379,
            ),
            28 => 
            array (
                'class_id' => 28,
                'room' => 'A113',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 362,
            ),
            29 => 
            array (
                'class_id' => 29,
                'room' => 'B114',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 61,
            ),
            30 => 
            array (
                'class_id' => 30,
                'room' => 'B115',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 262,
            ),
            31 => 
            array (
                'class_id' => 31,
                'room' => 'A105',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 398,
            ),
            32 => 
            array (
                'class_id' => 32,
                'room' => 'B102',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 367,
            ),
            33 => 
            array (
                'class_id' => 33,
                'room' => 'B103',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 9,
            ),
            34 => 
            array (
                'class_id' => 34,
                'room' => 'A117',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 257,
            ),
            35 => 
            array (
                'class_id' => 35,
                'room' => 'B110',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 213,
            ),
            36 => 
            array (
                'class_id' => 36,
                'room' => 'A112',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 22,
                'faculty_id' => 154,
            ),
            37 => 
            array (
                'class_id' => 37,
                'room' => 'C107',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 9,
                'faculty_id' => 213,
            ),
            38 => 
            array (
                'class_id' => 38,
                'room' => 'A113',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 111,
            ),
            39 => 
            array (
                'class_id' => 39,
                'room' => 'C104',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 187,
            ),
            40 => 
            array (
                'class_id' => 40,
                'room' => 'C103',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 207,
            ),
            41 => 
            array (
                'class_id' => 41,
                'room' => 'C119',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 98,
            ),
            42 => 
            array (
                'class_id' => 42,
                'room' => 'B114',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 4,
                'faculty_id' => 192,
            ),
            43 => 
            array (
                'class_id' => 43,
                'room' => 'A115',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 238,
            ),
            44 => 
            array (
                'class_id' => 44,
                'room' => 'B105',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 22,
                'faculty_id' => 281,
            ),
            45 => 
            array (
                'class_id' => 45,
                'room' => 'C118',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 180,
            ),
            46 => 
            array (
                'class_id' => 46,
                'room' => 'B115',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 226,
            ),
            47 => 
            array (
                'class_id' => 47,
                'room' => 'A108',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 311,
            ),
            48 => 
            array (
                'class_id' => 48,
                'room' => 'C105',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 166,
            ),
            49 => 
            array (
                'class_id' => 49,
                'room' => 'A101',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 15,
                'faculty_id' => 233,
            ),
            50 => 
            array (
                'class_id' => 50,
                'room' => 'C110',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 7,
                'faculty_id' => 64,
            ),
            51 => 
            array (
                'class_id' => 51,
                'room' => 'B119',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 265,
            ),
            52 => 
            array (
                'class_id' => 52,
                'room' => 'B111',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 259,
            ),
            53 => 
            array (
                'class_id' => 53,
                'room' => 'B119',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 169,
            ),
            54 => 
            array (
                'class_id' => 54,
                'room' => 'B112',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 395,
            ),
            55 => 
            array (
                'class_id' => 55,
                'room' => 'A105',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 136,
            ),
            56 => 
            array (
                'class_id' => 56,
                'room' => 'C105',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 334,
            ),
            57 => 
            array (
                'class_id' => 57,
                'room' => 'A105',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 17,
            ),
            58 => 
            array (
                'class_id' => 58,
                'room' => 'C113',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 18,
                'faculty_id' => 53,
            ),
            59 => 
            array (
                'class_id' => 59,
                'room' => 'B103',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 296,
            ),
            60 => 
            array (
                'class_id' => 60,
                'room' => 'C108',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 333,
            ),
            61 => 
            array (
                'class_id' => 61,
                'room' => 'C112',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 4,
                'faculty_id' => 295,
            ),
            62 => 
            array (
                'class_id' => 62,
                'room' => 'A120',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 257,
            ),
            63 => 
            array (
                'class_id' => 63,
                'room' => 'B118',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 185,
            ),
            64 => 
            array (
                'class_id' => 64,
                'room' => 'C111',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 81,
            ),
            65 => 
            array (
                'class_id' => 65,
                'room' => 'C107',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 83,
            ),
            66 => 
            array (
                'class_id' => 66,
                'room' => 'C114',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 92,
            ),
            67 => 
            array (
                'class_id' => 67,
                'room' => 'A109',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 80,
            ),
            68 => 
            array (
                'class_id' => 68,
                'room' => 'C112',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 12,
                'faculty_id' => 250,
            ),
            69 => 
            array (
                'class_id' => 69,
                'room' => 'A103',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 59,
            ),
            70 => 
            array (
                'class_id' => 70,
                'room' => 'C111',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 256,
            ),
            71 => 
            array (
                'class_id' => 71,
                'room' => 'A103',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 270,
            ),
            72 => 
            array (
                'class_id' => 72,
                'room' => 'A114',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 141,
            ),
            73 => 
            array (
                'class_id' => 73,
                'room' => 'A108',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 234,
            ),
            74 => 
            array (
                'class_id' => 74,
                'room' => 'B119',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 174,
            ),
            75 => 
            array (
                'class_id' => 75,
                'room' => 'C116',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 248,
            ),
            76 => 
            array (
                'class_id' => 76,
                'room' => 'A104',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 142,
            ),
            77 => 
            array (
                'class_id' => 77,
                'room' => 'B104',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 182,
            ),
            78 => 
            array (
                'class_id' => 78,
                'room' => 'A115',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 272,
            ),
            79 => 
            array (
                'class_id' => 79,
                'room' => 'A114',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 134,
            ),
            80 => 
            array (
                'class_id' => 80,
                'room' => 'B103',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 76,
            ),
            81 => 
            array (
                'class_id' => 81,
                'room' => 'A117',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 23,
            ),
            82 => 
            array (
                'class_id' => 82,
                'room' => 'A117',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 0,
                'faculty_id' => 377,
            ),
            83 => 
            array (
                'class_id' => 83,
                'room' => 'A116',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 281,
            ),
            84 => 
            array (
                'class_id' => 84,
                'room' => 'B103',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 39,
            ),
            85 => 
            array (
                'class_id' => 85,
                'room' => 'A107',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 197,
            ),
            86 => 
            array (
                'class_id' => 86,
                'room' => 'B110',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 168,
            ),
            87 => 
            array (
                'class_id' => 87,
                'room' => 'B109',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 261,
            ),
            88 => 
            array (
                'class_id' => 88,
                'room' => 'C103',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 0,
                'faculty_id' => 346,
            ),
            89 => 
            array (
                'class_id' => 89,
                'room' => 'B114',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 232,
            ),
            90 => 
            array (
                'class_id' => 90,
                'room' => 'C118',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 291,
            ),
            91 => 
            array (
                'class_id' => 91,
                'room' => 'C118',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 206,
            ),
            92 => 
            array (
                'class_id' => 92,
                'room' => 'A102',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 27,
            ),
            93 => 
            array (
                'class_id' => 93,
                'room' => 'B104',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 400,
            ),
            94 => 
            array (
                'class_id' => 94,
                'room' => 'A118',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 89,
            ),
            95 => 
            array (
                'class_id' => 95,
                'room' => 'A119',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 9,
                'faculty_id' => 342,
            ),
            96 => 
            array (
                'class_id' => 96,
                'room' => 'B102',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 67,
            ),
            97 => 
            array (
                'class_id' => 97,
                'room' => 'B101',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 33,
            ),
            98 => 
            array (
                'class_id' => 98,
                'room' => 'B107',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 10,
                'faculty_id' => 219,
            ),
            99 => 
            array (
                'class_id' => 99,
                'room' => 'B104',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 322,
            ),
            100 => 
            array (
                'class_id' => 100,
                'room' => 'C109',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 298,
            ),
            101 => 
            array (
                'class_id' => 101,
                'room' => 'A109',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 83,
            ),
            102 => 
            array (
                'class_id' => 102,
                'room' => 'A113',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 10,
                'faculty_id' => 58,
            ),
            103 => 
            array (
                'class_id' => 103,
                'room' => 'A112',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 264,
            ),
            104 => 
            array (
                'class_id' => 104,
                'room' => 'C102',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 356,
            ),
            105 => 
            array (
                'class_id' => 105,
                'room' => 'C108',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 328,
            ),
            106 => 
            array (
                'class_id' => 106,
                'room' => 'B112',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 172,
            ),
            107 => 
            array (
                'class_id' => 107,
                'room' => 'C117',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 366,
            ),
            108 => 
            array (
                'class_id' => 108,
                'room' => 'B104',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 294,
            ),
            109 => 
            array (
                'class_id' => 109,
                'room' => 'B118',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 99,
            ),
            110 => 
            array (
                'class_id' => 110,
                'room' => 'C108',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 217,
            ),
            111 => 
            array (
                'class_id' => 111,
                'room' => 'C102',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 31,
            ),
            112 => 
            array (
                'class_id' => 112,
                'room' => 'C105',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 198,
            ),
            113 => 
            array (
                'class_id' => 113,
                'room' => 'C105',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 6,
                'faculty_id' => 348,
            ),
            114 => 
            array (
                'class_id' => 114,
                'room' => 'A117',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 76,
            ),
            115 => 
            array (
                'class_id' => 115,
                'room' => 'A116',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 106,
            ),
            116 => 
            array (
                'class_id' => 116,
                'room' => 'A109',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 221,
            ),
            117 => 
            array (
                'class_id' => 117,
                'room' => 'B108',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 258,
            ),
            118 => 
            array (
                'class_id' => 118,
                'room' => 'C107',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 362,
            ),
            119 => 
            array (
                'class_id' => 119,
                'room' => 'B119',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 86,
            ),
            120 => 
            array (
                'class_id' => 120,
                'room' => 'A118',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 7,
                'faculty_id' => 54,
            ),
            121 => 
            array (
                'class_id' => 121,
                'room' => 'C117',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 37,
            ),
            122 => 
            array (
                'class_id' => 122,
                'room' => 'B120',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 30,
            ),
            123 => 
            array (
                'class_id' => 123,
                'room' => 'B102',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 10,
                'faculty_id' => 25,
            ),
            124 => 
            array (
                'class_id' => 124,
                'room' => 'B113',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 231,
            ),
            125 => 
            array (
                'class_id' => 125,
                'room' => 'B105',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 69,
            ),
            126 => 
            array (
                'class_id' => 126,
                'room' => 'A104',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 9,
                'faculty_id' => 217,
            ),
            127 => 
            array (
                'class_id' => 127,
                'room' => 'C106',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 22,
            ),
            128 => 
            array (
                'class_id' => 128,
                'room' => 'C116',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 58,
            ),
            129 => 
            array (
                'class_id' => 129,
                'room' => 'C115',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 314,
            ),
            130 => 
            array (
                'class_id' => 130,
                'room' => 'B116',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 377,
            ),
            131 => 
            array (
                'class_id' => 131,
                'room' => 'C101',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 320,
            ),
            132 => 
            array (
                'class_id' => 132,
                'room' => 'A113',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 193,
            ),
            133 => 
            array (
                'class_id' => 133,
                'room' => 'B108',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 262,
            ),
            134 => 
            array (
                'class_id' => 134,
                'room' => 'A114',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 303,
            ),
            135 => 
            array (
                'class_id' => 135,
                'room' => 'A105',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 394,
            ),
            136 => 
            array (
                'class_id' => 136,
                'room' => 'A106',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 385,
            ),
            137 => 
            array (
                'class_id' => 137,
                'room' => 'B109',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 7,
                'faculty_id' => 195,
            ),
            138 => 
            array (
                'class_id' => 138,
                'room' => 'C114',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 320,
            ),
            139 => 
            array (
                'class_id' => 139,
                'room' => 'B116',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 187,
            ),
            140 => 
            array (
                'class_id' => 140,
                'room' => 'B105',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 46,
            ),
            141 => 
            array (
                'class_id' => 141,
                'room' => 'A109',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 25,
            ),
            142 => 
            array (
                'class_id' => 142,
                'room' => 'C107',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 28,
            ),
            143 => 
            array (
                'class_id' => 143,
                'room' => 'C115',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 144,
            ),
            144 => 
            array (
                'class_id' => 144,
                'room' => 'A111',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 176,
            ),
            145 => 
            array (
                'class_id' => 145,
                'room' => 'C111',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 37,
            ),
            146 => 
            array (
                'class_id' => 146,
                'room' => 'C103',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 238,
            ),
            147 => 
            array (
                'class_id' => 147,
                'room' => 'B120',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 144,
            ),
            148 => 
            array (
                'class_id' => 148,
                'room' => 'C106',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 6,
                'faculty_id' => 362,
            ),
            149 => 
            array (
                'class_id' => 149,
                'room' => 'A117',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 55,
            ),
            150 => 
            array (
                'class_id' => 150,
                'room' => 'C112',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 196,
            ),
            151 => 
            array (
                'class_id' => 151,
                'room' => 'B111',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 6,
                'faculty_id' => 205,
            ),
            152 => 
            array (
                'class_id' => 152,
                'room' => 'A110',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 244,
            ),
            153 => 
            array (
                'class_id' => 153,
                'room' => 'A106',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 314,
            ),
            154 => 
            array (
                'class_id' => 154,
                'room' => 'A106',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 317,
            ),
            155 => 
            array (
                'class_id' => 155,
                'room' => 'B110',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 176,
            ),
            156 => 
            array (
                'class_id' => 156,
                'room' => 'C114',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 290,
            ),
            157 => 
            array (
                'class_id' => 157,
                'room' => 'A107',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 101,
            ),
            158 => 
            array (
                'class_id' => 158,
                'room' => 'B105',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 318,
            ),
            159 => 
            array (
                'class_id' => 159,
                'room' => 'A111',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 182,
            ),
            160 => 
            array (
                'class_id' => 160,
                'room' => 'A107',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 18,
            ),
            161 => 
            array (
                'class_id' => 161,
                'room' => 'B115',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 65,
            ),
            162 => 
            array (
                'class_id' => 162,
                'room' => 'C107',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 240,
            ),
            163 => 
            array (
                'class_id' => 163,
                'room' => 'C103',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 151,
            ),
            164 => 
            array (
                'class_id' => 164,
                'room' => 'C106',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 32,
            ),
            165 => 
            array (
                'class_id' => 165,
                'room' => 'B105',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 221,
            ),
            166 => 
            array (
                'class_id' => 166,
                'room' => 'B108',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 54,
            ),
            167 => 
            array (
                'class_id' => 167,
                'room' => 'B118',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 12,
                'faculty_id' => 386,
            ),
            168 => 
            array (
                'class_id' => 168,
                'room' => 'C112',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 44,
            ),
            169 => 
            array (
                'class_id' => 169,
                'room' => 'B115',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 106,
            ),
            170 => 
            array (
                'class_id' => 170,
                'room' => 'C108',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 395,
            ),
            171 => 
            array (
                'class_id' => 171,
                'room' => 'C118',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 224,
            ),
            172 => 
            array (
                'class_id' => 172,
                'room' => 'C103',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 212,
            ),
            173 => 
            array (
                'class_id' => 173,
                'room' => 'C115',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 318,
            ),
            174 => 
            array (
                'class_id' => 174,
                'room' => 'B111',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 152,
            ),
            175 => 
            array (
                'class_id' => 175,
                'room' => 'C109',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 22,
            ),
            176 => 
            array (
                'class_id' => 176,
                'room' => 'B103',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 266,
            ),
            177 => 
            array (
                'class_id' => 177,
                'room' => 'C116',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 15,
                'faculty_id' => 143,
            ),
            178 => 
            array (
                'class_id' => 178,
                'room' => 'C113',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 88,
            ),
            179 => 
            array (
                'class_id' => 179,
                'room' => 'C119',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 75,
            ),
            180 => 
            array (
                'class_id' => 180,
                'room' => 'C116',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 271,
            ),
            181 => 
            array (
                'class_id' => 181,
                'room' => 'A114',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 12,
            ),
            182 => 
            array (
                'class_id' => 182,
                'room' => 'C105',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 4,
            ),
            183 => 
            array (
                'class_id' => 183,
                'room' => 'B117',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 253,
            ),
            184 => 
            array (
                'class_id' => 184,
                'room' => 'C102',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 277,
            ),
            185 => 
            array (
                'class_id' => 185,
                'room' => 'C118',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 22,
                'faculty_id' => 180,
            ),
            186 => 
            array (
                'class_id' => 186,
                'room' => 'C108',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 10,
                'faculty_id' => 256,
            ),
            187 => 
            array (
                'class_id' => 187,
                'room' => 'B113',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 19,
            ),
            188 => 
            array (
                'class_id' => 188,
                'room' => 'C112',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 7,
                'faculty_id' => 310,
            ),
            189 => 
            array (
                'class_id' => 189,
                'room' => 'B102',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 15,
                'faculty_id' => 67,
            ),
            190 => 
            array (
                'class_id' => 190,
                'room' => 'A110',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 6,
                'faculty_id' => 273,
            ),
            191 => 
            array (
                'class_id' => 191,
                'room' => 'A105',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 1,
            ),
            192 => 
            array (
                'class_id' => 192,
                'room' => 'C116',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 25,
            ),
            193 => 
            array (
                'class_id' => 193,
                'room' => 'C114',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 3,
            ),
            194 => 
            array (
                'class_id' => 194,
                'room' => 'A105',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 372,
            ),
            195 => 
            array (
                'class_id' => 195,
                'room' => 'A101',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 213,
            ),
            196 => 
            array (
                'class_id' => 196,
                'room' => 'A108',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 44,
            ),
            197 => 
            array (
                'class_id' => 197,
                'room' => 'C111',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 291,
            ),
            198 => 
            array (
                'class_id' => 198,
                'room' => 'A113',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 61,
            ),
            199 => 
            array (
                'class_id' => 199,
                'room' => 'A119',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 364,
            ),
            200 => 
            array (
                'class_id' => 200,
                'room' => 'C102',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 107,
            ),
            201 => 
            array (
                'class_id' => 201,
                'room' => 'A103',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 72,
            ),
            202 => 
            array (
                'class_id' => 202,
                'room' => 'B108',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 383,
            ),
            203 => 
            array (
                'class_id' => 203,
                'room' => 'C112',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 313,
            ),
            204 => 
            array (
                'class_id' => 204,
                'room' => 'A102',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 45,
            ),
            205 => 
            array (
                'class_id' => 205,
                'room' => 'A109',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 393,
            ),
            206 => 
            array (
                'class_id' => 206,
                'room' => 'C105',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 323,
            ),
            207 => 
            array (
                'class_id' => 207,
                'room' => 'A105',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 379,
            ),
            208 => 
            array (
                'class_id' => 208,
                'room' => 'C112',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 185,
            ),
            209 => 
            array (
                'class_id' => 209,
                'room' => 'C103',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 163,
            ),
            210 => 
            array (
                'class_id' => 210,
                'room' => 'C102',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 197,
            ),
            211 => 
            array (
                'class_id' => 211,
                'room' => 'C110',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 263,
            ),
            212 => 
            array (
                'class_id' => 212,
                'room' => 'A108',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 92,
            ),
            213 => 
            array (
                'class_id' => 213,
                'room' => 'A103',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 18,
                'faculty_id' => 368,
            ),
            214 => 
            array (
                'class_id' => 214,
                'room' => 'A110',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 228,
            ),
            215 => 
            array (
                'class_id' => 215,
                'room' => 'C120',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 362,
            ),
            216 => 
            array (
                'class_id' => 216,
                'room' => 'B101',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 286,
            ),
            217 => 
            array (
                'class_id' => 217,
                'room' => 'C111',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 123,
            ),
            218 => 
            array (
                'class_id' => 218,
                'room' => 'B118',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 127,
            ),
            219 => 
            array (
                'class_id' => 219,
                'room' => 'C104',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 353,
            ),
            220 => 
            array (
                'class_id' => 220,
                'room' => 'C105',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 17,
            ),
            221 => 
            array (
                'class_id' => 221,
                'room' => 'B111',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 242,
            ),
            222 => 
            array (
                'class_id' => 222,
                'room' => 'A118',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 4,
                'faculty_id' => 142,
            ),
            223 => 
            array (
                'class_id' => 223,
                'room' => 'C117',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 392,
            ),
            224 => 
            array (
                'class_id' => 224,
                'room' => 'B117',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 285,
            ),
            225 => 
            array (
                'class_id' => 225,
                'room' => 'B120',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 82,
            ),
            226 => 
            array (
                'class_id' => 226,
                'room' => 'A118',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 17,
            ),
            227 => 
            array (
                'class_id' => 227,
                'room' => 'A109',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 65,
            ),
            228 => 
            array (
                'class_id' => 228,
                'room' => 'B106',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 270,
            ),
            229 => 
            array (
                'class_id' => 229,
                'room' => 'B104',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 144,
            ),
            230 => 
            array (
                'class_id' => 230,
                'room' => 'B109',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 95,
            ),
            231 => 
            array (
                'class_id' => 231,
                'room' => 'B114',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 15,
                'faculty_id' => 250,
            ),
            232 => 
            array (
                'class_id' => 232,
                'room' => 'B120',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 341,
            ),
            233 => 
            array (
                'class_id' => 233,
                'room' => 'C118',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 222,
            ),
            234 => 
            array (
                'class_id' => 234,
                'room' => 'C108',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 10,
                'faculty_id' => 275,
            ),
            235 => 
            array (
                'class_id' => 235,
                'room' => 'B117',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 12,
                'faculty_id' => 190,
            ),
            236 => 
            array (
                'class_id' => 236,
                'room' => 'A102',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 247,
            ),
            237 => 
            array (
                'class_id' => 237,
                'room' => 'C106',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 309,
            ),
            238 => 
            array (
                'class_id' => 238,
                'room' => 'B104',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 209,
            ),
            239 => 
            array (
                'class_id' => 239,
                'room' => 'C112',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 64,
            ),
            240 => 
            array (
                'class_id' => 240,
                'room' => 'C113',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 227,
            ),
            241 => 
            array (
                'class_id' => 241,
                'room' => 'B109',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 9,
            ),
            242 => 
            array (
                'class_id' => 242,
                'room' => 'B120',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 160,
            ),
            243 => 
            array (
                'class_id' => 243,
                'room' => 'B110',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 268,
            ),
            244 => 
            array (
                'class_id' => 244,
                'room' => 'C114',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 18,
                'faculty_id' => 46,
            ),
            245 => 
            array (
                'class_id' => 245,
                'room' => 'C101',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 366,
            ),
            246 => 
            array (
                'class_id' => 246,
                'room' => 'A115',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 120,
            ),
            247 => 
            array (
                'class_id' => 247,
                'room' => 'C120',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 12,
                'faculty_id' => 326,
            ),
            248 => 
            array (
                'class_id' => 248,
                'room' => 'B108',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 116,
            ),
            249 => 
            array (
                'class_id' => 249,
                'room' => 'C110',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 212,
            ),
            250 => 
            array (
                'class_id' => 250,
                'room' => 'B119',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 324,
            ),
            251 => 
            array (
                'class_id' => 251,
                'room' => 'B116',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 13,
                'faculty_id' => 87,
            ),
            252 => 
            array (
                'class_id' => 252,
                'room' => 'B113',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 300,
            ),
            253 => 
            array (
                'class_id' => 253,
                'room' => 'B110',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 56,
            ),
            254 => 
            array (
                'class_id' => 254,
                'room' => 'B104',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 16,
            ),
            255 => 
            array (
                'class_id' => 255,
                'room' => 'B109',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 0,
                'faculty_id' => 199,
            ),
            256 => 
            array (
                'class_id' => 256,
                'room' => 'B101',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 166,
            ),
            257 => 
            array (
                'class_id' => 257,
                'room' => 'C106',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 187,
            ),
            258 => 
            array (
                'class_id' => 258,
                'room' => 'B111',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 72,
            ),
            259 => 
            array (
                'class_id' => 259,
                'room' => 'B114',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 75,
            ),
            260 => 
            array (
                'class_id' => 260,
                'room' => 'C117',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 123,
            ),
            261 => 
            array (
                'class_id' => 261,
                'room' => 'A120',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 214,
            ),
            262 => 
            array (
                'class_id' => 262,
                'room' => 'A116',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 253,
            ),
            263 => 
            array (
                'class_id' => 263,
                'room' => 'B112',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 265,
            ),
            264 => 
            array (
                'class_id' => 264,
                'room' => 'C105',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 13,
            ),
            265 => 
            array (
                'class_id' => 265,
                'room' => 'A113',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 303,
            ),
            266 => 
            array (
                'class_id' => 266,
                'room' => 'C106',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 206,
            ),
            267 => 
            array (
                'class_id' => 267,
                'room' => 'A111',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 0,
                'faculty_id' => 150,
            ),
            268 => 
            array (
                'class_id' => 268,
                'room' => 'A114',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 154,
            ),
            269 => 
            array (
                'class_id' => 269,
                'room' => 'A115',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 163,
            ),
            270 => 
            array (
                'class_id' => 270,
                'room' => 'A109',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 280,
            ),
            271 => 
            array (
                'class_id' => 271,
                'room' => 'A116',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 164,
            ),
            272 => 
            array (
                'class_id' => 272,
                'room' => 'B103',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 42,
            ),
            273 => 
            array (
                'class_id' => 273,
                'room' => 'B102',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 279,
            ),
            274 => 
            array (
                'class_id' => 274,
                'room' => 'B115',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 245,
            ),
            275 => 
            array (
                'class_id' => 275,
                'room' => 'A118',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 330,
            ),
            276 => 
            array (
                'class_id' => 276,
                'room' => 'A110',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 329,
            ),
            277 => 
            array (
                'class_id' => 277,
                'room' => 'C114',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 9,
                'faculty_id' => 249,
            ),
            278 => 
            array (
                'class_id' => 278,
                'room' => 'C106',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 32,
            ),
            279 => 
            array (
                'class_id' => 279,
                'room' => 'C116',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 366,
            ),
            280 => 
            array (
                'class_id' => 280,
                'room' => 'B111',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 99,
            ),
            281 => 
            array (
                'class_id' => 281,
                'room' => 'A113',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 283,
            ),
            282 => 
            array (
                'class_id' => 282,
                'room' => 'B105',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 243,
            ),
            283 => 
            array (
                'class_id' => 283,
                'room' => 'A113',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 313,
            ),
            284 => 
            array (
                'class_id' => 284,
                'room' => 'A114',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 4,
                'faculty_id' => 224,
            ),
            285 => 
            array (
                'class_id' => 285,
                'room' => 'A120',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 219,
            ),
            286 => 
            array (
                'class_id' => 286,
                'room' => 'B111',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 135,
            ),
            287 => 
            array (
                'class_id' => 287,
                'room' => 'A118',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 151,
            ),
            288 => 
            array (
                'class_id' => 288,
                'room' => 'B101',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 339,
            ),
            289 => 
            array (
                'class_id' => 289,
                'room' => 'C113',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 291,
            ),
            290 => 
            array (
                'class_id' => 290,
                'room' => 'B113',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 29,
            ),
            291 => 
            array (
                'class_id' => 291,
                'room' => 'A115',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 382,
            ),
            292 => 
            array (
                'class_id' => 292,
                'room' => 'B109',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 211,
            ),
            293 => 
            array (
                'class_id' => 293,
                'room' => 'B115',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 393,
            ),
            294 => 
            array (
                'class_id' => 294,
                'room' => 'C114',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 15,
                'faculty_id' => 5,
            ),
            295 => 
            array (
                'class_id' => 295,
                'room' => 'C101',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 155,
            ),
            296 => 
            array (
                'class_id' => 296,
                'room' => 'A108',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 73,
            ),
            297 => 
            array (
                'class_id' => 297,
                'room' => 'C103',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 397,
            ),
            298 => 
            array (
                'class_id' => 298,
                'room' => 'B103',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 121,
            ),
            299 => 
            array (
                'class_id' => 299,
                'room' => 'C112',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 78,
            ),
            300 => 
            array (
                'class_id' => 300,
                'room' => 'C112',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 18,
                'faculty_id' => 127,
            ),
            301 => 
            array (
                'class_id' => 301,
                'room' => 'A119',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 74,
            ),
            302 => 
            array (
                'class_id' => 302,
                'room' => 'A102',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 12,
                'faculty_id' => 75,
            ),
            303 => 
            array (
                'class_id' => 303,
                'room' => 'C104',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 357,
            ),
            304 => 
            array (
                'class_id' => 304,
                'room' => 'A113',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 237,
            ),
            305 => 
            array (
                'class_id' => 305,
                'room' => 'C111',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 9,
                'faculty_id' => 122,
            ),
            306 => 
            array (
                'class_id' => 306,
                'room' => 'B101',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 391,
            ),
            307 => 
            array (
                'class_id' => 307,
                'room' => 'A111',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 7,
                'faculty_id' => 43,
            ),
            308 => 
            array (
                'class_id' => 308,
                'room' => 'C114',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 0,
                'faculty_id' => 327,
            ),
            309 => 
            array (
                'class_id' => 309,
                'room' => 'B104',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 306,
            ),
            310 => 
            array (
                'class_id' => 310,
                'room' => 'B101',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 3,
            ),
            311 => 
            array (
                'class_id' => 311,
                'room' => 'C103',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 5,
            ),
            312 => 
            array (
                'class_id' => 312,
                'room' => 'A103',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 360,
            ),
            313 => 
            array (
                'class_id' => 313,
                'room' => 'A114',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 4,
            ),
            314 => 
            array (
                'class_id' => 314,
                'room' => 'C108',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 22,
                'faculty_id' => 170,
            ),
            315 => 
            array (
                'class_id' => 315,
                'room' => 'A117',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 7,
                'faculty_id' => 363,
            ),
            316 => 
            array (
                'class_id' => 316,
                'room' => 'C116',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 72,
            ),
            317 => 
            array (
                'class_id' => 317,
                'room' => 'B102',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 44,
            ),
            318 => 
            array (
                'class_id' => 318,
                'room' => 'B111',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 231,
            ),
            319 => 
            array (
                'class_id' => 319,
                'room' => 'B105',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 352,
            ),
            320 => 
            array (
                'class_id' => 320,
                'room' => 'A114',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 206,
            ),
            321 => 
            array (
                'class_id' => 321,
                'room' => 'A112',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 267,
            ),
            322 => 
            array (
                'class_id' => 322,
                'room' => 'A109',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 60,
            ),
            323 => 
            array (
                'class_id' => 323,
                'room' => 'B112',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 15,
                'faculty_id' => 295,
            ),
            324 => 
            array (
                'class_id' => 324,
                'room' => 'B117',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 51,
            ),
            325 => 
            array (
                'class_id' => 325,
                'room' => 'A117',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 248,
            ),
            326 => 
            array (
                'class_id' => 326,
                'room' => 'B106',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 206,
            ),
            327 => 
            array (
                'class_id' => 327,
                'room' => 'C105',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 177,
            ),
            328 => 
            array (
                'class_id' => 328,
                'room' => 'A116',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 226,
            ),
            329 => 
            array (
                'class_id' => 329,
                'room' => 'C101',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 341,
            ),
            330 => 
            array (
                'class_id' => 330,
                'room' => 'A102',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 55,
            ),
            331 => 
            array (
                'class_id' => 331,
                'room' => 'C102',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 104,
            ),
            332 => 
            array (
                'class_id' => 332,
                'room' => 'B113',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 231,
            ),
            333 => 
            array (
                'class_id' => 333,
                'room' => 'C103',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 13,
                'faculty_id' => 314,
            ),
            334 => 
            array (
                'class_id' => 334,
                'room' => 'C105',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 190,
            ),
            335 => 
            array (
                'class_id' => 335,
                'room' => 'B113',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 194,
            ),
            336 => 
            array (
                'class_id' => 336,
                'room' => 'A113',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 252,
            ),
            337 => 
            array (
                'class_id' => 337,
                'room' => 'A105',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 76,
            ),
            338 => 
            array (
                'class_id' => 338,
                'room' => 'B120',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 100,
            ),
            339 => 
            array (
                'class_id' => 339,
                'room' => 'A107',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 3,
            ),
            340 => 
            array (
                'class_id' => 340,
                'room' => 'C104',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 322,
            ),
            341 => 
            array (
                'class_id' => 341,
                'room' => 'C111',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 6,
                'faculty_id' => 361,
            ),
            342 => 
            array (
                'class_id' => 342,
                'room' => 'A113',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 93,
            ),
            343 => 
            array (
                'class_id' => 343,
                'room' => 'B109',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 276,
            ),
            344 => 
            array (
                'class_id' => 344,
                'room' => 'C120',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 349,
            ),
            345 => 
            array (
                'class_id' => 345,
                'room' => 'B102',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 362,
            ),
            346 => 
            array (
                'class_id' => 346,
                'room' => 'A119',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 132,
            ),
            347 => 
            array (
                'class_id' => 347,
                'room' => 'A102',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 272,
            ),
            348 => 
            array (
                'class_id' => 348,
                'room' => 'A103',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 17,
            ),
            349 => 
            array (
                'class_id' => 349,
                'room' => 'A105',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 13,
                'faculty_id' => 337,
            ),
            350 => 
            array (
                'class_id' => 350,
                'room' => 'C103',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 236,
            ),
            351 => 
            array (
                'class_id' => 351,
                'room' => 'B117',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 344,
            ),
            352 => 
            array (
                'class_id' => 352,
                'room' => 'B109',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 384,
            ),
            353 => 
            array (
                'class_id' => 353,
                'room' => 'A111',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 4,
                'faculty_id' => 278,
            ),
            354 => 
            array (
                'class_id' => 354,
                'room' => 'B115',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 233,
            ),
            355 => 
            array (
                'class_id' => 355,
                'room' => 'C103',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 332,
            ),
            356 => 
            array (
                'class_id' => 356,
                'room' => 'C115',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 272,
            ),
            357 => 
            array (
                'class_id' => 357,
                'room' => 'B115',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 4,
                'faculty_id' => 379,
            ),
            358 => 
            array (
                'class_id' => 358,
                'room' => 'B120',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 12,
            ),
            359 => 
            array (
                'class_id' => 359,
                'room' => 'A101',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 118,
            ),
            360 => 
            array (
                'class_id' => 360,
                'room' => 'C104',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 216,
            ),
            361 => 
            array (
                'class_id' => 361,
                'room' => 'C119',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 306,
            ),
            362 => 
            array (
                'class_id' => 362,
                'room' => 'C104',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 34,
            ),
            363 => 
            array (
                'class_id' => 363,
                'room' => 'C117',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 266,
            ),
            364 => 
            array (
                'class_id' => 364,
                'room' => 'B114',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 132,
            ),
            365 => 
            array (
                'class_id' => 365,
                'room' => 'B109',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 366,
            ),
            366 => 
            array (
                'class_id' => 366,
                'room' => 'C108',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 6,
                'faculty_id' => 345,
            ),
            367 => 
            array (
                'class_id' => 367,
                'room' => 'A116',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 218,
            ),
            368 => 
            array (
                'class_id' => 368,
                'room' => 'B107',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 23,
            ),
            369 => 
            array (
                'class_id' => 369,
                'room' => 'B102',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 141,
            ),
            370 => 
            array (
                'class_id' => 370,
                'room' => 'A107',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 282,
            ),
            371 => 
            array (
                'class_id' => 371,
                'room' => 'B111',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 185,
            ),
            372 => 
            array (
                'class_id' => 372,
                'room' => 'B106',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 312,
            ),
            373 => 
            array (
                'class_id' => 373,
                'room' => 'C120',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 270,
            ),
            374 => 
            array (
                'class_id' => 374,
                'room' => 'A105',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 135,
            ),
            375 => 
            array (
                'class_id' => 375,
                'room' => 'A110',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 4,
            ),
            376 => 
            array (
                'class_id' => 376,
                'room' => 'C119',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 51,
            ),
            377 => 
            array (
                'class_id' => 377,
                'room' => 'A120',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 13,
                'faculty_id' => 320,
            ),
            378 => 
            array (
                'class_id' => 378,
                'room' => 'A112',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 319,
            ),
            379 => 
            array (
                'class_id' => 379,
                'room' => 'B109',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 64,
            ),
            380 => 
            array (
                'class_id' => 380,
                'room' => 'A113',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 365,
            ),
            381 => 
            array (
                'class_id' => 381,
                'room' => 'C115',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 244,
            ),
            382 => 
            array (
                'class_id' => 382,
                'room' => 'B103',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 148,
            ),
            383 => 
            array (
                'class_id' => 383,
                'room' => 'B109',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 6,
                'faculty_id' => 396,
            ),
            384 => 
            array (
                'class_id' => 384,
                'room' => 'C104',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 329,
            ),
            385 => 
            array (
                'class_id' => 385,
                'room' => 'B105',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 272,
            ),
            386 => 
            array (
                'class_id' => 386,
                'room' => 'C103',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 193,
            ),
            387 => 
            array (
                'class_id' => 387,
                'room' => 'B115',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 7,
                'faculty_id' => 348,
            ),
            388 => 
            array (
                'class_id' => 388,
                'room' => 'B106',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 255,
            ),
            389 => 
            array (
                'class_id' => 389,
                'room' => 'C108',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 332,
            ),
            390 => 
            array (
                'class_id' => 390,
                'room' => 'C110',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 7,
            ),
            391 => 
            array (
                'class_id' => 391,
                'room' => 'A113',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 39,
            ),
            392 => 
            array (
                'class_id' => 392,
                'room' => 'A119',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 52,
            ),
            393 => 
            array (
                'class_id' => 393,
                'room' => 'B110',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 159,
            ),
            394 => 
            array (
                'class_id' => 394,
                'room' => 'C110',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 14,
                'faculty_id' => 205,
            ),
            395 => 
            array (
                'class_id' => 395,
                'room' => 'B112',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 235,
            ),
            396 => 
            array (
                'class_id' => 396,
                'room' => 'A115',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 285,
            ),
            397 => 
            array (
                'class_id' => 397,
                'room' => 'B106',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 296,
            ),
            398 => 
            array (
                'class_id' => 398,
                'room' => 'B103',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 132,
            ),
            399 => 
            array (
                'class_id' => 399,
                'room' => 'B118',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 19,
            ),
            400 => 
            array (
                'class_id' => 400,
                'room' => 'A110',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 181,
            ),
            401 => 
            array (
                'class_id' => 401,
                'room' => 'A111',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 180,
            ),
            402 => 
            array (
                'class_id' => 402,
                'room' => 'B104',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 205,
            ),
            403 => 
            array (
                'class_id' => 403,
                'room' => 'C108',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 121,
            ),
            404 => 
            array (
                'class_id' => 404,
                'room' => 'B110',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 170,
            ),
            405 => 
            array (
                'class_id' => 405,
                'room' => 'B114',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 121,
            ),
            406 => 
            array (
                'class_id' => 406,
                'room' => 'B119',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 303,
            ),
            407 => 
            array (
                'class_id' => 407,
                'room' => 'B117',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 232,
            ),
            408 => 
            array (
                'class_id' => 408,
                'room' => 'A103',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 131,
            ),
            409 => 
            array (
                'class_id' => 409,
                'room' => 'A111',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 10,
                'faculty_id' => 175,
            ),
            410 => 
            array (
                'class_id' => 410,
                'room' => 'B113',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 12,
                'faculty_id' => 335,
            ),
            411 => 
            array (
                'class_id' => 411,
                'room' => 'B110',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 36,
            ),
            412 => 
            array (
                'class_id' => 412,
                'room' => 'A101',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 2,
                'faculty_id' => 319,
            ),
            413 => 
            array (
                'class_id' => 413,
                'room' => 'B118',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 16,
                'faculty_id' => 68,
            ),
            414 => 
            array (
                'class_id' => 414,
                'room' => 'B107',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 245,
            ),
            415 => 
            array (
                'class_id' => 415,
                'room' => 'C120',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 20,
                'faculty_id' => 314,
            ),
            416 => 
            array (
                'class_id' => 416,
                'room' => 'C109',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 330,
            ),
            417 => 
            array (
                'class_id' => 417,
                'room' => 'A118',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 225,
            ),
            418 => 
            array (
                'class_id' => 418,
                'room' => 'B108',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 303,
            ),
            419 => 
            array (
                'class_id' => 419,
                'room' => 'A116',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 388,
            ),
            420 => 
            array (
                'class_id' => 420,
                'room' => 'B105',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 61,
            ),
            421 => 
            array (
                'class_id' => 421,
                'room' => 'A114',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 22,
                'faculty_id' => 204,
            ),
            422 => 
            array (
                'class_id' => 422,
                'room' => 'B105',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 305,
            ),
            423 => 
            array (
                'class_id' => 423,
                'room' => 'B113',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 96,
            ),
            424 => 
            array (
                'class_id' => 424,
                'room' => 'C120',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 81,
            ),
            425 => 
            array (
                'class_id' => 425,
                'room' => 'A110',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 82,
            ),
            426 => 
            array (
                'class_id' => 426,
                'room' => 'A102',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 273,
            ),
            427 => 
            array (
                'class_id' => 427,
                'room' => 'C113',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 171,
            ),
            428 => 
            array (
                'class_id' => 428,
                'room' => 'B106',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 4,
            ),
            429 => 
            array (
                'class_id' => 429,
                'room' => 'C109',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 315,
            ),
            430 => 
            array (
                'class_id' => 430,
                'room' => 'B112',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 315,
            ),
            431 => 
            array (
                'class_id' => 431,
                'room' => 'C101',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 177,
            ),
            432 => 
            array (
                'class_id' => 432,
                'room' => 'B114',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 400,
            ),
            433 => 
            array (
                'class_id' => 433,
                'room' => 'B109',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 123,
            ),
            434 => 
            array (
                'class_id' => 434,
                'room' => 'B120',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 77,
            ),
            435 => 
            array (
                'class_id' => 435,
                'room' => 'B114',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 201,
            ),
            436 => 
            array (
                'class_id' => 436,
                'room' => 'B110',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 0,
            ),
            437 => 
            array (
                'class_id' => 437,
                'room' => 'B116',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 19,
                'faculty_id' => 28,
            ),
            438 => 
            array (
                'class_id' => 438,
                'room' => 'C109',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 38,
            ),
            439 => 
            array (
                'class_id' => 439,
                'room' => 'C116',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 13,
                'faculty_id' => 314,
            ),
            440 => 
            array (
                'class_id' => 440,
                'room' => 'B105',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 343,
            ),
            441 => 
            array (
                'class_id' => 441,
                'room' => 'B107',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 11,
                'faculty_id' => 363,
            ),
            442 => 
            array (
                'class_id' => 442,
                'room' => 'B101',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 22,
            ),
            443 => 
            array (
                'class_id' => 443,
                'room' => 'B108',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 247,
            ),
            444 => 
            array (
                'class_id' => 444,
                'room' => 'A104',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 324,
            ),
            445 => 
            array (
                'class_id' => 445,
                'room' => 'B118',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 257,
            ),
            446 => 
            array (
                'class_id' => 446,
                'room' => 'A106',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 3,
                'faculty_id' => 90,
            ),
            447 => 
            array (
                'class_id' => 447,
                'room' => 'B102',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 24,
                'faculty_id' => 226,
            ),
            448 => 
            array (
                'class_id' => 448,
                'room' => 'A112',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 14,
                'faculty_id' => 231,
            ),
            449 => 
            array (
                'class_id' => 449,
                'room' => 'B108',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 16,
            ),
            450 => 
            array (
                'class_id' => 450,
                'room' => 'B113',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 200,
            ),
            451 => 
            array (
                'class_id' => 451,
                'room' => 'B118',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 18,
                'faculty_id' => 51,
            ),
            452 => 
            array (
                'class_id' => 452,
                'room' => 'A114',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 8,
                'faculty_id' => 319,
            ),
            453 => 
            array (
                'class_id' => 453,
                'room' => 'A114',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 371,
            ),
            454 => 
            array (
                'class_id' => 454,
                'room' => 'A110',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 1,
                'faculty_id' => 207,
            ),
            455 => 
            array (
                'class_id' => 455,
                'room' => 'A117',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 17,
                'faculty_id' => 294,
            ),
            456 => 
            array (
                'class_id' => 456,
                'room' => 'B109',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 247,
            ),
            457 => 
            array (
                'class_id' => 457,
                'room' => 'B119',
                'schedule' => '14:00 - 15:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 340,
            ),
            458 => 
            array (
                'class_id' => 458,
                'room' => 'B116',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 21,
                'faculty_id' => 348,
            ),
            459 => 
            array (
                'class_id' => 459,
                'room' => 'C106',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 370,
            ),
            460 => 
            array (
                'class_id' => 460,
                'room' => 'C114',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 22,
                'faculty_id' => 229,
            ),
            461 => 
            array (
                'class_id' => 461,
                'room' => 'C109',
                'schedule' => '17:00 - 18:00 MWF',
                'subject_id' => 18,
                'faculty_id' => 363,
            ),
            462 => 
            array (
                'class_id' => 462,
                'room' => 'B101',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 56,
            ),
            463 => 
            array (
                'class_id' => 463,
                'room' => 'B115',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 9,
                'faculty_id' => 221,
            ),
            464 => 
            array (
                'class_id' => 464,
                'room' => 'C109',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 2,
                'faculty_id' => 213,
            ),
            465 => 
            array (
                'class_id' => 465,
                'room' => 'B111',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 9,
                'faculty_id' => 374,
            ),
            466 => 
            array (
                'class_id' => 466,
                'room' => 'C119',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 3,
                'faculty_id' => 391,
            ),
            467 => 
            array (
                'class_id' => 467,
                'room' => 'C105',
                'schedule' => '13:00 - 13:00 TThS',
                'subject_id' => 6,
                'faculty_id' => 320,
            ),
            468 => 
            array (
                'class_id' => 468,
                'room' => 'C109',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 240,
            ),
            469 => 
            array (
                'class_id' => 469,
                'room' => 'C102',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 170,
            ),
            470 => 
            array (
                'class_id' => 470,
                'room' => 'A101',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 7,
                'faculty_id' => 354,
            ),
            471 => 
            array (
                'class_id' => 471,
                'room' => 'B105',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 5,
                'faculty_id' => 35,
            ),
            472 => 
            array (
                'class_id' => 472,
                'room' => 'A115',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 34,
            ),
            473 => 
            array (
                'class_id' => 473,
                'room' => 'C117',
                'schedule' => '15:00 - 16:00 TThS',
                'subject_id' => 1,
                'faculty_id' => 312,
            ),
            474 => 
            array (
                'class_id' => 474,
                'room' => 'C117',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 17,
                'faculty_id' => 217,
            ),
            475 => 
            array (
                'class_id' => 475,
                'room' => 'C106',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 0,
                'faculty_id' => 222,
            ),
            476 => 
            array (
                'class_id' => 476,
                'room' => 'C109',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 245,
            ),
            477 => 
            array (
                'class_id' => 477,
                'room' => 'C101',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 328,
            ),
            478 => 
            array (
                'class_id' => 478,
                'room' => 'B107',
                'schedule' => '14:00 - 15:00 TThS',
                'subject_id' => 10,
                'faculty_id' => 114,
            ),
            479 => 
            array (
                'class_id' => 479,
                'room' => 'C103',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 12,
                'faculty_id' => 213,
            ),
            480 => 
            array (
                'class_id' => 480,
                'room' => 'C120',
                'schedule' => '8:00 - 9:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 56,
            ),
            481 => 
            array (
                'class_id' => 481,
                'room' => 'A107',
                'schedule' => '16:00 - 17:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 62,
            ),
            482 => 
            array (
                'class_id' => 482,
                'room' => 'C118',
                'schedule' => '9:00 - 10:00 TThS',
                'subject_id' => 23,
                'faculty_id' => 206,
            ),
            483 => 
            array (
                'class_id' => 483,
                'room' => 'B110',
                'schedule' => '11:00 - 12:00 TThS',
                'subject_id' => 8,
                'faculty_id' => 126,
            ),
            484 => 
            array (
                'class_id' => 484,
                'room' => 'A107',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 11,
                'faculty_id' => 196,
            ),
            485 => 
            array (
                'class_id' => 485,
                'room' => 'B118',
                'schedule' => '11:00 - 12:00 MWF',
                'subject_id' => 4,
                'faculty_id' => 173,
            ),
            486 => 
            array (
                'class_id' => 486,
                'room' => 'C108',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 83,
            ),
            487 => 
            array (
                'class_id' => 487,
                'room' => 'B108',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 19,
                'faculty_id' => 122,
            ),
            488 => 
            array (
                'class_id' => 488,
                'room' => 'B120',
                'schedule' => '10:00 - 11:00 MWF',
                'subject_id' => 23,
                'faculty_id' => 126,
            ),
            489 => 
            array (
                'class_id' => 489,
                'room' => 'A117',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 0,
                'faculty_id' => 390,
            ),
            490 => 
            array (
                'class_id' => 490,
                'room' => 'C119',
                'schedule' => '8:00 - 9:00 MWF',
                'subject_id' => 15,
                'faculty_id' => 55,
            ),
            491 => 
            array (
                'class_id' => 491,
                'room' => 'B108',
                'schedule' => '17:00 - 18:00 TThS',
                'subject_id' => 24,
                'faculty_id' => 49,
            ),
            492 => 
            array (
                'class_id' => 492,
                'room' => 'A114',
                'schedule' => '16:00 - 17:00 MWF',
                'subject_id' => 21,
                'faculty_id' => 246,
            ),
            493 => 
            array (
                'class_id' => 493,
                'room' => 'B112',
                'schedule' => '15:00 - 16:00 MWF',
                'subject_id' => 0,
                'faculty_id' => 256,
            ),
            494 => 
            array (
                'class_id' => 494,
                'room' => 'B105',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 13,
                'faculty_id' => 381,
            ),
            495 => 
            array (
                'class_id' => 495,
                'room' => 'C107',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 5,
                'faculty_id' => 79,
            ),
            496 => 
            array (
                'class_id' => 496,
                'room' => 'A120',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 16,
                'faculty_id' => 24,
            ),
            497 => 
            array (
                'class_id' => 497,
                'room' => 'B120',
                'schedule' => '9:00 - 10:00 MWF',
                'subject_id' => 13,
                'faculty_id' => 121,
            ),
            498 => 
            array (
                'class_id' => 498,
                'room' => 'B113',
                'schedule' => '10:00 - 11:00 TThS',
                'subject_id' => 4,
                'faculty_id' => 393,
            ),
            499 => 
            array (
                'class_id' => 499,
                'room' => 'A114',
                'schedule' => '13:00 - 13:00 MWF',
                'subject_id' => 20,
                'faculty_id' => 370,
            ),
        ));
        
        
    }
}