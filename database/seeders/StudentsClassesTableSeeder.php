<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentsClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students_classes')->delete();
        
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 1,
                'date_enrolled' => '2022-08-24',
                'student_id' => 635,
                'class_id' => 16,
            ),
            1 => 
            array (
                'sc_id' => 2,
                'date_enrolled' => '2022-08-02',
                'student_id' => 5,
                'class_id' => 298,
            ),
            2 => 
            array (
                'sc_id' => 3,
                'date_enrolled' => '2022-07-24',
                'student_id' => 25,
                'class_id' => 60,
            ),
            3 => 
            array (
                'sc_id' => 4,
                'date_enrolled' => '2022-08-08',
                'student_id' => 994,
                'class_id' => 102,
            ),
            4 => 
            array (
                'sc_id' => 5,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1159,
                'class_id' => 417,
            ),
            5 => 
            array (
                'sc_id' => 6,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1242,
                'class_id' => 12,
            ),
            6 => 
            array (
                'sc_id' => 7,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1891,
                'class_id' => 75,
            ),
            7 => 
            array (
                'sc_id' => 8,
                'date_enrolled' => '2022-07-24',
                'student_id' => 838,
                'class_id' => 156,
            ),
            8 => 
            array (
                'sc_id' => 9,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1571,
                'class_id' => 17,
            ),
            9 => 
            array (
                'sc_id' => 10,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1232,
                'class_id' => 112,
            ),
            10 => 
            array (
                'sc_id' => 11,
                'date_enrolled' => '2022-06-12',
                'student_id' => 599,
                'class_id' => 470,
            ),
            11 => 
            array (
                'sc_id' => 12,
                'date_enrolled' => '2022-07-11',
                'student_id' => 452,
                'class_id' => 244,
            ),
            12 => 
            array (
                'sc_id' => 13,
                'date_enrolled' => '2022-08-29',
                'student_id' => 378,
                'class_id' => 53,
            ),
            13 => 
            array (
                'sc_id' => 14,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1264,
                'class_id' => 31,
            ),
            14 => 
            array (
                'sc_id' => 15,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1143,
                'class_id' => 395,
            ),
            15 => 
            array (
                'sc_id' => 16,
                'date_enrolled' => '2022-06-23',
                'student_id' => 565,
                'class_id' => 74,
            ),
            16 => 
            array (
                'sc_id' => 17,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1421,
                'class_id' => 331,
            ),
            17 => 
            array (
                'sc_id' => 18,
                'date_enrolled' => '2022-06-01',
                'student_id' => 106,
                'class_id' => 490,
            ),
            18 => 
            array (
                'sc_id' => 19,
                'date_enrolled' => '2022-07-30',
                'student_id' => 599,
                'class_id' => 103,
            ),
            19 => 
            array (
                'sc_id' => 20,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1408,
                'class_id' => 366,
            ),
            20 => 
            array (
                'sc_id' => 21,
                'date_enrolled' => '2022-08-02',
                'student_id' => 535,
                'class_id' => 142,
            ),
            21 => 
            array (
                'sc_id' => 22,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1195,
                'class_id' => 299,
            ),
            22 => 
            array (
                'sc_id' => 23,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1643,
                'class_id' => 296,
            ),
            23 => 
            array (
                'sc_id' => 24,
                'date_enrolled' => '2022-08-07',
                'student_id' => 221,
                'class_id' => 5,
            ),
            24 => 
            array (
                'sc_id' => 25,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1403,
                'class_id' => 183,
            ),
            25 => 
            array (
                'sc_id' => 26,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1675,
                'class_id' => 15,
            ),
            26 => 
            array (
                'sc_id' => 27,
                'date_enrolled' => '2022-07-14',
                'student_id' => 104,
                'class_id' => 318,
            ),
            27 => 
            array (
                'sc_id' => 28,
                'date_enrolled' => '2022-07-12',
                'student_id' => 390,
                'class_id' => 142,
            ),
            28 => 
            array (
                'sc_id' => 29,
                'date_enrolled' => '2022-06-14',
                'student_id' => 870,
                'class_id' => 120,
            ),
            29 => 
            array (
                'sc_id' => 30,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1319,
                'class_id' => 324,
            ),
            30 => 
            array (
                'sc_id' => 31,
                'date_enrolled' => '2022-08-22',
                'student_id' => 913,
                'class_id' => 151,
            ),
            31 => 
            array (
                'sc_id' => 32,
                'date_enrolled' => '2022-08-14',
                'student_id' => 424,
                'class_id' => 459,
            ),
            32 => 
            array (
                'sc_id' => 33,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1937,
                'class_id' => 191,
            ),
            33 => 
            array (
                'sc_id' => 34,
                'date_enrolled' => '2022-06-26',
                'student_id' => 328,
                'class_id' => 331,
            ),
            34 => 
            array (
                'sc_id' => 35,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1700,
                'class_id' => 137,
            ),
            35 => 
            array (
                'sc_id' => 36,
                'date_enrolled' => '2022-07-24',
                'student_id' => 305,
                'class_id' => 250,
            ),
            36 => 
            array (
                'sc_id' => 37,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1669,
                'class_id' => 32,
            ),
            37 => 
            array (
                'sc_id' => 38,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1051,
                'class_id' => 134,
            ),
            38 => 
            array (
                'sc_id' => 39,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1135,
                'class_id' => 132,
            ),
            39 => 
            array (
                'sc_id' => 40,
                'date_enrolled' => '2022-08-22',
                'student_id' => 973,
                'class_id' => 251,
            ),
            40 => 
            array (
                'sc_id' => 41,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1373,
                'class_id' => 313,
            ),
            41 => 
            array (
                'sc_id' => 42,
                'date_enrolled' => '2022-07-03',
                'student_id' => 86,
                'class_id' => 427,
            ),
            42 => 
            array (
                'sc_id' => 43,
                'date_enrolled' => '2022-07-04',
                'student_id' => 35,
                'class_id' => 89,
            ),
            43 => 
            array (
                'sc_id' => 44,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1678,
                'class_id' => 179,
            ),
            44 => 
            array (
                'sc_id' => 45,
                'date_enrolled' => '2022-08-11',
                'student_id' => 637,
                'class_id' => 180,
            ),
            45 => 
            array (
                'sc_id' => 46,
                'date_enrolled' => '2022-07-20',
                'student_id' => 415,
                'class_id' => 32,
            ),
            46 => 
            array (
                'sc_id' => 47,
                'date_enrolled' => '2022-08-27',
                'student_id' => 279,
                'class_id' => 183,
            ),
            47 => 
            array (
                'sc_id' => 48,
                'date_enrolled' => '2022-08-25',
                'student_id' => 914,
                'class_id' => 145,
            ),
            48 => 
            array (
                'sc_id' => 49,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1718,
                'class_id' => 498,
            ),
            49 => 
            array (
                'sc_id' => 50,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1848,
                'class_id' => 368,
            ),
            50 => 
            array (
                'sc_id' => 51,
                'date_enrolled' => '2022-06-28',
                'student_id' => 483,
                'class_id' => 332,
            ),
            51 => 
            array (
                'sc_id' => 52,
                'date_enrolled' => '2022-06-06',
                'student_id' => 650,
                'class_id' => 476,
            ),
            52 => 
            array (
                'sc_id' => 53,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1258,
                'class_id' => 367,
            ),
            53 => 
            array (
                'sc_id' => 54,
                'date_enrolled' => '2022-08-09',
                'student_id' => 717,
                'class_id' => 237,
            ),
            54 => 
            array (
                'sc_id' => 55,
                'date_enrolled' => '2022-08-27',
                'student_id' => 721,
                'class_id' => 7,
            ),
            55 => 
            array (
                'sc_id' => 56,
                'date_enrolled' => '2022-07-09',
                'student_id' => 386,
                'class_id' => 313,
            ),
            56 => 
            array (
                'sc_id' => 57,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1887,
                'class_id' => 111,
            ),
            57 => 
            array (
                'sc_id' => 58,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1128,
                'class_id' => 401,
            ),
            58 => 
            array (
                'sc_id' => 59,
                'date_enrolled' => '2022-07-13',
                'student_id' => 752,
                'class_id' => 148,
            ),
            59 => 
            array (
                'sc_id' => 60,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1439,
                'class_id' => 123,
            ),
            60 => 
            array (
                'sc_id' => 61,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1448,
                'class_id' => 143,
            ),
            61 => 
            array (
                'sc_id' => 62,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1873,
                'class_id' => 347,
            ),
            62 => 
            array (
                'sc_id' => 63,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1505,
                'class_id' => 401,
            ),
            63 => 
            array (
                'sc_id' => 64,
                'date_enrolled' => '2022-07-26',
                'student_id' => 171,
                'class_id' => 215,
            ),
            64 => 
            array (
                'sc_id' => 65,
                'date_enrolled' => '2022-07-08',
                'student_id' => 458,
                'class_id' => 457,
            ),
            65 => 
            array (
                'sc_id' => 66,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1317,
                'class_id' => 368,
            ),
            66 => 
            array (
                'sc_id' => 67,
                'date_enrolled' => '2022-08-17',
                'student_id' => 540,
                'class_id' => 345,
            ),
            67 => 
            array (
                'sc_id' => 68,
                'date_enrolled' => '2022-08-29',
                'student_id' => 196,
                'class_id' => 13,
            ),
            68 => 
            array (
                'sc_id' => 69,
                'date_enrolled' => '2022-08-24',
                'student_id' => 170,
                'class_id' => 437,
            ),
            69 => 
            array (
                'sc_id' => 70,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1957,
                'class_id' => 95,
            ),
            70 => 
            array (
                'sc_id' => 71,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1105,
                'class_id' => 215,
            ),
            71 => 
            array (
                'sc_id' => 72,
                'date_enrolled' => '2022-07-30',
                'student_id' => 20,
                'class_id' => 438,
            ),
            72 => 
            array (
                'sc_id' => 73,
                'date_enrolled' => '2022-08-13',
                'student_id' => 160,
                'class_id' => 112,
            ),
            73 => 
            array (
                'sc_id' => 74,
                'date_enrolled' => '2022-08-16',
                'student_id' => 165,
                'class_id' => 335,
            ),
            74 => 
            array (
                'sc_id' => 75,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1857,
                'class_id' => 345,
            ),
            75 => 
            array (
                'sc_id' => 76,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1619,
                'class_id' => 212,
            ),
            76 => 
            array (
                'sc_id' => 77,
                'date_enrolled' => '2022-06-21',
                'student_id' => 566,
                'class_id' => 298,
            ),
            77 => 
            array (
                'sc_id' => 78,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1733,
                'class_id' => 406,
            ),
            78 => 
            array (
                'sc_id' => 79,
                'date_enrolled' => '2022-07-06',
                'student_id' => 32,
                'class_id' => 206,
            ),
            79 => 
            array (
                'sc_id' => 80,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1760,
                'class_id' => 341,
            ),
            80 => 
            array (
                'sc_id' => 81,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1241,
                'class_id' => 121,
            ),
            81 => 
            array (
                'sc_id' => 82,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1107,
                'class_id' => 312,
            ),
            82 => 
            array (
                'sc_id' => 83,
                'date_enrolled' => '2022-07-17',
                'student_id' => 919,
                'class_id' => 295,
            ),
            83 => 
            array (
                'sc_id' => 84,
                'date_enrolled' => '2022-06-26',
                'student_id' => 824,
                'class_id' => 449,
            ),
            84 => 
            array (
                'sc_id' => 85,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1549,
                'class_id' => 297,
            ),
            85 => 
            array (
                'sc_id' => 86,
                'date_enrolled' => '2022-07-19',
                'student_id' => 651,
                'class_id' => 343,
            ),
            86 => 
            array (
                'sc_id' => 87,
                'date_enrolled' => '2022-08-06',
                'student_id' => 997,
                'class_id' => 182,
            ),
            87 => 
            array (
                'sc_id' => 88,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1118,
                'class_id' => 147,
            ),
            88 => 
            array (
                'sc_id' => 89,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1014,
                'class_id' => 223,
            ),
            89 => 
            array (
                'sc_id' => 90,
                'date_enrolled' => '2022-08-15',
                'student_id' => 338,
                'class_id' => 196,
            ),
            90 => 
            array (
                'sc_id' => 91,
                'date_enrolled' => '2022-07-27',
                'student_id' => 545,
                'class_id' => 247,
            ),
            91 => 
            array (
                'sc_id' => 92,
                'date_enrolled' => '2022-06-04',
                'student_id' => 753,
                'class_id' => 99,
            ),
            92 => 
            array (
                'sc_id' => 93,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1920,
                'class_id' => 102,
            ),
            93 => 
            array (
                'sc_id' => 94,
                'date_enrolled' => '2022-06-05',
                'student_id' => 312,
                'class_id' => 126,
            ),
            94 => 
            array (
                'sc_id' => 95,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1903,
                'class_id' => 315,
            ),
            95 => 
            array (
                'sc_id' => 96,
                'date_enrolled' => '2022-07-18',
                'student_id' => 588,
                'class_id' => 188,
            ),
            96 => 
            array (
                'sc_id' => 97,
                'date_enrolled' => '2022-06-23',
                'student_id' => 691,
                'class_id' => 1,
            ),
            97 => 
            array (
                'sc_id' => 98,
                'date_enrolled' => '2022-07-11',
                'student_id' => 116,
                'class_id' => 422,
            ),
            98 => 
            array (
                'sc_id' => 99,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1549,
                'class_id' => 114,
            ),
            99 => 
            array (
                'sc_id' => 100,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1148,
                'class_id' => 80,
            ),
            100 => 
            array (
                'sc_id' => 101,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1547,
                'class_id' => 366,
            ),
            101 => 
            array (
                'sc_id' => 102,
                'date_enrolled' => '2022-06-20',
                'student_id' => 490,
                'class_id' => 456,
            ),
            102 => 
            array (
                'sc_id' => 103,
                'date_enrolled' => '2022-08-11',
                'student_id' => 65,
                'class_id' => 18,
            ),
            103 => 
            array (
                'sc_id' => 104,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1656,
                'class_id' => 224,
            ),
            104 => 
            array (
                'sc_id' => 105,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1039,
                'class_id' => 20,
            ),
            105 => 
            array (
                'sc_id' => 106,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1095,
                'class_id' => 11,
            ),
            106 => 
            array (
                'sc_id' => 107,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1484,
                'class_id' => 439,
            ),
            107 => 
            array (
                'sc_id' => 108,
                'date_enrolled' => '2022-08-26',
                'student_id' => 909,
                'class_id' => 375,
            ),
            108 => 
            array (
                'sc_id' => 109,
                'date_enrolled' => '2022-06-27',
                'student_id' => 923,
                'class_id' => 202,
            ),
            109 => 
            array (
                'sc_id' => 110,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1544,
                'class_id' => 65,
            ),
            110 => 
            array (
                'sc_id' => 111,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1014,
                'class_id' => 173,
            ),
            111 => 
            array (
                'sc_id' => 112,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1664,
                'class_id' => 11,
            ),
            112 => 
            array (
                'sc_id' => 113,
                'date_enrolled' => '2022-06-18',
                'student_id' => 781,
                'class_id' => 1,
            ),
            113 => 
            array (
                'sc_id' => 114,
                'date_enrolled' => '2022-06-05',
                'student_id' => 14,
                'class_id' => 448,
            ),
            114 => 
            array (
                'sc_id' => 115,
                'date_enrolled' => '2022-08-11',
                'student_id' => 176,
                'class_id' => 385,
            ),
            115 => 
            array (
                'sc_id' => 116,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1343,
                'class_id' => 301,
            ),
            116 => 
            array (
                'sc_id' => 117,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1333,
                'class_id' => 385,
            ),
            117 => 
            array (
                'sc_id' => 118,
                'date_enrolled' => '2022-08-09',
                'student_id' => 665,
                'class_id' => 231,
            ),
            118 => 
            array (
                'sc_id' => 119,
                'date_enrolled' => '2022-08-01',
                'student_id' => 413,
                'class_id' => 423,
            ),
            119 => 
            array (
                'sc_id' => 120,
                'date_enrolled' => '2022-07-22',
                'student_id' => 979,
                'class_id' => 6,
            ),
            120 => 
            array (
                'sc_id' => 121,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1247,
                'class_id' => 246,
            ),
            121 => 
            array (
                'sc_id' => 122,
                'date_enrolled' => '2022-06-13',
                'student_id' => 918,
                'class_id' => 412,
            ),
            122 => 
            array (
                'sc_id' => 123,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1558,
                'class_id' => 139,
            ),
            123 => 
            array (
                'sc_id' => 124,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1040,
                'class_id' => 230,
            ),
            124 => 
            array (
                'sc_id' => 125,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1846,
                'class_id' => 279,
            ),
            125 => 
            array (
                'sc_id' => 126,
                'date_enrolled' => '2022-06-14',
                'student_id' => 200,
                'class_id' => 119,
            ),
            126 => 
            array (
                'sc_id' => 127,
                'date_enrolled' => '2022-08-04',
                'student_id' => 121,
                'class_id' => 420,
            ),
            127 => 
            array (
                'sc_id' => 128,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1582,
                'class_id' => 210,
            ),
            128 => 
            array (
                'sc_id' => 129,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1032,
                'class_id' => 54,
            ),
            129 => 
            array (
                'sc_id' => 130,
                'date_enrolled' => '2022-06-06',
                'student_id' => 673,
                'class_id' => 491,
            ),
            130 => 
            array (
                'sc_id' => 131,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1866,
                'class_id' => 351,
            ),
            131 => 
            array (
                'sc_id' => 132,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1771,
                'class_id' => 433,
            ),
            132 => 
            array (
                'sc_id' => 133,
                'date_enrolled' => '2022-06-21',
                'student_id' => 102,
                'class_id' => 83,
            ),
            133 => 
            array (
                'sc_id' => 134,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1957,
                'class_id' => 62,
            ),
            134 => 
            array (
                'sc_id' => 135,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1316,
                'class_id' => 171,
            ),
            135 => 
            array (
                'sc_id' => 136,
                'date_enrolled' => '2022-06-15',
                'student_id' => 678,
                'class_id' => 155,
            ),
            136 => 
            array (
                'sc_id' => 137,
                'date_enrolled' => '2022-08-03',
                'student_id' => 408,
                'class_id' => 395,
            ),
            137 => 
            array (
                'sc_id' => 138,
                'date_enrolled' => '2022-07-12',
                'student_id' => 369,
                'class_id' => 105,
            ),
            138 => 
            array (
                'sc_id' => 139,
                'date_enrolled' => '2022-07-06',
                'student_id' => 165,
                'class_id' => 139,
            ),
            139 => 
            array (
                'sc_id' => 140,
                'date_enrolled' => '2022-08-10',
                'student_id' => 199,
                'class_id' => 319,
            ),
            140 => 
            array (
                'sc_id' => 141,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1459,
                'class_id' => 102,
            ),
            141 => 
            array (
                'sc_id' => 142,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1158,
                'class_id' => 383,
            ),
            142 => 
            array (
                'sc_id' => 143,
                'date_enrolled' => '2022-08-30',
                'student_id' => 311,
                'class_id' => 294,
            ),
            143 => 
            array (
                'sc_id' => 144,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1565,
                'class_id' => 195,
            ),
            144 => 
            array (
                'sc_id' => 145,
                'date_enrolled' => '2022-07-01',
                'student_id' => 144,
                'class_id' => 99,
            ),
            145 => 
            array (
                'sc_id' => 146,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1480,
                'class_id' => 151,
            ),
            146 => 
            array (
                'sc_id' => 147,
                'date_enrolled' => '2022-06-27',
                'student_id' => 753,
                'class_id' => 471,
            ),
            147 => 
            array (
                'sc_id' => 148,
                'date_enrolled' => '2022-06-07',
                'student_id' => 255,
                'class_id' => 168,
            ),
            148 => 
            array (
                'sc_id' => 149,
                'date_enrolled' => '2022-08-04',
                'student_id' => 496,
                'class_id' => 350,
            ),
            149 => 
            array (
                'sc_id' => 150,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1601,
                'class_id' => 175,
            ),
            150 => 
            array (
                'sc_id' => 151,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1185,
                'class_id' => 331,
            ),
            151 => 
            array (
                'sc_id' => 152,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1696,
                'class_id' => 305,
            ),
            152 => 
            array (
                'sc_id' => 153,
                'date_enrolled' => '2022-06-02',
                'student_id' => 966,
                'class_id' => 445,
            ),
            153 => 
            array (
                'sc_id' => 154,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1066,
                'class_id' => 391,
            ),
            154 => 
            array (
                'sc_id' => 155,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1550,
                'class_id' => 188,
            ),
            155 => 
            array (
                'sc_id' => 156,
                'date_enrolled' => '2022-08-19',
                'student_id' => 418,
                'class_id' => 475,
            ),
            156 => 
            array (
                'sc_id' => 157,
                'date_enrolled' => '2022-06-25',
                'student_id' => 718,
                'class_id' => 257,
            ),
            157 => 
            array (
                'sc_id' => 158,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1502,
                'class_id' => 357,
            ),
            158 => 
            array (
                'sc_id' => 159,
                'date_enrolled' => '2022-06-30',
                'student_id' => 768,
                'class_id' => 235,
            ),
            159 => 
            array (
                'sc_id' => 160,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1680,
                'class_id' => 54,
            ),
            160 => 
            array (
                'sc_id' => 161,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1182,
                'class_id' => 251,
            ),
            161 => 
            array (
                'sc_id' => 162,
                'date_enrolled' => '2022-07-06',
                'student_id' => 923,
                'class_id' => 249,
            ),
            162 => 
            array (
                'sc_id' => 163,
                'date_enrolled' => '2022-07-09',
                'student_id' => 22,
                'class_id' => 349,
            ),
            163 => 
            array (
                'sc_id' => 164,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1795,
                'class_id' => 120,
            ),
            164 => 
            array (
                'sc_id' => 165,
                'date_enrolled' => '2022-06-09',
                'student_id' => 197,
                'class_id' => 81,
            ),
            165 => 
            array (
                'sc_id' => 166,
                'date_enrolled' => '2022-07-24',
                'student_id' => 62,
                'class_id' => 373,
            ),
            166 => 
            array (
                'sc_id' => 167,
                'date_enrolled' => '2022-06-01',
                'student_id' => 545,
                'class_id' => 171,
            ),
            167 => 
            array (
                'sc_id' => 168,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1409,
                'class_id' => 380,
            ),
            168 => 
            array (
                'sc_id' => 169,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1148,
                'class_id' => 467,
            ),
            169 => 
            array (
                'sc_id' => 170,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1114,
                'class_id' => 329,
            ),
            170 => 
            array (
                'sc_id' => 171,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1621,
                'class_id' => 392,
            ),
            171 => 
            array (
                'sc_id' => 172,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1146,
                'class_id' => 215,
            ),
            172 => 
            array (
                'sc_id' => 173,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1228,
                'class_id' => 174,
            ),
            173 => 
            array (
                'sc_id' => 174,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1719,
                'class_id' => 436,
            ),
            174 => 
            array (
                'sc_id' => 175,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1515,
                'class_id' => 368,
            ),
            175 => 
            array (
                'sc_id' => 176,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1419,
                'class_id' => 64,
            ),
            176 => 
            array (
                'sc_id' => 177,
                'date_enrolled' => '2022-06-03',
                'student_id' => 857,
                'class_id' => 468,
            ),
            177 => 
            array (
                'sc_id' => 178,
                'date_enrolled' => '2022-08-09',
                'student_id' => 36,
                'class_id' => 369,
            ),
            178 => 
            array (
                'sc_id' => 179,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1584,
                'class_id' => 406,
            ),
            179 => 
            array (
                'sc_id' => 180,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1121,
                'class_id' => 62,
            ),
            180 => 
            array (
                'sc_id' => 181,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1168,
                'class_id' => 147,
            ),
            181 => 
            array (
                'sc_id' => 182,
                'date_enrolled' => '2022-07-26',
                'student_id' => 161,
                'class_id' => 26,
            ),
            182 => 
            array (
                'sc_id' => 183,
                'date_enrolled' => '2022-08-24',
                'student_id' => 933,
                'class_id' => 142,
            ),
            183 => 
            array (
                'sc_id' => 184,
                'date_enrolled' => '2022-06-27',
                'student_id' => 167,
                'class_id' => 81,
            ),
            184 => 
            array (
                'sc_id' => 185,
                'date_enrolled' => '2022-07-17',
                'student_id' => 633,
                'class_id' => 151,
            ),
            185 => 
            array (
                'sc_id' => 186,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1684,
                'class_id' => 392,
            ),
            186 => 
            array (
                'sc_id' => 187,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1197,
                'class_id' => 10,
            ),
            187 => 
            array (
                'sc_id' => 188,
                'date_enrolled' => '2022-06-07',
                'student_id' => 476,
                'class_id' => 304,
            ),
            188 => 
            array (
                'sc_id' => 189,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1547,
                'class_id' => 73,
            ),
            189 => 
            array (
                'sc_id' => 190,
                'date_enrolled' => '2022-07-26',
                'student_id' => 241,
                'class_id' => 246,
            ),
            190 => 
            array (
                'sc_id' => 191,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1619,
                'class_id' => 408,
            ),
            191 => 
            array (
                'sc_id' => 192,
                'date_enrolled' => '2022-07-16',
                'student_id' => 576,
                'class_id' => 225,
            ),
            192 => 
            array (
                'sc_id' => 193,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1251,
                'class_id' => 113,
            ),
            193 => 
            array (
                'sc_id' => 194,
                'date_enrolled' => '2022-07-03',
                'student_id' => 22,
                'class_id' => 287,
            ),
            194 => 
            array (
                'sc_id' => 195,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1829,
                'class_id' => 451,
            ),
            195 => 
            array (
                'sc_id' => 196,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1040,
                'class_id' => 290,
            ),
            196 => 
            array (
                'sc_id' => 197,
                'date_enrolled' => '2022-08-08',
                'student_id' => 818,
                'class_id' => 83,
            ),
            197 => 
            array (
                'sc_id' => 198,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1255,
                'class_id' => 327,
            ),
            198 => 
            array (
                'sc_id' => 199,
                'date_enrolled' => '2022-07-02',
                'student_id' => 799,
                'class_id' => 467,
            ),
            199 => 
            array (
                'sc_id' => 200,
                'date_enrolled' => '2022-07-14',
                'student_id' => 184,
                'class_id' => 372,
            ),
            200 => 
            array (
                'sc_id' => 201,
                'date_enrolled' => '2022-06-16',
                'student_id' => 922,
                'class_id' => 159,
            ),
            201 => 
            array (
                'sc_id' => 202,
                'date_enrolled' => '2022-07-26',
                'student_id' => 510,
                'class_id' => 247,
            ),
            202 => 
            array (
                'sc_id' => 203,
                'date_enrolled' => '2022-07-29',
                'student_id' => 17,
                'class_id' => 487,
            ),
            203 => 
            array (
                'sc_id' => 204,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1430,
                'class_id' => 383,
            ),
            204 => 
            array (
                'sc_id' => 205,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1484,
                'class_id' => 492,
            ),
            205 => 
            array (
                'sc_id' => 206,
                'date_enrolled' => '2022-06-02',
                'student_id' => 42,
                'class_id' => 197,
            ),
            206 => 
            array (
                'sc_id' => 207,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1199,
                'class_id' => 149,
            ),
            207 => 
            array (
                'sc_id' => 208,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1744,
                'class_id' => 183,
            ),
            208 => 
            array (
                'sc_id' => 209,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1532,
                'class_id' => 144,
            ),
            209 => 
            array (
                'sc_id' => 210,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1901,
                'class_id' => 254,
            ),
            210 => 
            array (
                'sc_id' => 211,
                'date_enrolled' => '2022-08-24',
                'student_id' => 201,
                'class_id' => 276,
            ),
            211 => 
            array (
                'sc_id' => 212,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1759,
                'class_id' => 152,
            ),
            212 => 
            array (
                'sc_id' => 213,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1448,
                'class_id' => 367,
            ),
            213 => 
            array (
                'sc_id' => 214,
                'date_enrolled' => '2022-08-31',
                'student_id' => 165,
                'class_id' => 332,
            ),
            214 => 
            array (
                'sc_id' => 215,
                'date_enrolled' => '2022-06-28',
                'student_id' => 463,
                'class_id' => 113,
            ),
            215 => 
            array (
                'sc_id' => 216,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1660,
                'class_id' => 210,
            ),
            216 => 
            array (
                'sc_id' => 217,
                'date_enrolled' => '2022-07-04',
                'student_id' => 533,
                'class_id' => 134,
            ),
            217 => 
            array (
                'sc_id' => 218,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1270,
                'class_id' => 489,
            ),
            218 => 
            array (
                'sc_id' => 219,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1672,
                'class_id' => 220,
            ),
            219 => 
            array (
                'sc_id' => 220,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1037,
                'class_id' => 353,
            ),
            220 => 
            array (
                'sc_id' => 221,
                'date_enrolled' => '2022-07-08',
                'student_id' => 469,
                'class_id' => 20,
            ),
            221 => 
            array (
                'sc_id' => 222,
                'date_enrolled' => '2022-06-28',
                'student_id' => 770,
                'class_id' => 28,
            ),
            222 => 
            array (
                'sc_id' => 223,
                'date_enrolled' => '2022-08-05',
                'student_id' => 664,
                'class_id' => 339,
            ),
            223 => 
            array (
                'sc_id' => 224,
                'date_enrolled' => '2022-06-15',
                'student_id' => 360,
                'class_id' => 491,
            ),
            224 => 
            array (
                'sc_id' => 225,
                'date_enrolled' => '2022-06-11',
                'student_id' => 221,
                'class_id' => 161,
            ),
            225 => 
            array (
                'sc_id' => 226,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1486,
                'class_id' => 276,
            ),
            226 => 
            array (
                'sc_id' => 227,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1296,
                'class_id' => 276,
            ),
            227 => 
            array (
                'sc_id' => 228,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1076,
                'class_id' => 228,
            ),
            228 => 
            array (
                'sc_id' => 229,
                'date_enrolled' => '2022-07-07',
                'student_id' => 262,
                'class_id' => 125,
            ),
            229 => 
            array (
                'sc_id' => 230,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1884,
                'class_id' => 204,
            ),
            230 => 
            array (
                'sc_id' => 231,
                'date_enrolled' => '2022-06-27',
                'student_id' => 888,
                'class_id' => 279,
            ),
            231 => 
            array (
                'sc_id' => 232,
                'date_enrolled' => '2022-07-08',
                'student_id' => 877,
                'class_id' => 291,
            ),
            232 => 
            array (
                'sc_id' => 233,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1588,
                'class_id' => 107,
            ),
            233 => 
            array (
                'sc_id' => 234,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1289,
                'class_id' => 474,
            ),
            234 => 
            array (
                'sc_id' => 235,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1841,
                'class_id' => 296,
            ),
            235 => 
            array (
                'sc_id' => 236,
                'date_enrolled' => '2022-08-09',
                'student_id' => 987,
                'class_id' => 304,
            ),
            236 => 
            array (
                'sc_id' => 237,
                'date_enrolled' => '2022-07-10',
                'student_id' => 265,
                'class_id' => 197,
            ),
            237 => 
            array (
                'sc_id' => 238,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1556,
                'class_id' => 3,
            ),
            238 => 
            array (
                'sc_id' => 239,
                'date_enrolled' => '2022-07-18',
                'student_id' => 919,
                'class_id' => 402,
            ),
            239 => 
            array (
                'sc_id' => 240,
                'date_enrolled' => '2022-08-03',
                'student_id' => 109,
                'class_id' => 282,
            ),
            240 => 
            array (
                'sc_id' => 241,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1277,
                'class_id' => 255,
            ),
            241 => 
            array (
                'sc_id' => 242,
                'date_enrolled' => '2022-07-28',
                'student_id' => 222,
                'class_id' => 206,
            ),
            242 => 
            array (
                'sc_id' => 243,
                'date_enrolled' => '2022-07-03',
                'student_id' => 86,
                'class_id' => 359,
            ),
            243 => 
            array (
                'sc_id' => 244,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1363,
                'class_id' => 312,
            ),
            244 => 
            array (
                'sc_id' => 245,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1143,
                'class_id' => 241,
            ),
            245 => 
            array (
                'sc_id' => 246,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1251,
                'class_id' => 196,
            ),
            246 => 
            array (
                'sc_id' => 247,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1664,
                'class_id' => 303,
            ),
            247 => 
            array (
                'sc_id' => 248,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1267,
                'class_id' => 91,
            ),
            248 => 
            array (
                'sc_id' => 249,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1029,
                'class_id' => 399,
            ),
            249 => 
            array (
                'sc_id' => 250,
                'date_enrolled' => '2022-06-14',
                'student_id' => 61,
                'class_id' => 497,
            ),
            250 => 
            array (
                'sc_id' => 251,
                'date_enrolled' => '2022-06-25',
                'student_id' => 215,
                'class_id' => 392,
            ),
            251 => 
            array (
                'sc_id' => 252,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1481,
                'class_id' => 340,
            ),
            252 => 
            array (
                'sc_id' => 253,
                'date_enrolled' => '2022-08-10',
                'student_id' => 258,
                'class_id' => 238,
            ),
            253 => 
            array (
                'sc_id' => 254,
                'date_enrolled' => '2022-07-01',
                'student_id' => 307,
                'class_id' => 50,
            ),
            254 => 
            array (
                'sc_id' => 255,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1799,
                'class_id' => 6,
            ),
            255 => 
            array (
                'sc_id' => 256,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1793,
                'class_id' => 173,
            ),
            256 => 
            array (
                'sc_id' => 257,
                'date_enrolled' => '2022-06-24',
                'student_id' => 988,
                'class_id' => 415,
            ),
            257 => 
            array (
                'sc_id' => 258,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1668,
                'class_id' => 30,
            ),
            258 => 
            array (
                'sc_id' => 259,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1573,
                'class_id' => 316,
            ),
            259 => 
            array (
                'sc_id' => 260,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1249,
                'class_id' => 246,
            ),
            260 => 
            array (
                'sc_id' => 261,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1236,
                'class_id' => 173,
            ),
            261 => 
            array (
                'sc_id' => 262,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1196,
                'class_id' => 438,
            ),
            262 => 
            array (
                'sc_id' => 263,
                'date_enrolled' => '2022-06-05',
                'student_id' => 149,
                'class_id' => 201,
            ),
            263 => 
            array (
                'sc_id' => 264,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1748,
                'class_id' => 64,
            ),
            264 => 
            array (
                'sc_id' => 265,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1221,
                'class_id' => 483,
            ),
            265 => 
            array (
                'sc_id' => 266,
                'date_enrolled' => '2022-06-02',
                'student_id' => 687,
                'class_id' => 294,
            ),
            266 => 
            array (
                'sc_id' => 267,
                'date_enrolled' => '2022-08-03',
                'student_id' => 938,
                'class_id' => 401,
            ),
            267 => 
            array (
                'sc_id' => 268,
                'date_enrolled' => '2022-08-19',
                'student_id' => 539,
                'class_id' => 261,
            ),
            268 => 
            array (
                'sc_id' => 269,
                'date_enrolled' => '2022-08-16',
                'student_id' => 208,
                'class_id' => 473,
            ),
            269 => 
            array (
                'sc_id' => 270,
                'date_enrolled' => '2022-06-23',
                'student_id' => 151,
                'class_id' => 303,
            ),
            270 => 
            array (
                'sc_id' => 271,
                'date_enrolled' => '2022-08-11',
                'student_id' => 822,
                'class_id' => 368,
            ),
            271 => 
            array (
                'sc_id' => 272,
                'date_enrolled' => '2022-06-19',
                'student_id' => 872,
                'class_id' => 179,
            ),
            272 => 
            array (
                'sc_id' => 273,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1359,
                'class_id' => 77,
            ),
            273 => 
            array (
                'sc_id' => 274,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1629,
                'class_id' => 435,
            ),
            274 => 
            array (
                'sc_id' => 275,
                'date_enrolled' => '2022-06-25',
                'student_id' => 390,
                'class_id' => 230,
            ),
            275 => 
            array (
                'sc_id' => 276,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1143,
                'class_id' => 132,
            ),
            276 => 
            array (
                'sc_id' => 277,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1702,
                'class_id' => 196,
            ),
            277 => 
            array (
                'sc_id' => 278,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1767,
                'class_id' => 92,
            ),
            278 => 
            array (
                'sc_id' => 279,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1914,
                'class_id' => 229,
            ),
            279 => 
            array (
                'sc_id' => 280,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1953,
                'class_id' => 31,
            ),
            280 => 
            array (
                'sc_id' => 281,
                'date_enrolled' => '2022-06-27',
                'student_id' => 317,
                'class_id' => 132,
            ),
            281 => 
            array (
                'sc_id' => 282,
                'date_enrolled' => '2022-07-07',
                'student_id' => 897,
                'class_id' => 375,
            ),
            282 => 
            array (
                'sc_id' => 283,
                'date_enrolled' => '2022-06-05',
                'student_id' => 982,
                'class_id' => 433,
            ),
            283 => 
            array (
                'sc_id' => 284,
                'date_enrolled' => '2022-08-28',
                'student_id' => 166,
                'class_id' => 185,
            ),
            284 => 
            array (
                'sc_id' => 285,
                'date_enrolled' => '2022-07-19',
                'student_id' => 421,
                'class_id' => 456,
            ),
            285 => 
            array (
                'sc_id' => 286,
                'date_enrolled' => '2022-08-26',
                'student_id' => 17,
                'class_id' => 482,
            ),
            286 => 
            array (
                'sc_id' => 287,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1490,
                'class_id' => 14,
            ),
            287 => 
            array (
                'sc_id' => 288,
                'date_enrolled' => '2022-06-27',
                'student_id' => 609,
                'class_id' => 437,
            ),
            288 => 
            array (
                'sc_id' => 289,
                'date_enrolled' => '2022-07-28',
                'student_id' => 89,
                'class_id' => 334,
            ),
            289 => 
            array (
                'sc_id' => 290,
                'date_enrolled' => '2022-06-11',
                'student_id' => 938,
                'class_id' => 71,
            ),
            290 => 
            array (
                'sc_id' => 291,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1635,
                'class_id' => 140,
            ),
            291 => 
            array (
                'sc_id' => 292,
                'date_enrolled' => '2022-08-04',
                'student_id' => 742,
                'class_id' => 65,
            ),
            292 => 
            array (
                'sc_id' => 293,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1903,
                'class_id' => 20,
            ),
            293 => 
            array (
                'sc_id' => 294,
                'date_enrolled' => '2022-06-17',
                'student_id' => 446,
                'class_id' => 265,
            ),
            294 => 
            array (
                'sc_id' => 295,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1816,
                'class_id' => 36,
            ),
            295 => 
            array (
                'sc_id' => 296,
                'date_enrolled' => '2022-07-24',
                'student_id' => 626,
                'class_id' => 214,
            ),
            296 => 
            array (
                'sc_id' => 297,
                'date_enrolled' => '2022-08-30',
                'student_id' => 553,
                'class_id' => 280,
            ),
            297 => 
            array (
                'sc_id' => 298,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1907,
                'class_id' => 221,
            ),
            298 => 
            array (
                'sc_id' => 299,
                'date_enrolled' => '2022-06-30',
                'student_id' => 407,
                'class_id' => 32,
            ),
            299 => 
            array (
                'sc_id' => 300,
                'date_enrolled' => '2022-07-30',
                'student_id' => 442,
                'class_id' => 382,
            ),
            300 => 
            array (
                'sc_id' => 301,
                'date_enrolled' => '2022-07-16',
                'student_id' => 349,
                'class_id' => 188,
            ),
            301 => 
            array (
                'sc_id' => 302,
                'date_enrolled' => '2022-06-20',
                'student_id' => 524,
                'class_id' => 494,
            ),
            302 => 
            array (
                'sc_id' => 303,
                'date_enrolled' => '2022-07-28',
                'student_id' => 882,
                'class_id' => 286,
            ),
            303 => 
            array (
                'sc_id' => 304,
                'date_enrolled' => '2022-07-15',
                'student_id' => 543,
                'class_id' => 7,
            ),
            304 => 
            array (
                'sc_id' => 305,
                'date_enrolled' => '2022-08-08',
                'student_id' => 355,
                'class_id' => 261,
            ),
            305 => 
            array (
                'sc_id' => 306,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1732,
                'class_id' => 26,
            ),
            306 => 
            array (
                'sc_id' => 307,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1420,
                'class_id' => 104,
            ),
            307 => 
            array (
                'sc_id' => 308,
                'date_enrolled' => '2022-06-22',
                'student_id' => 317,
                'class_id' => 12,
            ),
            308 => 
            array (
                'sc_id' => 309,
                'date_enrolled' => '2022-06-16',
                'student_id' => 759,
                'class_id' => 201,
            ),
            309 => 
            array (
                'sc_id' => 310,
                'date_enrolled' => '2022-06-13',
                'student_id' => 225,
                'class_id' => 212,
            ),
            310 => 
            array (
                'sc_id' => 311,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1021,
                'class_id' => 485,
            ),
            311 => 
            array (
                'sc_id' => 312,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1673,
                'class_id' => 205,
            ),
            312 => 
            array (
                'sc_id' => 313,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1038,
                'class_id' => 441,
            ),
            313 => 
            array (
                'sc_id' => 314,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1029,
                'class_id' => 81,
            ),
            314 => 
            array (
                'sc_id' => 315,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1225,
                'class_id' => 489,
            ),
            315 => 
            array (
                'sc_id' => 316,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1695,
                'class_id' => 446,
            ),
            316 => 
            array (
                'sc_id' => 317,
                'date_enrolled' => '2022-07-12',
                'student_id' => 883,
                'class_id' => 47,
            ),
            317 => 
            array (
                'sc_id' => 318,
                'date_enrolled' => '2022-06-13',
                'student_id' => 274,
                'class_id' => 432,
            ),
            318 => 
            array (
                'sc_id' => 319,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1908,
                'class_id' => 163,
            ),
            319 => 
            array (
                'sc_id' => 320,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1127,
                'class_id' => 497,
            ),
            320 => 
            array (
                'sc_id' => 321,
                'date_enrolled' => '2022-06-14',
                'student_id' => 85,
                'class_id' => 339,
            ),
            321 => 
            array (
                'sc_id' => 322,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1934,
                'class_id' => 468,
            ),
            322 => 
            array (
                'sc_id' => 323,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1040,
                'class_id' => 159,
            ),
            323 => 
            array (
                'sc_id' => 324,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1012,
                'class_id' => 376,
            ),
            324 => 
            array (
                'sc_id' => 325,
                'date_enrolled' => '2022-07-24',
                'student_id' => 104,
                'class_id' => 287,
            ),
            325 => 
            array (
                'sc_id' => 326,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1101,
                'class_id' => 93,
            ),
            326 => 
            array (
                'sc_id' => 327,
                'date_enrolled' => '2022-06-10',
                'student_id' => 793,
                'class_id' => 78,
            ),
            327 => 
            array (
                'sc_id' => 328,
                'date_enrolled' => '2022-07-11',
                'student_id' => 770,
                'class_id' => 274,
            ),
            328 => 
            array (
                'sc_id' => 329,
                'date_enrolled' => '2022-06-19',
                'student_id' => 567,
                'class_id' => 379,
            ),
            329 => 
            array (
                'sc_id' => 330,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1129,
                'class_id' => 329,
            ),
            330 => 
            array (
                'sc_id' => 331,
                'date_enrolled' => '2022-07-25',
                'student_id' => 583,
                'class_id' => 327,
            ),
            331 => 
            array (
                'sc_id' => 332,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1119,
                'class_id' => 234,
            ),
            332 => 
            array (
                'sc_id' => 333,
                'date_enrolled' => '2022-08-23',
                'student_id' => 512,
                'class_id' => 453,
            ),
            333 => 
            array (
                'sc_id' => 334,
                'date_enrolled' => '2022-07-18',
                'student_id' => 138,
                'class_id' => 83,
            ),
            334 => 
            array (
                'sc_id' => 335,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1367,
                'class_id' => 38,
            ),
            335 => 
            array (
                'sc_id' => 336,
                'date_enrolled' => '2022-06-02',
                'student_id' => 167,
                'class_id' => 283,
            ),
            336 => 
            array (
                'sc_id' => 337,
                'date_enrolled' => '2022-06-11',
                'student_id' => 205,
                'class_id' => 144,
            ),
            337 => 
            array (
                'sc_id' => 338,
                'date_enrolled' => '2022-06-04',
                'student_id' => 476,
                'class_id' => 66,
            ),
            338 => 
            array (
                'sc_id' => 339,
                'date_enrolled' => '2022-06-23',
                'student_id' => 914,
                'class_id' => 264,
            ),
            339 => 
            array (
                'sc_id' => 340,
                'date_enrolled' => '2022-07-04',
                'student_id' => 115,
                'class_id' => 138,
            ),
            340 => 
            array (
                'sc_id' => 341,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1444,
                'class_id' => 150,
            ),
            341 => 
            array (
                'sc_id' => 342,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1664,
                'class_id' => 66,
            ),
            342 => 
            array (
                'sc_id' => 343,
                'date_enrolled' => '2022-08-29',
                'student_id' => 2,
                'class_id' => 97,
            ),
            343 => 
            array (
                'sc_id' => 344,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1044,
                'class_id' => 127,
            ),
            344 => 
            array (
                'sc_id' => 345,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1303,
                'class_id' => 264,
            ),
            345 => 
            array (
                'sc_id' => 346,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1388,
                'class_id' => 307,
            ),
            346 => 
            array (
                'sc_id' => 347,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1240,
                'class_id' => 476,
            ),
            347 => 
            array (
                'sc_id' => 348,
                'date_enrolled' => '2022-07-16',
                'student_id' => 521,
                'class_id' => 352,
            ),
            348 => 
            array (
                'sc_id' => 349,
                'date_enrolled' => '2022-08-12',
                'student_id' => 282,
                'class_id' => 362,
            ),
            349 => 
            array (
                'sc_id' => 350,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1841,
                'class_id' => 338,
            ),
            350 => 
            array (
                'sc_id' => 351,
                'date_enrolled' => '2022-07-31',
                'student_id' => 658,
                'class_id' => 220,
            ),
            351 => 
            array (
                'sc_id' => 352,
                'date_enrolled' => '2022-06-03',
                'student_id' => 206,
                'class_id' => 291,
            ),
            352 => 
            array (
                'sc_id' => 353,
                'date_enrolled' => '2022-08-14',
                'student_id' => 32,
                'class_id' => 73,
            ),
            353 => 
            array (
                'sc_id' => 354,
                'date_enrolled' => '2022-06-21',
                'student_id' => 522,
                'class_id' => 203,
            ),
            354 => 
            array (
                'sc_id' => 355,
                'date_enrolled' => '2022-06-11',
                'student_id' => 916,
                'class_id' => 241,
            ),
            355 => 
            array (
                'sc_id' => 356,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1818,
                'class_id' => 228,
            ),
            356 => 
            array (
                'sc_id' => 357,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1647,
                'class_id' => 66,
            ),
            357 => 
            array (
                'sc_id' => 358,
                'date_enrolled' => '2022-06-17',
                'student_id' => 24,
                'class_id' => 384,
            ),
            358 => 
            array (
                'sc_id' => 359,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1631,
                'class_id' => 159,
            ),
            359 => 
            array (
                'sc_id' => 360,
                'date_enrolled' => '2022-06-14',
                'student_id' => 789,
                'class_id' => 19,
            ),
            360 => 
            array (
                'sc_id' => 361,
                'date_enrolled' => '2022-08-30',
                'student_id' => 170,
                'class_id' => 233,
            ),
            361 => 
            array (
                'sc_id' => 362,
                'date_enrolled' => '2022-07-01',
                'student_id' => 311,
                'class_id' => 450,
            ),
            362 => 
            array (
                'sc_id' => 363,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1046,
                'class_id' => 254,
            ),
            363 => 
            array (
                'sc_id' => 364,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1964,
                'class_id' => 180,
            ),
            364 => 
            array (
                'sc_id' => 365,
                'date_enrolled' => '2022-06-05',
                'student_id' => 65,
                'class_id' => 445,
            ),
            365 => 
            array (
                'sc_id' => 366,
                'date_enrolled' => '2022-06-24',
                'student_id' => 808,
                'class_id' => 283,
            ),
            366 => 
            array (
                'sc_id' => 367,
                'date_enrolled' => '2022-06-07',
                'student_id' => 512,
                'class_id' => 96,
            ),
            367 => 
            array (
                'sc_id' => 368,
                'date_enrolled' => '2022-07-17',
                'student_id' => 389,
                'class_id' => 431,
            ),
            368 => 
            array (
                'sc_id' => 369,
                'date_enrolled' => '2022-08-12',
                'student_id' => 352,
                'class_id' => 347,
            ),
            369 => 
            array (
                'sc_id' => 370,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1947,
                'class_id' => 326,
            ),
            370 => 
            array (
                'sc_id' => 371,
                'date_enrolled' => '2022-06-18',
                'student_id' => 185,
                'class_id' => 113,
            ),
            371 => 
            array (
                'sc_id' => 372,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1086,
                'class_id' => 365,
            ),
            372 => 
            array (
                'sc_id' => 373,
                'date_enrolled' => '2022-08-09',
                'student_id' => 684,
                'class_id' => 328,
            ),
            373 => 
            array (
                'sc_id' => 374,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1175,
                'class_id' => 20,
            ),
            374 => 
            array (
                'sc_id' => 375,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1811,
                'class_id' => 309,
            ),
            375 => 
            array (
                'sc_id' => 376,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1190,
                'class_id' => 105,
            ),
            376 => 
            array (
                'sc_id' => 377,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1093,
                'class_id' => 174,
            ),
            377 => 
            array (
                'sc_id' => 378,
                'date_enrolled' => '2022-07-01',
                'student_id' => 547,
                'class_id' => 227,
            ),
            378 => 
            array (
                'sc_id' => 379,
                'date_enrolled' => '2022-08-04',
                'student_id' => 191,
                'class_id' => 124,
            ),
            379 => 
            array (
                'sc_id' => 380,
                'date_enrolled' => '2022-08-14',
                'student_id' => 344,
                'class_id' => 294,
            ),
            380 => 
            array (
                'sc_id' => 381,
                'date_enrolled' => '2022-06-21',
                'student_id' => 374,
                'class_id' => 320,
            ),
            381 => 
            array (
                'sc_id' => 382,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1243,
                'class_id' => 364,
            ),
            382 => 
            array (
                'sc_id' => 383,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1399,
                'class_id' => 26,
            ),
            383 => 
            array (
                'sc_id' => 384,
                'date_enrolled' => '2022-08-09',
                'student_id' => 225,
                'class_id' => 436,
            ),
            384 => 
            array (
                'sc_id' => 385,
                'date_enrolled' => '2022-08-21',
                'student_id' => 750,
                'class_id' => 267,
            ),
            385 => 
            array (
                'sc_id' => 386,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1109,
                'class_id' => 21,
            ),
            386 => 
            array (
                'sc_id' => 387,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1908,
                'class_id' => 489,
            ),
            387 => 
            array (
                'sc_id' => 388,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1123,
                'class_id' => 453,
            ),
            388 => 
            array (
                'sc_id' => 389,
                'date_enrolled' => '2022-06-08',
                'student_id' => 580,
                'class_id' => 205,
            ),
            389 => 
            array (
                'sc_id' => 390,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1728,
                'class_id' => 383,
            ),
            390 => 
            array (
                'sc_id' => 391,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1735,
                'class_id' => 164,
            ),
            391 => 
            array (
                'sc_id' => 392,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1022,
                'class_id' => 481,
            ),
            392 => 
            array (
                'sc_id' => 393,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1654,
                'class_id' => 190,
            ),
            393 => 
            array (
                'sc_id' => 394,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1982,
                'class_id' => 82,
            ),
            394 => 
            array (
                'sc_id' => 395,
                'date_enrolled' => '2022-06-21',
                'student_id' => 217,
                'class_id' => 399,
            ),
            395 => 
            array (
                'sc_id' => 396,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1359,
                'class_id' => 237,
            ),
            396 => 
            array (
                'sc_id' => 397,
                'date_enrolled' => '2022-06-17',
                'student_id' => 307,
                'class_id' => 150,
            ),
            397 => 
            array (
                'sc_id' => 398,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1486,
                'class_id' => 211,
            ),
            398 => 
            array (
                'sc_id' => 399,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1245,
                'class_id' => 434,
            ),
            399 => 
            array (
                'sc_id' => 400,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1220,
                'class_id' => 464,
            ),
            400 => 
            array (
                'sc_id' => 401,
                'date_enrolled' => '2022-08-12',
                'student_id' => 640,
                'class_id' => 158,
            ),
            401 => 
            array (
                'sc_id' => 402,
                'date_enrolled' => '2022-07-30',
                'student_id' => 779,
                'class_id' => 441,
            ),
            402 => 
            array (
                'sc_id' => 403,
                'date_enrolled' => '2022-08-23',
                'student_id' => 110,
                'class_id' => 154,
            ),
            403 => 
            array (
                'sc_id' => 404,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1028,
                'class_id' => 38,
            ),
            404 => 
            array (
                'sc_id' => 405,
                'date_enrolled' => '2022-08-05',
                'student_id' => 866,
                'class_id' => 201,
            ),
            405 => 
            array (
                'sc_id' => 406,
                'date_enrolled' => '2022-07-05',
                'student_id' => 137,
                'class_id' => 133,
            ),
            406 => 
            array (
                'sc_id' => 407,
                'date_enrolled' => '2022-06-08',
                'student_id' => 22,
                'class_id' => 495,
            ),
            407 => 
            array (
                'sc_id' => 408,
                'date_enrolled' => '2022-06-16',
                'student_id' => 512,
                'class_id' => 430,
            ),
            408 => 
            array (
                'sc_id' => 409,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1513,
                'class_id' => 482,
            ),
            409 => 
            array (
                'sc_id' => 410,
                'date_enrolled' => '2022-06-28',
                'student_id' => 691,
                'class_id' => 456,
            ),
            410 => 
            array (
                'sc_id' => 411,
                'date_enrolled' => '2022-07-11',
                'student_id' => 663,
                'class_id' => 117,
            ),
            411 => 
            array (
                'sc_id' => 412,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1803,
                'class_id' => 130,
            ),
            412 => 
            array (
                'sc_id' => 413,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1161,
                'class_id' => 52,
            ),
            413 => 
            array (
                'sc_id' => 414,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1340,
                'class_id' => 452,
            ),
            414 => 
            array (
                'sc_id' => 415,
                'date_enrolled' => '2022-07-22',
                'student_id' => 743,
                'class_id' => 374,
            ),
            415 => 
            array (
                'sc_id' => 416,
                'date_enrolled' => '2022-07-30',
                'student_id' => 263,
                'class_id' => 434,
            ),
            416 => 
            array (
                'sc_id' => 417,
                'date_enrolled' => '2022-07-13',
                'student_id' => 576,
                'class_id' => 260,
            ),
            417 => 
            array (
                'sc_id' => 418,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1844,
                'class_id' => 313,
            ),
            418 => 
            array (
                'sc_id' => 419,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1116,
                'class_id' => 233,
            ),
            419 => 
            array (
                'sc_id' => 420,
                'date_enrolled' => '2022-08-16',
                'student_id' => 129,
                'class_id' => 31,
            ),
            420 => 
            array (
                'sc_id' => 421,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1375,
                'class_id' => 400,
            ),
            421 => 
            array (
                'sc_id' => 422,
                'date_enrolled' => '2022-07-19',
                'student_id' => 481,
                'class_id' => 5,
            ),
            422 => 
            array (
                'sc_id' => 423,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1500,
                'class_id' => 10,
            ),
            423 => 
            array (
                'sc_id' => 424,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1324,
                'class_id' => 474,
            ),
            424 => 
            array (
                'sc_id' => 425,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1701,
                'class_id' => 90,
            ),
            425 => 
            array (
                'sc_id' => 426,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1325,
                'class_id' => 190,
            ),
            426 => 
            array (
                'sc_id' => 427,
                'date_enrolled' => '2022-07-15',
                'student_id' => 611,
                'class_id' => 265,
            ),
            427 => 
            array (
                'sc_id' => 428,
                'date_enrolled' => '2022-08-29',
                'student_id' => 712,
                'class_id' => 101,
            ),
            428 => 
            array (
                'sc_id' => 429,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1980,
                'class_id' => 176,
            ),
            429 => 
            array (
                'sc_id' => 430,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1653,
                'class_id' => 96,
            ),
            430 => 
            array (
                'sc_id' => 431,
                'date_enrolled' => '2022-06-19',
                'student_id' => 285,
                'class_id' => 154,
            ),
            431 => 
            array (
                'sc_id' => 432,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1873,
                'class_id' => 80,
            ),
            432 => 
            array (
                'sc_id' => 433,
                'date_enrolled' => '2022-06-16',
                'student_id' => 419,
                'class_id' => 177,
            ),
            433 => 
            array (
                'sc_id' => 434,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1458,
                'class_id' => 95,
            ),
            434 => 
            array (
                'sc_id' => 435,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1558,
                'class_id' => 17,
            ),
            435 => 
            array (
                'sc_id' => 436,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1312,
                'class_id' => 471,
            ),
            436 => 
            array (
                'sc_id' => 437,
                'date_enrolled' => '2022-06-28',
                'student_id' => 677,
                'class_id' => 172,
            ),
            437 => 
            array (
                'sc_id' => 438,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1586,
                'class_id' => 458,
            ),
            438 => 
            array (
                'sc_id' => 439,
                'date_enrolled' => '2022-07-18',
                'student_id' => 390,
                'class_id' => 487,
            ),
            439 => 
            array (
                'sc_id' => 440,
                'date_enrolled' => '2022-06-13',
                'student_id' => 755,
                'class_id' => 337,
            ),
            440 => 
            array (
                'sc_id' => 441,
                'date_enrolled' => '2022-08-14',
                'student_id' => 456,
                'class_id' => 192,
            ),
            441 => 
            array (
                'sc_id' => 442,
                'date_enrolled' => '2022-07-30',
                'student_id' => 539,
                'class_id' => 129,
            ),
            442 => 
            array (
                'sc_id' => 443,
                'date_enrolled' => '2022-06-23',
                'student_id' => 809,
                'class_id' => 180,
            ),
            443 => 
            array (
                'sc_id' => 444,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1055,
                'class_id' => 316,
            ),
            444 => 
            array (
                'sc_id' => 445,
                'date_enrolled' => '2022-06-12',
                'student_id' => 848,
                'class_id' => 129,
            ),
            445 => 
            array (
                'sc_id' => 446,
                'date_enrolled' => '2022-08-21',
                'student_id' => 850,
                'class_id' => 385,
            ),
            446 => 
            array (
                'sc_id' => 447,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1584,
                'class_id' => 42,
            ),
            447 => 
            array (
                'sc_id' => 448,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1727,
                'class_id' => 422,
            ),
            448 => 
            array (
                'sc_id' => 449,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1808,
                'class_id' => 203,
            ),
            449 => 
            array (
                'sc_id' => 450,
                'date_enrolled' => '2022-06-04',
                'student_id' => 637,
                'class_id' => 411,
            ),
            450 => 
            array (
                'sc_id' => 451,
                'date_enrolled' => '2022-06-03',
                'student_id' => 13,
                'class_id' => 55,
            ),
            451 => 
            array (
                'sc_id' => 452,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1599,
                'class_id' => 121,
            ),
            452 => 
            array (
                'sc_id' => 453,
                'date_enrolled' => '2022-07-12',
                'student_id' => 583,
                'class_id' => 195,
            ),
            453 => 
            array (
                'sc_id' => 454,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1489,
                'class_id' => 315,
            ),
            454 => 
            array (
                'sc_id' => 455,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1111,
                'class_id' => 275,
            ),
            455 => 
            array (
                'sc_id' => 456,
                'date_enrolled' => '2022-08-20',
                'student_id' => 521,
                'class_id' => 453,
            ),
            456 => 
            array (
                'sc_id' => 457,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1790,
                'class_id' => 190,
            ),
            457 => 
            array (
                'sc_id' => 458,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1589,
                'class_id' => 164,
            ),
            458 => 
            array (
                'sc_id' => 459,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1447,
                'class_id' => 269,
            ),
            459 => 
            array (
                'sc_id' => 460,
                'date_enrolled' => '2022-06-26',
                'student_id' => 759,
                'class_id' => 211,
            ),
            460 => 
            array (
                'sc_id' => 461,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1077,
                'class_id' => 344,
            ),
            461 => 
            array (
                'sc_id' => 462,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1146,
                'class_id' => 198,
            ),
            462 => 
            array (
                'sc_id' => 463,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1884,
                'class_id' => 467,
            ),
            463 => 
            array (
                'sc_id' => 464,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1354,
                'class_id' => 459,
            ),
            464 => 
            array (
                'sc_id' => 465,
                'date_enrolled' => '2022-06-30',
                'student_id' => 249,
                'class_id' => 181,
            ),
            465 => 
            array (
                'sc_id' => 466,
                'date_enrolled' => '2022-06-06',
                'student_id' => 789,
                'class_id' => 113,
            ),
            466 => 
            array (
                'sc_id' => 467,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1163,
                'class_id' => 233,
            ),
            467 => 
            array (
                'sc_id' => 468,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1109,
                'class_id' => 64,
            ),
            468 => 
            array (
                'sc_id' => 469,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1166,
                'class_id' => 97,
            ),
            469 => 
            array (
                'sc_id' => 470,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1769,
                'class_id' => 389,
            ),
            470 => 
            array (
                'sc_id' => 471,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1307,
                'class_id' => 121,
            ),
            471 => 
            array (
                'sc_id' => 472,
                'date_enrolled' => '2022-06-09',
                'student_id' => 361,
                'class_id' => 55,
            ),
            472 => 
            array (
                'sc_id' => 473,
                'date_enrolled' => '2022-06-19',
                'student_id' => 991,
                'class_id' => 376,
            ),
            473 => 
            array (
                'sc_id' => 474,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1754,
                'class_id' => 419,
            ),
            474 => 
            array (
                'sc_id' => 475,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1764,
                'class_id' => 320,
            ),
            475 => 
            array (
                'sc_id' => 476,
                'date_enrolled' => '2022-08-26',
                'student_id' => 994,
                'class_id' => 402,
            ),
            476 => 
            array (
                'sc_id' => 477,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1399,
                'class_id' => 119,
            ),
            477 => 
            array (
                'sc_id' => 478,
                'date_enrolled' => '2022-07-06',
                'student_id' => 875,
                'class_id' => 452,
            ),
            478 => 
            array (
                'sc_id' => 479,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1002,
                'class_id' => 439,
            ),
            479 => 
            array (
                'sc_id' => 480,
                'date_enrolled' => '2022-07-16',
                'student_id' => 343,
                'class_id' => 210,
            ),
            480 => 
            array (
                'sc_id' => 481,
                'date_enrolled' => '2022-07-07',
                'student_id' => 944,
                'class_id' => 215,
            ),
            481 => 
            array (
                'sc_id' => 482,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1385,
                'class_id' => 315,
            ),
            482 => 
            array (
                'sc_id' => 483,
                'date_enrolled' => '2022-07-03',
                'student_id' => 35,
                'class_id' => 128,
            ),
            483 => 
            array (
                'sc_id' => 484,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1500,
                'class_id' => 200,
            ),
            484 => 
            array (
                'sc_id' => 485,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1093,
                'class_id' => 352,
            ),
            485 => 
            array (
                'sc_id' => 486,
                'date_enrolled' => '2022-07-14',
                'student_id' => 650,
                'class_id' => 445,
            ),
            486 => 
            array (
                'sc_id' => 487,
                'date_enrolled' => '2022-08-15',
                'student_id' => 676,
                'class_id' => 400,
            ),
            487 => 
            array (
                'sc_id' => 488,
                'date_enrolled' => '2022-06-15',
                'student_id' => 782,
                'class_id' => 252,
            ),
            488 => 
            array (
                'sc_id' => 489,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1617,
                'class_id' => 40,
            ),
            489 => 
            array (
                'sc_id' => 490,
                'date_enrolled' => '2022-08-29',
                'student_id' => 850,
                'class_id' => 305,
            ),
            490 => 
            array (
                'sc_id' => 491,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1985,
                'class_id' => 74,
            ),
            491 => 
            array (
                'sc_id' => 492,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1304,
                'class_id' => 314,
            ),
            492 => 
            array (
                'sc_id' => 493,
                'date_enrolled' => '2022-08-18',
                'student_id' => 419,
                'class_id' => 155,
            ),
            493 => 
            array (
                'sc_id' => 494,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1914,
                'class_id' => 258,
            ),
            494 => 
            array (
                'sc_id' => 495,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1709,
                'class_id' => 476,
            ),
            495 => 
            array (
                'sc_id' => 496,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1484,
                'class_id' => 266,
            ),
            496 => 
            array (
                'sc_id' => 497,
                'date_enrolled' => '2022-07-17',
                'student_id' => 76,
                'class_id' => 281,
            ),
            497 => 
            array (
                'sc_id' => 498,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1691,
                'class_id' => 355,
            ),
            498 => 
            array (
                'sc_id' => 499,
                'date_enrolled' => '2022-07-23',
                'student_id' => 860,
                'class_id' => 152,
            ),
            499 => 
            array (
                'sc_id' => 500,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1815,
                'class_id' => 386,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 501,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1690,
                'class_id' => 484,
            ),
            1 => 
            array (
                'sc_id' => 502,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1692,
                'class_id' => 14,
            ),
            2 => 
            array (
                'sc_id' => 503,
                'date_enrolled' => '2022-07-16',
                'student_id' => 956,
                'class_id' => 338,
            ),
            3 => 
            array (
                'sc_id' => 504,
                'date_enrolled' => '2022-07-28',
                'student_id' => 537,
                'class_id' => 327,
            ),
            4 => 
            array (
                'sc_id' => 505,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1072,
                'class_id' => 497,
            ),
            5 => 
            array (
                'sc_id' => 506,
                'date_enrolled' => '2022-06-28',
                'student_id' => 457,
                'class_id' => 84,
            ),
            6 => 
            array (
                'sc_id' => 507,
                'date_enrolled' => '2022-06-11',
                'student_id' => 357,
                'class_id' => 18,
            ),
            7 => 
            array (
                'sc_id' => 508,
                'date_enrolled' => '2022-06-03',
                'student_id' => 966,
                'class_id' => 393,
            ),
            8 => 
            array (
                'sc_id' => 509,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1331,
                'class_id' => 118,
            ),
            9 => 
            array (
                'sc_id' => 510,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1203,
                'class_id' => 75,
            ),
            10 => 
            array (
                'sc_id' => 511,
                'date_enrolled' => '2022-08-12',
                'student_id' => 911,
                'class_id' => 290,
            ),
            11 => 
            array (
                'sc_id' => 512,
                'date_enrolled' => '2022-07-23',
                'student_id' => 608,
                'class_id' => 180,
            ),
            12 => 
            array (
                'sc_id' => 513,
                'date_enrolled' => '2022-07-24',
                'student_id' => 30,
                'class_id' => 209,
            ),
            13 => 
            array (
                'sc_id' => 514,
                'date_enrolled' => '2022-06-13',
                'student_id' => 127,
                'class_id' => 167,
            ),
            14 => 
            array (
                'sc_id' => 515,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1855,
                'class_id' => 56,
            ),
            15 => 
            array (
                'sc_id' => 516,
                'date_enrolled' => '2022-08-17',
                'student_id' => 770,
                'class_id' => 154,
            ),
            16 => 
            array (
                'sc_id' => 517,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1684,
                'class_id' => 376,
            ),
            17 => 
            array (
                'sc_id' => 518,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1868,
                'class_id' => 260,
            ),
            18 => 
            array (
                'sc_id' => 519,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1739,
                'class_id' => 451,
            ),
            19 => 
            array (
                'sc_id' => 520,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1523,
                'class_id' => 223,
            ),
            20 => 
            array (
                'sc_id' => 521,
                'date_enrolled' => '2022-06-25',
                'student_id' => 102,
                'class_id' => 121,
            ),
            21 => 
            array (
                'sc_id' => 522,
                'date_enrolled' => '2022-07-19',
                'student_id' => 928,
                'class_id' => 367,
            ),
            22 => 
            array (
                'sc_id' => 523,
                'date_enrolled' => '2022-08-05',
                'student_id' => 965,
                'class_id' => 401,
            ),
            23 => 
            array (
                'sc_id' => 524,
                'date_enrolled' => '2022-06-11',
                'student_id' => 374,
                'class_id' => 164,
            ),
            24 => 
            array (
                'sc_id' => 525,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1642,
                'class_id' => 430,
            ),
            25 => 
            array (
                'sc_id' => 526,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1593,
                'class_id' => 450,
            ),
            26 => 
            array (
                'sc_id' => 527,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1145,
                'class_id' => 446,
            ),
            27 => 
            array (
                'sc_id' => 528,
                'date_enrolled' => '2022-07-13',
                'student_id' => 627,
                'class_id' => 316,
            ),
            28 => 
            array (
                'sc_id' => 529,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1892,
                'class_id' => 426,
            ),
            29 => 
            array (
                'sc_id' => 530,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1638,
                'class_id' => 363,
            ),
            30 => 
            array (
                'sc_id' => 531,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1880,
                'class_id' => 222,
            ),
            31 => 
            array (
                'sc_id' => 532,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1432,
                'class_id' => 411,
            ),
            32 => 
            array (
                'sc_id' => 533,
                'date_enrolled' => '2022-06-22',
                'student_id' => 585,
                'class_id' => 126,
            ),
            33 => 
            array (
                'sc_id' => 534,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1901,
                'class_id' => 385,
            ),
            34 => 
            array (
                'sc_id' => 535,
                'date_enrolled' => '2022-06-06',
                'student_id' => 333,
                'class_id' => 223,
            ),
            35 => 
            array (
                'sc_id' => 536,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1296,
                'class_id' => 309,
            ),
            36 => 
            array (
                'sc_id' => 537,
                'date_enrolled' => '2022-06-12',
                'student_id' => 294,
                'class_id' => 46,
            ),
            37 => 
            array (
                'sc_id' => 538,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1926,
                'class_id' => 408,
            ),
            38 => 
            array (
                'sc_id' => 539,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1416,
                'class_id' => 224,
            ),
            39 => 
            array (
                'sc_id' => 540,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1990,
                'class_id' => 272,
            ),
            40 => 
            array (
                'sc_id' => 541,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1448,
                'class_id' => 284,
            ),
            41 => 
            array (
                'sc_id' => 542,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1645,
                'class_id' => 455,
            ),
            42 => 
            array (
                'sc_id' => 543,
                'date_enrolled' => '2022-06-17',
                'student_id' => 13,
                'class_id' => 472,
            ),
            43 => 
            array (
                'sc_id' => 544,
                'date_enrolled' => '2022-06-30',
                'student_id' => 867,
                'class_id' => 12,
            ),
            44 => 
            array (
                'sc_id' => 545,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1701,
                'class_id' => 348,
            ),
            45 => 
            array (
                'sc_id' => 546,
                'date_enrolled' => '2022-08-18',
                'student_id' => 230,
                'class_id' => 453,
            ),
            46 => 
            array (
                'sc_id' => 547,
                'date_enrolled' => '2022-08-16',
                'student_id' => 282,
                'class_id' => 330,
            ),
            47 => 
            array (
                'sc_id' => 548,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1482,
                'class_id' => 447,
            ),
            48 => 
            array (
                'sc_id' => 549,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1002,
                'class_id' => 370,
            ),
            49 => 
            array (
                'sc_id' => 550,
                'date_enrolled' => '2022-08-26',
                'student_id' => 422,
                'class_id' => 157,
            ),
            50 => 
            array (
                'sc_id' => 551,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1192,
                'class_id' => 339,
            ),
            51 => 
            array (
                'sc_id' => 552,
                'date_enrolled' => '2022-08-25',
                'student_id' => 508,
                'class_id' => 107,
            ),
            52 => 
            array (
                'sc_id' => 553,
                'date_enrolled' => '2022-08-09',
                'student_id' => 964,
                'class_id' => 243,
            ),
            53 => 
            array (
                'sc_id' => 554,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1885,
                'class_id' => 114,
            ),
            54 => 
            array (
                'sc_id' => 555,
                'date_enrolled' => '2022-08-31',
                'student_id' => 981,
                'class_id' => 458,
            ),
            55 => 
            array (
                'sc_id' => 556,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1055,
                'class_id' => 190,
            ),
            56 => 
            array (
                'sc_id' => 557,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1428,
                'class_id' => 437,
            ),
            57 => 
            array (
                'sc_id' => 558,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1571,
                'class_id' => 207,
            ),
            58 => 
            array (
                'sc_id' => 559,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1141,
                'class_id' => 476,
            ),
            59 => 
            array (
                'sc_id' => 560,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1712,
                'class_id' => 399,
            ),
            60 => 
            array (
                'sc_id' => 561,
                'date_enrolled' => '2022-06-10',
                'student_id' => 48,
                'class_id' => 121,
            ),
            61 => 
            array (
                'sc_id' => 562,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1041,
                'class_id' => 478,
            ),
            62 => 
            array (
                'sc_id' => 563,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1971,
                'class_id' => 5,
            ),
            63 => 
            array (
                'sc_id' => 564,
                'date_enrolled' => '2022-08-24',
                'student_id' => 785,
                'class_id' => 4,
            ),
            64 => 
            array (
                'sc_id' => 565,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1620,
                'class_id' => 491,
            ),
            65 => 
            array (
                'sc_id' => 566,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1771,
                'class_id' => 192,
            ),
            66 => 
            array (
                'sc_id' => 567,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1250,
                'class_id' => 432,
            ),
            67 => 
            array (
                'sc_id' => 568,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1118,
                'class_id' => 420,
            ),
            68 => 
            array (
                'sc_id' => 569,
                'date_enrolled' => '2022-06-16',
                'student_id' => 429,
                'class_id' => 282,
            ),
            69 => 
            array (
                'sc_id' => 570,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1103,
                'class_id' => 216,
            ),
            70 => 
            array (
                'sc_id' => 571,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1039,
                'class_id' => 495,
            ),
            71 => 
            array (
                'sc_id' => 572,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1443,
                'class_id' => 428,
            ),
            72 => 
            array (
                'sc_id' => 573,
                'date_enrolled' => '2022-08-02',
                'student_id' => 771,
                'class_id' => 458,
            ),
            73 => 
            array (
                'sc_id' => 574,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1367,
                'class_id' => 165,
            ),
            74 => 
            array (
                'sc_id' => 575,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1556,
                'class_id' => 384,
            ),
            75 => 
            array (
                'sc_id' => 576,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1013,
                'class_id' => 437,
            ),
            76 => 
            array (
                'sc_id' => 577,
                'date_enrolled' => '2022-06-07',
                'student_id' => 936,
                'class_id' => 43,
            ),
            77 => 
            array (
                'sc_id' => 578,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1964,
                'class_id' => 245,
            ),
            78 => 
            array (
                'sc_id' => 579,
                'date_enrolled' => '2022-07-08',
                'student_id' => 509,
                'class_id' => 7,
            ),
            79 => 
            array (
                'sc_id' => 580,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1331,
                'class_id' => 406,
            ),
            80 => 
            array (
                'sc_id' => 581,
                'date_enrolled' => '2022-07-24',
                'student_id' => 50,
                'class_id' => 306,
            ),
            81 => 
            array (
                'sc_id' => 582,
                'date_enrolled' => '2022-07-07',
                'student_id' => 162,
                'class_id' => 205,
            ),
            82 => 
            array (
                'sc_id' => 583,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1518,
                'class_id' => 331,
            ),
            83 => 
            array (
                'sc_id' => 584,
                'date_enrolled' => '2022-07-21',
                'student_id' => 813,
                'class_id' => 279,
            ),
            84 => 
            array (
                'sc_id' => 585,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1104,
                'class_id' => 379,
            ),
            85 => 
            array (
                'sc_id' => 586,
                'date_enrolled' => '2022-07-01',
                'student_id' => 525,
                'class_id' => 56,
            ),
            86 => 
            array (
                'sc_id' => 587,
                'date_enrolled' => '2022-06-01',
                'student_id' => 425,
                'class_id' => 51,
            ),
            87 => 
            array (
                'sc_id' => 588,
                'date_enrolled' => '2022-07-04',
                'student_id' => 101,
                'class_id' => 344,
            ),
            88 => 
            array (
                'sc_id' => 589,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1193,
                'class_id' => 7,
            ),
            89 => 
            array (
                'sc_id' => 590,
                'date_enrolled' => '2022-07-18',
                'student_id' => 287,
                'class_id' => 371,
            ),
            90 => 
            array (
                'sc_id' => 591,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1105,
                'class_id' => 340,
            ),
            91 => 
            array (
                'sc_id' => 592,
                'date_enrolled' => '2022-06-16',
                'student_id' => 991,
                'class_id' => 422,
            ),
            92 => 
            array (
                'sc_id' => 593,
                'date_enrolled' => '2022-07-26',
                'student_id' => 819,
                'class_id' => 192,
            ),
            93 => 
            array (
                'sc_id' => 594,
                'date_enrolled' => '2022-07-07',
                'student_id' => 851,
                'class_id' => 281,
            ),
            94 => 
            array (
                'sc_id' => 595,
                'date_enrolled' => '2022-08-10',
                'student_id' => 322,
                'class_id' => 470,
            ),
            95 => 
            array (
                'sc_id' => 596,
                'date_enrolled' => '2022-07-27',
                'student_id' => 973,
                'class_id' => 39,
            ),
            96 => 
            array (
                'sc_id' => 597,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1109,
                'class_id' => 177,
            ),
            97 => 
            array (
                'sc_id' => 598,
                'date_enrolled' => '2022-07-26',
                'student_id' => 408,
                'class_id' => 178,
            ),
            98 => 
            array (
                'sc_id' => 599,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1804,
                'class_id' => 469,
            ),
            99 => 
            array (
                'sc_id' => 600,
                'date_enrolled' => '2022-06-27',
                'student_id' => 848,
                'class_id' => 269,
            ),
            100 => 
            array (
                'sc_id' => 601,
                'date_enrolled' => '2022-06-13',
                'student_id' => 223,
                'class_id' => 230,
            ),
            101 => 
            array (
                'sc_id' => 602,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1082,
                'class_id' => 289,
            ),
            102 => 
            array (
                'sc_id' => 603,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1529,
                'class_id' => 397,
            ),
            103 => 
            array (
                'sc_id' => 604,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1187,
                'class_id' => 380,
            ),
            104 => 
            array (
                'sc_id' => 605,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1805,
                'class_id' => 241,
            ),
            105 => 
            array (
                'sc_id' => 606,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1443,
                'class_id' => 102,
            ),
            106 => 
            array (
                'sc_id' => 607,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1092,
                'class_id' => 274,
            ),
            107 => 
            array (
                'sc_id' => 608,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1091,
                'class_id' => 277,
            ),
            108 => 
            array (
                'sc_id' => 609,
                'date_enrolled' => '2022-06-05',
                'student_id' => 927,
                'class_id' => 195,
            ),
            109 => 
            array (
                'sc_id' => 610,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1047,
                'class_id' => 253,
            ),
            110 => 
            array (
                'sc_id' => 611,
                'date_enrolled' => '2022-08-15',
                'student_id' => 2,
                'class_id' => 447,
            ),
            111 => 
            array (
                'sc_id' => 612,
                'date_enrolled' => '2022-08-08',
                'student_id' => 781,
                'class_id' => 17,
            ),
            112 => 
            array (
                'sc_id' => 613,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1162,
                'class_id' => 489,
            ),
            113 => 
            array (
                'sc_id' => 614,
                'date_enrolled' => '2022-08-13',
                'student_id' => 877,
                'class_id' => 266,
            ),
            114 => 
            array (
                'sc_id' => 615,
                'date_enrolled' => '2022-08-11',
                'student_id' => 30,
                'class_id' => 45,
            ),
            115 => 
            array (
                'sc_id' => 616,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1341,
                'class_id' => 456,
            ),
            116 => 
            array (
                'sc_id' => 617,
                'date_enrolled' => '2022-08-17',
                'student_id' => 874,
                'class_id' => 218,
            ),
            117 => 
            array (
                'sc_id' => 618,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1076,
                'class_id' => 150,
            ),
            118 => 
            array (
                'sc_id' => 619,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1111,
                'class_id' => 322,
            ),
            119 => 
            array (
                'sc_id' => 620,
                'date_enrolled' => '2022-07-16',
                'student_id' => 252,
                'class_id' => 193,
            ),
            120 => 
            array (
                'sc_id' => 621,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1828,
                'class_id' => 269,
            ),
            121 => 
            array (
                'sc_id' => 622,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1720,
                'class_id' => 392,
            ),
            122 => 
            array (
                'sc_id' => 623,
                'date_enrolled' => '2022-08-08',
                'student_id' => 773,
                'class_id' => 48,
            ),
            123 => 
            array (
                'sc_id' => 624,
                'date_enrolled' => '2022-06-19',
                'student_id' => 728,
                'class_id' => 64,
            ),
            124 => 
            array (
                'sc_id' => 625,
                'date_enrolled' => '2022-08-09',
                'student_id' => 850,
                'class_id' => 294,
            ),
            125 => 
            array (
                'sc_id' => 626,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1617,
                'class_id' => 3,
            ),
            126 => 
            array (
                'sc_id' => 627,
                'date_enrolled' => '2022-06-06',
                'student_id' => 23,
                'class_id' => 291,
            ),
            127 => 
            array (
                'sc_id' => 628,
                'date_enrolled' => '2022-08-27',
                'student_id' => 733,
                'class_id' => 246,
            ),
            128 => 
            array (
                'sc_id' => 629,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1622,
                'class_id' => 143,
            ),
            129 => 
            array (
                'sc_id' => 630,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1404,
                'class_id' => 495,
            ),
            130 => 
            array (
                'sc_id' => 631,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1224,
                'class_id' => 371,
            ),
            131 => 
            array (
                'sc_id' => 632,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1259,
                'class_id' => 375,
            ),
            132 => 
            array (
                'sc_id' => 633,
                'date_enrolled' => '2022-07-24',
                'student_id' => 742,
                'class_id' => 55,
            ),
            133 => 
            array (
                'sc_id' => 634,
                'date_enrolled' => '2022-06-08',
                'student_id' => 557,
                'class_id' => 458,
            ),
            134 => 
            array (
                'sc_id' => 635,
                'date_enrolled' => '2022-06-14',
                'student_id' => 796,
                'class_id' => 94,
            ),
            135 => 
            array (
                'sc_id' => 636,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1678,
                'class_id' => 291,
            ),
            136 => 
            array (
                'sc_id' => 637,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1892,
                'class_id' => 128,
            ),
            137 => 
            array (
                'sc_id' => 638,
                'date_enrolled' => '2022-07-25',
                'student_id' => 659,
                'class_id' => 475,
            ),
            138 => 
            array (
                'sc_id' => 639,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1272,
                'class_id' => 414,
            ),
            139 => 
            array (
                'sc_id' => 640,
                'date_enrolled' => '2022-08-23',
                'student_id' => 224,
                'class_id' => 279,
            ),
            140 => 
            array (
                'sc_id' => 641,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1490,
                'class_id' => 454,
            ),
            141 => 
            array (
                'sc_id' => 642,
                'date_enrolled' => '2022-07-30',
                'student_id' => 873,
                'class_id' => 485,
            ),
            142 => 
            array (
                'sc_id' => 643,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1543,
                'class_id' => 198,
            ),
            143 => 
            array (
                'sc_id' => 644,
                'date_enrolled' => '2022-08-06',
                'student_id' => 468,
                'class_id' => 151,
            ),
            144 => 
            array (
                'sc_id' => 645,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1187,
                'class_id' => 331,
            ),
            145 => 
            array (
                'sc_id' => 646,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1600,
                'class_id' => 197,
            ),
            146 => 
            array (
                'sc_id' => 647,
                'date_enrolled' => '2022-06-12',
                'student_id' => 916,
                'class_id' => 302,
            ),
            147 => 
            array (
                'sc_id' => 648,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1278,
                'class_id' => 52,
            ),
            148 => 
            array (
                'sc_id' => 649,
                'date_enrolled' => '2022-07-09',
                'student_id' => 711,
                'class_id' => 54,
            ),
            149 => 
            array (
                'sc_id' => 650,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1125,
                'class_id' => 323,
            ),
            150 => 
            array (
                'sc_id' => 651,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1081,
                'class_id' => 407,
            ),
            151 => 
            array (
                'sc_id' => 652,
                'date_enrolled' => '2022-08-04',
                'student_id' => 634,
                'class_id' => 341,
            ),
            152 => 
            array (
                'sc_id' => 653,
                'date_enrolled' => '2022-06-18',
                'student_id' => 966,
                'class_id' => 271,
            ),
            153 => 
            array (
                'sc_id' => 654,
                'date_enrolled' => '2022-07-22',
                'student_id' => 98,
                'class_id' => 94,
            ),
            154 => 
            array (
                'sc_id' => 655,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1089,
                'class_id' => 282,
            ),
            155 => 
            array (
                'sc_id' => 656,
                'date_enrolled' => '2022-07-23',
                'student_id' => 278,
                'class_id' => 18,
            ),
            156 => 
            array (
                'sc_id' => 657,
                'date_enrolled' => '2022-07-22',
                'student_id' => 888,
                'class_id' => 457,
            ),
            157 => 
            array (
                'sc_id' => 658,
                'date_enrolled' => '2022-06-20',
                'student_id' => 331,
                'class_id' => 424,
            ),
            158 => 
            array (
                'sc_id' => 659,
                'date_enrolled' => '2022-08-25',
                'student_id' => 597,
                'class_id' => 122,
            ),
            159 => 
            array (
                'sc_id' => 660,
                'date_enrolled' => '2022-07-01',
                'student_id' => 905,
                'class_id' => 90,
            ),
            160 => 
            array (
                'sc_id' => 661,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1660,
                'class_id' => 369,
            ),
            161 => 
            array (
                'sc_id' => 662,
                'date_enrolled' => '2022-08-04',
                'student_id' => 29,
                'class_id' => 176,
            ),
            162 => 
            array (
                'sc_id' => 663,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1570,
                'class_id' => 477,
            ),
            163 => 
            array (
                'sc_id' => 664,
                'date_enrolled' => '2022-07-18',
                'student_id' => 342,
                'class_id' => 372,
            ),
            164 => 
            array (
                'sc_id' => 665,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1154,
                'class_id' => 53,
            ),
            165 => 
            array (
                'sc_id' => 666,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1402,
                'class_id' => 387,
            ),
            166 => 
            array (
                'sc_id' => 667,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1732,
                'class_id' => 196,
            ),
            167 => 
            array (
                'sc_id' => 668,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1616,
                'class_id' => 73,
            ),
            168 => 
            array (
                'sc_id' => 669,
                'date_enrolled' => '2022-07-10',
                'student_id' => 490,
                'class_id' => 274,
            ),
            169 => 
            array (
                'sc_id' => 670,
                'date_enrolled' => '2022-06-19',
                'student_id' => 512,
                'class_id' => 102,
            ),
            170 => 
            array (
                'sc_id' => 671,
                'date_enrolled' => '2022-06-15',
                'student_id' => 444,
                'class_id' => 239,
            ),
            171 => 
            array (
                'sc_id' => 672,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1963,
                'class_id' => 28,
            ),
            172 => 
            array (
                'sc_id' => 673,
                'date_enrolled' => '2022-06-01',
                'student_id' => 774,
                'class_id' => 478,
            ),
            173 => 
            array (
                'sc_id' => 674,
                'date_enrolled' => '2022-07-11',
                'student_id' => 300,
                'class_id' => 476,
            ),
            174 => 
            array (
                'sc_id' => 675,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1196,
                'class_id' => 163,
            ),
            175 => 
            array (
                'sc_id' => 676,
                'date_enrolled' => '2022-08-22',
                'student_id' => 727,
                'class_id' => 380,
            ),
            176 => 
            array (
                'sc_id' => 677,
                'date_enrolled' => '2022-08-26',
                'student_id' => 260,
                'class_id' => 311,
            ),
            177 => 
            array (
                'sc_id' => 678,
                'date_enrolled' => '2022-07-23',
                'student_id' => 741,
                'class_id' => 396,
            ),
            178 => 
            array (
                'sc_id' => 679,
                'date_enrolled' => '2022-07-03',
                'student_id' => 299,
                'class_id' => 114,
            ),
            179 => 
            array (
                'sc_id' => 680,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1680,
                'class_id' => 174,
            ),
            180 => 
            array (
                'sc_id' => 681,
                'date_enrolled' => '2022-08-21',
                'student_id' => 651,
                'class_id' => 320,
            ),
            181 => 
            array (
                'sc_id' => 682,
                'date_enrolled' => '2022-07-26',
                'student_id' => 334,
                'class_id' => 266,
            ),
            182 => 
            array (
                'sc_id' => 683,
                'date_enrolled' => '2022-08-04',
                'student_id' => 364,
                'class_id' => 35,
            ),
            183 => 
            array (
                'sc_id' => 684,
                'date_enrolled' => '2022-07-22',
                'student_id' => 485,
                'class_id' => 495,
            ),
            184 => 
            array (
                'sc_id' => 685,
                'date_enrolled' => '2022-07-03',
                'student_id' => 326,
                'class_id' => 52,
            ),
            185 => 
            array (
                'sc_id' => 686,
                'date_enrolled' => '2022-06-03',
                'student_id' => 402,
                'class_id' => 2,
            ),
            186 => 
            array (
                'sc_id' => 687,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1761,
                'class_id' => 293,
            ),
            187 => 
            array (
                'sc_id' => 688,
                'date_enrolled' => '2022-07-27',
                'student_id' => 671,
                'class_id' => 78,
            ),
            188 => 
            array (
                'sc_id' => 689,
                'date_enrolled' => '2022-08-26',
                'student_id' => 676,
                'class_id' => 430,
            ),
            189 => 
            array (
                'sc_id' => 690,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1234,
                'class_id' => 201,
            ),
            190 => 
            array (
                'sc_id' => 691,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1052,
                'class_id' => 319,
            ),
            191 => 
            array (
                'sc_id' => 692,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1827,
                'class_id' => 463,
            ),
            192 => 
            array (
                'sc_id' => 693,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1420,
                'class_id' => 483,
            ),
            193 => 
            array (
                'sc_id' => 694,
                'date_enrolled' => '2022-08-08',
                'student_id' => 425,
                'class_id' => 38,
            ),
            194 => 
            array (
                'sc_id' => 695,
                'date_enrolled' => '2022-07-01',
                'student_id' => 865,
                'class_id' => 248,
            ),
            195 => 
            array (
                'sc_id' => 696,
                'date_enrolled' => '2022-06-21',
                'student_id' => 822,
                'class_id' => 141,
            ),
            196 => 
            array (
                'sc_id' => 697,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1820,
                'class_id' => 13,
            ),
            197 => 
            array (
                'sc_id' => 698,
                'date_enrolled' => '2022-08-06',
                'student_id' => 646,
                'class_id' => 242,
            ),
            198 => 
            array (
                'sc_id' => 699,
                'date_enrolled' => '2022-07-10',
                'student_id' => 240,
                'class_id' => 342,
            ),
            199 => 
            array (
                'sc_id' => 700,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1393,
                'class_id' => 204,
            ),
            200 => 
            array (
                'sc_id' => 701,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1663,
                'class_id' => 323,
            ),
            201 => 
            array (
                'sc_id' => 702,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1824,
                'class_id' => 307,
            ),
            202 => 
            array (
                'sc_id' => 703,
                'date_enrolled' => '2022-08-21',
                'student_id' => 229,
                'class_id' => 392,
            ),
            203 => 
            array (
                'sc_id' => 704,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1371,
                'class_id' => 19,
            ),
            204 => 
            array (
                'sc_id' => 705,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1487,
                'class_id' => 414,
            ),
            205 => 
            array (
                'sc_id' => 706,
                'date_enrolled' => '2022-07-16',
                'student_id' => 727,
                'class_id' => 409,
            ),
            206 => 
            array (
                'sc_id' => 707,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1812,
                'class_id' => 377,
            ),
            207 => 
            array (
                'sc_id' => 708,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1033,
                'class_id' => 140,
            ),
            208 => 
            array (
                'sc_id' => 709,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1503,
                'class_id' => 36,
            ),
            209 => 
            array (
                'sc_id' => 710,
                'date_enrolled' => '2022-06-07',
                'student_id' => 136,
                'class_id' => 294,
            ),
            210 => 
            array (
                'sc_id' => 711,
                'date_enrolled' => '2022-06-07',
                'student_id' => 184,
                'class_id' => 376,
            ),
            211 => 
            array (
                'sc_id' => 712,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1729,
                'class_id' => 347,
            ),
            212 => 
            array (
                'sc_id' => 713,
                'date_enrolled' => '2022-08-01',
                'student_id' => 88,
                'class_id' => 366,
            ),
            213 => 
            array (
                'sc_id' => 714,
                'date_enrolled' => '2022-08-04',
                'student_id' => 91,
                'class_id' => 65,
            ),
            214 => 
            array (
                'sc_id' => 715,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1012,
                'class_id' => 373,
            ),
            215 => 
            array (
                'sc_id' => 716,
                'date_enrolled' => '2022-06-08',
                'student_id' => 738,
                'class_id' => 96,
            ),
            216 => 
            array (
                'sc_id' => 717,
                'date_enrolled' => '2022-07-05',
                'student_id' => 131,
                'class_id' => 65,
            ),
            217 => 
            array (
                'sc_id' => 718,
                'date_enrolled' => '2022-07-09',
                'student_id' => 84,
                'class_id' => 479,
            ),
            218 => 
            array (
                'sc_id' => 719,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1109,
                'class_id' => 173,
            ),
            219 => 
            array (
                'sc_id' => 720,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1300,
                'class_id' => 338,
            ),
            220 => 
            array (
                'sc_id' => 721,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1250,
                'class_id' => 105,
            ),
            221 => 
            array (
                'sc_id' => 722,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1315,
                'class_id' => 412,
            ),
            222 => 
            array (
                'sc_id' => 723,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1576,
                'class_id' => 103,
            ),
            223 => 
            array (
                'sc_id' => 724,
                'date_enrolled' => '2022-08-28',
                'student_id' => 336,
                'class_id' => 101,
            ),
            224 => 
            array (
                'sc_id' => 725,
                'date_enrolled' => '2022-07-26',
                'student_id' => 656,
                'class_id' => 377,
            ),
            225 => 
            array (
                'sc_id' => 726,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1738,
                'class_id' => 188,
            ),
            226 => 
            array (
                'sc_id' => 727,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1236,
                'class_id' => 11,
            ),
            227 => 
            array (
                'sc_id' => 728,
                'date_enrolled' => '2022-06-17',
                'student_id' => 132,
                'class_id' => 122,
            ),
            228 => 
            array (
                'sc_id' => 729,
                'date_enrolled' => '2022-08-15',
                'student_id' => 353,
                'class_id' => 107,
            ),
            229 => 
            array (
                'sc_id' => 730,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1444,
                'class_id' => 201,
            ),
            230 => 
            array (
                'sc_id' => 731,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1684,
                'class_id' => 447,
            ),
            231 => 
            array (
                'sc_id' => 732,
                'date_enrolled' => '2022-07-21',
                'student_id' => 318,
                'class_id' => 482,
            ),
            232 => 
            array (
                'sc_id' => 733,
                'date_enrolled' => '2022-08-26',
                'student_id' => 251,
                'class_id' => 485,
            ),
            233 => 
            array (
                'sc_id' => 734,
                'date_enrolled' => '2022-08-18',
                'student_id' => 606,
                'class_id' => 480,
            ),
            234 => 
            array (
                'sc_id' => 735,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1049,
                'class_id' => 157,
            ),
            235 => 
            array (
                'sc_id' => 736,
                'date_enrolled' => '2022-08-19',
                'student_id' => 709,
                'class_id' => 249,
            ),
            236 => 
            array (
                'sc_id' => 737,
                'date_enrolled' => '2022-06-21',
                'student_id' => 903,
                'class_id' => 433,
            ),
            237 => 
            array (
                'sc_id' => 738,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1470,
                'class_id' => 428,
            ),
            238 => 
            array (
                'sc_id' => 739,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1125,
                'class_id' => 369,
            ),
            239 => 
            array (
                'sc_id' => 740,
                'date_enrolled' => '2022-06-16',
                'student_id' => 982,
                'class_id' => 252,
            ),
            240 => 
            array (
                'sc_id' => 741,
                'date_enrolled' => '2022-07-03',
                'student_id' => 379,
                'class_id' => 441,
            ),
            241 => 
            array (
                'sc_id' => 742,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1980,
                'class_id' => 59,
            ),
            242 => 
            array (
                'sc_id' => 743,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1462,
                'class_id' => 473,
            ),
            243 => 
            array (
                'sc_id' => 744,
                'date_enrolled' => '2022-06-07',
                'student_id' => 705,
                'class_id' => 326,
            ),
            244 => 
            array (
                'sc_id' => 745,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1649,
                'class_id' => 54,
            ),
            245 => 
            array (
                'sc_id' => 746,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1541,
                'class_id' => 339,
            ),
            246 => 
            array (
                'sc_id' => 747,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1080,
                'class_id' => 400,
            ),
            247 => 
            array (
                'sc_id' => 748,
                'date_enrolled' => '2022-08-13',
                'student_id' => 405,
                'class_id' => 57,
            ),
            248 => 
            array (
                'sc_id' => 749,
                'date_enrolled' => '2022-08-20',
                'student_id' => 859,
                'class_id' => 54,
            ),
            249 => 
            array (
                'sc_id' => 750,
                'date_enrolled' => '2022-06-10',
                'student_id' => 60,
                'class_id' => 154,
            ),
            250 => 
            array (
                'sc_id' => 751,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1584,
                'class_id' => 357,
            ),
            251 => 
            array (
                'sc_id' => 752,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1969,
                'class_id' => 327,
            ),
            252 => 
            array (
                'sc_id' => 753,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1419,
                'class_id' => 336,
            ),
            253 => 
            array (
                'sc_id' => 754,
                'date_enrolled' => '2022-08-02',
                'student_id' => 836,
                'class_id' => 197,
            ),
            254 => 
            array (
                'sc_id' => 755,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1704,
                'class_id' => 26,
            ),
            255 => 
            array (
                'sc_id' => 756,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1111,
                'class_id' => 393,
            ),
            256 => 
            array (
                'sc_id' => 757,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1303,
                'class_id' => 343,
            ),
            257 => 
            array (
                'sc_id' => 758,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1369,
                'class_id' => 45,
            ),
            258 => 
            array (
                'sc_id' => 759,
                'date_enrolled' => '2022-08-25',
                'student_id' => 233,
                'class_id' => 139,
            ),
            259 => 
            array (
                'sc_id' => 760,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1590,
                'class_id' => 347,
            ),
            260 => 
            array (
                'sc_id' => 761,
                'date_enrolled' => '2022-06-22',
                'student_id' => 283,
                'class_id' => 190,
            ),
            261 => 
            array (
                'sc_id' => 762,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1124,
                'class_id' => 289,
            ),
            262 => 
            array (
                'sc_id' => 763,
                'date_enrolled' => '2022-07-03',
                'student_id' => 860,
                'class_id' => 238,
            ),
            263 => 
            array (
                'sc_id' => 764,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1939,
                'class_id' => 450,
            ),
            264 => 
            array (
                'sc_id' => 765,
                'date_enrolled' => '2022-07-18',
                'student_id' => 317,
                'class_id' => 127,
            ),
            265 => 
            array (
                'sc_id' => 766,
                'date_enrolled' => '2022-06-15',
                'student_id' => 669,
                'class_id' => 185,
            ),
            266 => 
            array (
                'sc_id' => 767,
                'date_enrolled' => '2022-08-03',
                'student_id' => 626,
                'class_id' => 185,
            ),
            267 => 
            array (
                'sc_id' => 768,
                'date_enrolled' => '2022-07-28',
                'student_id' => 971,
                'class_id' => 393,
            ),
            268 => 
            array (
                'sc_id' => 769,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1831,
                'class_id' => 120,
            ),
            269 => 
            array (
                'sc_id' => 770,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1344,
                'class_id' => 141,
            ),
            270 => 
            array (
                'sc_id' => 771,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1264,
                'class_id' => 306,
            ),
            271 => 
            array (
                'sc_id' => 772,
                'date_enrolled' => '2022-06-19',
                'student_id' => 16,
                'class_id' => 454,
            ),
            272 => 
            array (
                'sc_id' => 773,
                'date_enrolled' => '2022-08-05',
                'student_id' => 5,
                'class_id' => 404,
            ),
            273 => 
            array (
                'sc_id' => 774,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1706,
                'class_id' => 259,
            ),
            274 => 
            array (
                'sc_id' => 775,
                'date_enrolled' => '2022-06-30',
                'student_id' => 570,
                'class_id' => 496,
            ),
            275 => 
            array (
                'sc_id' => 776,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1779,
                'class_id' => 165,
            ),
            276 => 
            array (
                'sc_id' => 777,
                'date_enrolled' => '2022-08-29',
                'student_id' => 867,
                'class_id' => 255,
            ),
            277 => 
            array (
                'sc_id' => 778,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1150,
                'class_id' => 466,
            ),
            278 => 
            array (
                'sc_id' => 779,
                'date_enrolled' => '2022-06-05',
                'student_id' => 31,
                'class_id' => 123,
            ),
            279 => 
            array (
                'sc_id' => 780,
                'date_enrolled' => '2022-06-25',
                'student_id' => 143,
                'class_id' => 239,
            ),
            280 => 
            array (
                'sc_id' => 781,
                'date_enrolled' => '2022-06-15',
                'student_id' => 509,
                'class_id' => 335,
            ),
            281 => 
            array (
                'sc_id' => 782,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1930,
                'class_id' => 472,
            ),
            282 => 
            array (
                'sc_id' => 783,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1012,
                'class_id' => 242,
            ),
            283 => 
            array (
                'sc_id' => 784,
                'date_enrolled' => '2022-07-24',
                'student_id' => 55,
                'class_id' => 180,
            ),
            284 => 
            array (
                'sc_id' => 785,
                'date_enrolled' => '2022-08-18',
                'student_id' => 130,
                'class_id' => 308,
            ),
            285 => 
            array (
                'sc_id' => 786,
                'date_enrolled' => '2022-08-02',
                'student_id' => 14,
                'class_id' => 196,
            ),
            286 => 
            array (
                'sc_id' => 787,
                'date_enrolled' => '2022-06-09',
                'student_id' => 201,
                'class_id' => 421,
            ),
            287 => 
            array (
                'sc_id' => 788,
                'date_enrolled' => '2022-08-01',
                'student_id' => 78,
                'class_id' => 130,
            ),
            288 => 
            array (
                'sc_id' => 789,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1837,
                'class_id' => 271,
            ),
            289 => 
            array (
                'sc_id' => 790,
                'date_enrolled' => '2022-06-22',
                'student_id' => 359,
                'class_id' => 249,
            ),
            290 => 
            array (
                'sc_id' => 791,
                'date_enrolled' => '2022-06-23',
                'student_id' => 588,
                'class_id' => 5,
            ),
            291 => 
            array (
                'sc_id' => 792,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1216,
                'class_id' => 222,
            ),
            292 => 
            array (
                'sc_id' => 793,
                'date_enrolled' => '2022-07-15',
                'student_id' => 558,
                'class_id' => 451,
            ),
            293 => 
            array (
                'sc_id' => 794,
                'date_enrolled' => '2022-08-19',
                'student_id' => 194,
                'class_id' => 263,
            ),
            294 => 
            array (
                'sc_id' => 795,
                'date_enrolled' => '2022-08-08',
                'student_id' => 434,
                'class_id' => 269,
            ),
            295 => 
            array (
                'sc_id' => 796,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1501,
                'class_id' => 457,
            ),
            296 => 
            array (
                'sc_id' => 797,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1469,
                'class_id' => 119,
            ),
            297 => 
            array (
                'sc_id' => 798,
                'date_enrolled' => '2022-06-06',
                'student_id' => 332,
                'class_id' => 423,
            ),
            298 => 
            array (
                'sc_id' => 799,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1376,
                'class_id' => 30,
            ),
            299 => 
            array (
                'sc_id' => 800,
                'date_enrolled' => '2022-08-02',
                'student_id' => 642,
                'class_id' => 471,
            ),
            300 => 
            array (
                'sc_id' => 801,
                'date_enrolled' => '2022-08-01',
                'student_id' => 469,
                'class_id' => 447,
            ),
            301 => 
            array (
                'sc_id' => 802,
                'date_enrolled' => '2022-06-03',
                'student_id' => 191,
                'class_id' => 137,
            ),
            302 => 
            array (
                'sc_id' => 803,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1468,
                'class_id' => 100,
            ),
            303 => 
            array (
                'sc_id' => 804,
                'date_enrolled' => '2022-06-03',
                'student_id' => 236,
                'class_id' => 277,
            ),
            304 => 
            array (
                'sc_id' => 805,
                'date_enrolled' => '2022-06-17',
                'student_id' => 813,
                'class_id' => 260,
            ),
            305 => 
            array (
                'sc_id' => 806,
                'date_enrolled' => '2022-06-30',
                'student_id' => 35,
                'class_id' => 194,
            ),
            306 => 
            array (
                'sc_id' => 807,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1772,
                'class_id' => 455,
            ),
            307 => 
            array (
                'sc_id' => 808,
                'date_enrolled' => '2022-07-02',
                'student_id' => 925,
                'class_id' => 236,
            ),
            308 => 
            array (
                'sc_id' => 809,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1103,
                'class_id' => 161,
            ),
            309 => 
            array (
                'sc_id' => 810,
                'date_enrolled' => '2022-06-30',
                'student_id' => 805,
                'class_id' => 145,
            ),
            310 => 
            array (
                'sc_id' => 811,
                'date_enrolled' => '2022-08-20',
                'student_id' => 289,
                'class_id' => 315,
            ),
            311 => 
            array (
                'sc_id' => 812,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1988,
                'class_id' => 344,
            ),
            312 => 
            array (
                'sc_id' => 813,
                'date_enrolled' => '2022-07-05',
                'student_id' => 593,
                'class_id' => 336,
            ),
            313 => 
            array (
                'sc_id' => 814,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1602,
                'class_id' => 35,
            ),
            314 => 
            array (
                'sc_id' => 815,
                'date_enrolled' => '2022-06-04',
                'student_id' => 617,
                'class_id' => 356,
            ),
            315 => 
            array (
                'sc_id' => 816,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1730,
                'class_id' => 36,
            ),
            316 => 
            array (
                'sc_id' => 817,
                'date_enrolled' => '2022-06-20',
                'student_id' => 65,
                'class_id' => 297,
            ),
            317 => 
            array (
                'sc_id' => 818,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1186,
                'class_id' => 50,
            ),
            318 => 
            array (
                'sc_id' => 819,
                'date_enrolled' => '2022-08-04',
                'student_id' => 960,
                'class_id' => 440,
            ),
            319 => 
            array (
                'sc_id' => 820,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1695,
                'class_id' => 18,
            ),
            320 => 
            array (
                'sc_id' => 821,
                'date_enrolled' => '2022-07-31',
                'student_id' => 500,
                'class_id' => 167,
            ),
            321 => 
            array (
                'sc_id' => 822,
                'date_enrolled' => '2022-07-26',
                'student_id' => 208,
                'class_id' => 41,
            ),
            322 => 
            array (
                'sc_id' => 823,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1250,
                'class_id' => 341,
            ),
            323 => 
            array (
                'sc_id' => 824,
                'date_enrolled' => '2022-07-05',
                'student_id' => 150,
                'class_id' => 17,
            ),
            324 => 
            array (
                'sc_id' => 825,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1911,
                'class_id' => 341,
            ),
            325 => 
            array (
                'sc_id' => 826,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1447,
                'class_id' => 376,
            ),
            326 => 
            array (
                'sc_id' => 827,
                'date_enrolled' => '2022-06-10',
                'student_id' => 136,
                'class_id' => 320,
            ),
            327 => 
            array (
                'sc_id' => 828,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1918,
                'class_id' => 216,
            ),
            328 => 
            array (
                'sc_id' => 829,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1892,
                'class_id' => 14,
            ),
            329 => 
            array (
                'sc_id' => 830,
                'date_enrolled' => '2022-08-08',
                'student_id' => 940,
                'class_id' => 235,
            ),
            330 => 
            array (
                'sc_id' => 831,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1537,
                'class_id' => 95,
            ),
            331 => 
            array (
                'sc_id' => 832,
                'date_enrolled' => '2022-08-27',
                'student_id' => 729,
                'class_id' => 121,
            ),
            332 => 
            array (
                'sc_id' => 833,
                'date_enrolled' => '2022-07-25',
                'student_id' => 795,
                'class_id' => 39,
            ),
            333 => 
            array (
                'sc_id' => 834,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1323,
                'class_id' => 120,
            ),
            334 => 
            array (
                'sc_id' => 835,
                'date_enrolled' => '2022-08-30',
                'student_id' => 823,
                'class_id' => 259,
            ),
            335 => 
            array (
                'sc_id' => 836,
                'date_enrolled' => '2022-08-30',
                'student_id' => 934,
                'class_id' => 410,
            ),
            336 => 
            array (
                'sc_id' => 837,
                'date_enrolled' => '2022-08-31',
                'student_id' => 17,
                'class_id' => 104,
            ),
            337 => 
            array (
                'sc_id' => 838,
                'date_enrolled' => '2022-08-09',
                'student_id' => 832,
                'class_id' => 374,
            ),
            338 => 
            array (
                'sc_id' => 839,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1369,
                'class_id' => 284,
            ),
            339 => 
            array (
                'sc_id' => 840,
                'date_enrolled' => '2022-07-13',
                'student_id' => 450,
                'class_id' => 314,
            ),
            340 => 
            array (
                'sc_id' => 841,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1029,
                'class_id' => 116,
            ),
            341 => 
            array (
                'sc_id' => 842,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1170,
                'class_id' => 436,
            ),
            342 => 
            array (
                'sc_id' => 843,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1077,
                'class_id' => 73,
            ),
            343 => 
            array (
                'sc_id' => 844,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1291,
                'class_id' => 311,
            ),
            344 => 
            array (
                'sc_id' => 845,
                'date_enrolled' => '2022-07-26',
                'student_id' => 286,
                'class_id' => 23,
            ),
            345 => 
            array (
                'sc_id' => 846,
                'date_enrolled' => '2022-08-10',
                'student_id' => 417,
                'class_id' => 333,
            ),
            346 => 
            array (
                'sc_id' => 847,
                'date_enrolled' => '2022-08-01',
                'student_id' => 593,
                'class_id' => 85,
            ),
            347 => 
            array (
                'sc_id' => 848,
                'date_enrolled' => '2022-07-07',
                'student_id' => 180,
                'class_id' => 484,
            ),
            348 => 
            array (
                'sc_id' => 849,
                'date_enrolled' => '2022-07-21',
                'student_id' => 810,
                'class_id' => 107,
            ),
            349 => 
            array (
                'sc_id' => 850,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1997,
                'class_id' => 406,
            ),
            350 => 
            array (
                'sc_id' => 851,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1193,
                'class_id' => 382,
            ),
            351 => 
            array (
                'sc_id' => 852,
                'date_enrolled' => '2022-08-11',
                'student_id' => 123,
                'class_id' => 478,
            ),
            352 => 
            array (
                'sc_id' => 853,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1717,
                'class_id' => 453,
            ),
            353 => 
            array (
                'sc_id' => 854,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1773,
                'class_id' => 185,
            ),
            354 => 
            array (
                'sc_id' => 855,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1628,
                'class_id' => 416,
            ),
            355 => 
            array (
                'sc_id' => 856,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1583,
                'class_id' => 122,
            ),
            356 => 
            array (
                'sc_id' => 857,
                'date_enrolled' => '2022-07-23',
                'student_id' => 453,
                'class_id' => 114,
            ),
            357 => 
            array (
                'sc_id' => 858,
                'date_enrolled' => '2022-07-05',
                'student_id' => 261,
                'class_id' => 212,
            ),
            358 => 
            array (
                'sc_id' => 859,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1590,
                'class_id' => 354,
            ),
            359 => 
            array (
                'sc_id' => 860,
                'date_enrolled' => '2022-06-04',
                'student_id' => 999,
                'class_id' => 74,
            ),
            360 => 
            array (
                'sc_id' => 861,
                'date_enrolled' => '2022-06-24',
                'student_id' => 970,
                'class_id' => 297,
            ),
            361 => 
            array (
                'sc_id' => 862,
                'date_enrolled' => '2022-06-08',
                'student_id' => 894,
                'class_id' => 168,
            ),
            362 => 
            array (
                'sc_id' => 863,
                'date_enrolled' => '2022-06-15',
                'student_id' => 375,
                'class_id' => 224,
            ),
            363 => 
            array (
                'sc_id' => 864,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1289,
                'class_id' => 421,
            ),
            364 => 
            array (
                'sc_id' => 865,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1684,
                'class_id' => 246,
            ),
            365 => 
            array (
                'sc_id' => 866,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1887,
                'class_id' => 178,
            ),
            366 => 
            array (
                'sc_id' => 867,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1638,
                'class_id' => 193,
            ),
            367 => 
            array (
                'sc_id' => 868,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1510,
                'class_id' => 190,
            ),
            368 => 
            array (
                'sc_id' => 869,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1527,
                'class_id' => 477,
            ),
            369 => 
            array (
                'sc_id' => 870,
                'date_enrolled' => '2022-06-30',
                'student_id' => 652,
                'class_id' => 430,
            ),
            370 => 
            array (
                'sc_id' => 871,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1125,
                'class_id' => 243,
            ),
            371 => 
            array (
                'sc_id' => 872,
                'date_enrolled' => '2022-06-12',
                'student_id' => 761,
                'class_id' => 415,
            ),
            372 => 
            array (
                'sc_id' => 873,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1983,
                'class_id' => 296,
            ),
            373 => 
            array (
                'sc_id' => 874,
                'date_enrolled' => '2022-08-05',
                'student_id' => 373,
                'class_id' => 12,
            ),
            374 => 
            array (
                'sc_id' => 875,
                'date_enrolled' => '2022-08-07',
                'student_id' => 596,
                'class_id' => 368,
            ),
            375 => 
            array (
                'sc_id' => 876,
                'date_enrolled' => '2022-07-16',
                'student_id' => 706,
                'class_id' => 34,
            ),
            376 => 
            array (
                'sc_id' => 877,
                'date_enrolled' => '2022-06-05',
                'student_id' => 163,
                'class_id' => 319,
            ),
            377 => 
            array (
                'sc_id' => 878,
                'date_enrolled' => '2022-07-19',
                'student_id' => 571,
                'class_id' => 169,
            ),
            378 => 
            array (
                'sc_id' => 879,
                'date_enrolled' => '2022-08-30',
                'student_id' => 593,
                'class_id' => 273,
            ),
            379 => 
            array (
                'sc_id' => 880,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1111,
                'class_id' => 231,
            ),
            380 => 
            array (
                'sc_id' => 881,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1300,
                'class_id' => 166,
            ),
            381 => 
            array (
                'sc_id' => 882,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1252,
                'class_id' => 462,
            ),
            382 => 
            array (
                'sc_id' => 883,
                'date_enrolled' => '2022-08-28',
                'student_id' => 787,
                'class_id' => 477,
            ),
            383 => 
            array (
                'sc_id' => 884,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1422,
                'class_id' => 194,
            ),
            384 => 
            array (
                'sc_id' => 885,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1767,
                'class_id' => 7,
            ),
            385 => 
            array (
                'sc_id' => 886,
                'date_enrolled' => '2022-08-18',
                'student_id' => 939,
                'class_id' => 392,
            ),
            386 => 
            array (
                'sc_id' => 887,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1627,
                'class_id' => 413,
            ),
            387 => 
            array (
                'sc_id' => 888,
                'date_enrolled' => '2022-08-11',
                'student_id' => 203,
                'class_id' => 360,
            ),
            388 => 
            array (
                'sc_id' => 889,
                'date_enrolled' => '2022-07-29',
                'student_id' => 911,
                'class_id' => 47,
            ),
            389 => 
            array (
                'sc_id' => 890,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1965,
                'class_id' => 394,
            ),
            390 => 
            array (
                'sc_id' => 891,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1684,
                'class_id' => 342,
            ),
            391 => 
            array (
                'sc_id' => 892,
                'date_enrolled' => '2022-08-17',
                'student_id' => 290,
                'class_id' => 231,
            ),
            392 => 
            array (
                'sc_id' => 893,
                'date_enrolled' => '2022-07-20',
                'student_id' => 272,
                'class_id' => 141,
            ),
            393 => 
            array (
                'sc_id' => 894,
                'date_enrolled' => '2022-08-16',
                'student_id' => 962,
                'class_id' => 37,
            ),
            394 => 
            array (
                'sc_id' => 895,
                'date_enrolled' => '2022-07-14',
                'student_id' => 303,
                'class_id' => 484,
            ),
            395 => 
            array (
                'sc_id' => 896,
                'date_enrolled' => '2022-06-12',
                'student_id' => 111,
                'class_id' => 197,
            ),
            396 => 
            array (
                'sc_id' => 897,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1611,
                'class_id' => 251,
            ),
            397 => 
            array (
                'sc_id' => 898,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1445,
                'class_id' => 275,
            ),
            398 => 
            array (
                'sc_id' => 899,
                'date_enrolled' => '2022-08-30',
                'student_id' => 411,
                'class_id' => 180,
            ),
            399 => 
            array (
                'sc_id' => 900,
                'date_enrolled' => '2022-07-24',
                'student_id' => 809,
                'class_id' => 22,
            ),
            400 => 
            array (
                'sc_id' => 901,
                'date_enrolled' => '2022-07-09',
                'student_id' => 720,
                'class_id' => 60,
            ),
            401 => 
            array (
                'sc_id' => 902,
                'date_enrolled' => '2022-07-27',
                'student_id' => 425,
                'class_id' => 360,
            ),
            402 => 
            array (
                'sc_id' => 903,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1922,
                'class_id' => 336,
            ),
            403 => 
            array (
                'sc_id' => 904,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1317,
                'class_id' => 402,
            ),
            404 => 
            array (
                'sc_id' => 905,
                'date_enrolled' => '2022-07-16',
                'student_id' => 637,
                'class_id' => 414,
            ),
            405 => 
            array (
                'sc_id' => 906,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1627,
                'class_id' => 429,
            ),
            406 => 
            array (
                'sc_id' => 907,
                'date_enrolled' => '2022-08-22',
                'student_id' => 426,
                'class_id' => 155,
            ),
            407 => 
            array (
                'sc_id' => 908,
                'date_enrolled' => '2022-08-13',
                'student_id' => 109,
                'class_id' => 117,
            ),
            408 => 
            array (
                'sc_id' => 909,
                'date_enrolled' => '2022-08-05',
                'student_id' => 293,
                'class_id' => 462,
            ),
            409 => 
            array (
                'sc_id' => 910,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1783,
                'class_id' => 268,
            ),
            410 => 
            array (
                'sc_id' => 911,
                'date_enrolled' => '2022-08-04',
                'student_id' => 142,
                'class_id' => 47,
            ),
            411 => 
            array (
                'sc_id' => 912,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1012,
                'class_id' => 355,
            ),
            412 => 
            array (
                'sc_id' => 913,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1371,
                'class_id' => 369,
            ),
            413 => 
            array (
                'sc_id' => 914,
                'date_enrolled' => '2022-06-02',
                'student_id' => 62,
                'class_id' => 229,
            ),
            414 => 
            array (
                'sc_id' => 915,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1899,
                'class_id' => 464,
            ),
            415 => 
            array (
                'sc_id' => 916,
                'date_enrolled' => '2022-08-16',
                'student_id' => 590,
                'class_id' => 95,
            ),
            416 => 
            array (
                'sc_id' => 917,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1071,
                'class_id' => 238,
            ),
            417 => 
            array (
                'sc_id' => 918,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1764,
                'class_id' => 142,
            ),
            418 => 
            array (
                'sc_id' => 919,
                'date_enrolled' => '2022-08-18',
                'student_id' => 904,
                'class_id' => 75,
            ),
            419 => 
            array (
                'sc_id' => 920,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1290,
                'class_id' => 350,
            ),
            420 => 
            array (
                'sc_id' => 921,
                'date_enrolled' => '2022-07-28',
                'student_id' => 844,
                'class_id' => 285,
            ),
            421 => 
            array (
                'sc_id' => 922,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1383,
                'class_id' => 497,
            ),
            422 => 
            array (
                'sc_id' => 923,
                'date_enrolled' => '2022-08-30',
                'student_id' => 726,
                'class_id' => 1,
            ),
            423 => 
            array (
                'sc_id' => 924,
                'date_enrolled' => '2022-08-16',
                'student_id' => 286,
                'class_id' => 388,
            ),
            424 => 
            array (
                'sc_id' => 925,
                'date_enrolled' => '2022-07-12',
                'student_id' => 244,
                'class_id' => 118,
            ),
            425 => 
            array (
                'sc_id' => 926,
                'date_enrolled' => '2022-07-27',
                'student_id' => 656,
                'class_id' => 75,
            ),
            426 => 
            array (
                'sc_id' => 927,
                'date_enrolled' => '2022-06-11',
                'student_id' => 463,
                'class_id' => 367,
            ),
            427 => 
            array (
                'sc_id' => 928,
                'date_enrolled' => '2022-06-02',
                'student_id' => 343,
                'class_id' => 175,
            ),
            428 => 
            array (
                'sc_id' => 929,
                'date_enrolled' => '2022-07-28',
                'student_id' => 832,
                'class_id' => 156,
            ),
            429 => 
            array (
                'sc_id' => 930,
                'date_enrolled' => '2022-08-02',
                'student_id' => 176,
                'class_id' => 478,
            ),
            430 => 
            array (
                'sc_id' => 931,
                'date_enrolled' => '2022-07-25',
                'student_id' => 693,
                'class_id' => 281,
            ),
            431 => 
            array (
                'sc_id' => 932,
                'date_enrolled' => '2022-06-11',
                'student_id' => 726,
                'class_id' => 315,
            ),
            432 => 
            array (
                'sc_id' => 933,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1130,
                'class_id' => 311,
            ),
            433 => 
            array (
                'sc_id' => 934,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1385,
                'class_id' => 164,
            ),
            434 => 
            array (
                'sc_id' => 935,
                'date_enrolled' => '2022-06-09',
                'student_id' => 618,
                'class_id' => 124,
            ),
            435 => 
            array (
                'sc_id' => 936,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1905,
                'class_id' => 173,
            ),
            436 => 
            array (
                'sc_id' => 937,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1813,
                'class_id' => 455,
            ),
            437 => 
            array (
                'sc_id' => 938,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1686,
                'class_id' => 427,
            ),
            438 => 
            array (
                'sc_id' => 939,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1997,
                'class_id' => 143,
            ),
            439 => 
            array (
                'sc_id' => 940,
                'date_enrolled' => '2022-06-15',
                'student_id' => 691,
                'class_id' => 378,
            ),
            440 => 
            array (
                'sc_id' => 941,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1673,
                'class_id' => 398,
            ),
            441 => 
            array (
                'sc_id' => 942,
                'date_enrolled' => '2022-07-26',
                'student_id' => 303,
                'class_id' => 66,
            ),
            442 => 
            array (
                'sc_id' => 943,
                'date_enrolled' => '2022-07-28',
                'student_id' => 58,
                'class_id' => 260,
            ),
            443 => 
            array (
                'sc_id' => 944,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1740,
                'class_id' => 470,
            ),
            444 => 
            array (
                'sc_id' => 945,
                'date_enrolled' => '2022-08-01',
                'student_id' => 864,
                'class_id' => 266,
            ),
            445 => 
            array (
                'sc_id' => 946,
                'date_enrolled' => '2022-06-10',
                'student_id' => 340,
                'class_id' => 12,
            ),
            446 => 
            array (
                'sc_id' => 947,
                'date_enrolled' => '2022-08-02',
                'student_id' => 744,
                'class_id' => 47,
            ),
            447 => 
            array (
                'sc_id' => 948,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1918,
                'class_id' => 268,
            ),
            448 => 
            array (
                'sc_id' => 949,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1250,
                'class_id' => 366,
            ),
            449 => 
            array (
                'sc_id' => 950,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1858,
                'class_id' => 109,
            ),
            450 => 
            array (
                'sc_id' => 951,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1293,
                'class_id' => 19,
            ),
            451 => 
            array (
                'sc_id' => 952,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1730,
                'class_id' => 260,
            ),
            452 => 
            array (
                'sc_id' => 953,
                'date_enrolled' => '2022-07-10',
                'student_id' => 287,
                'class_id' => 38,
            ),
            453 => 
            array (
                'sc_id' => 954,
                'date_enrolled' => '2022-07-01',
                'student_id' => 963,
                'class_id' => 113,
            ),
            454 => 
            array (
                'sc_id' => 955,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1868,
                'class_id' => 75,
            ),
            455 => 
            array (
                'sc_id' => 956,
                'date_enrolled' => '2022-08-15',
                'student_id' => 927,
                'class_id' => 146,
            ),
            456 => 
            array (
                'sc_id' => 957,
                'date_enrolled' => '2022-07-06',
                'student_id' => 531,
                'class_id' => 423,
            ),
            457 => 
            array (
                'sc_id' => 958,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1562,
                'class_id' => 59,
            ),
            458 => 
            array (
                'sc_id' => 959,
                'date_enrolled' => '2022-08-26',
                'student_id' => 605,
                'class_id' => 163,
            ),
            459 => 
            array (
                'sc_id' => 960,
                'date_enrolled' => '2022-07-04',
                'student_id' => 789,
                'class_id' => 446,
            ),
            460 => 
            array (
                'sc_id' => 961,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1732,
                'class_id' => 344,
            ),
            461 => 
            array (
                'sc_id' => 962,
                'date_enrolled' => '2022-07-01',
                'student_id' => 42,
                'class_id' => 363,
            ),
            462 => 
            array (
                'sc_id' => 963,
                'date_enrolled' => '2022-06-11',
                'student_id' => 724,
                'class_id' => 182,
            ),
            463 => 
            array (
                'sc_id' => 964,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1840,
                'class_id' => 22,
            ),
            464 => 
            array (
                'sc_id' => 965,
                'date_enrolled' => '2022-08-17',
                'student_id' => 508,
                'class_id' => 440,
            ),
            465 => 
            array (
                'sc_id' => 966,
                'date_enrolled' => '2022-07-17',
                'student_id' => 347,
                'class_id' => 482,
            ),
            466 => 
            array (
                'sc_id' => 967,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1316,
                'class_id' => 8,
            ),
            467 => 
            array (
                'sc_id' => 968,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1668,
                'class_id' => 259,
            ),
            468 => 
            array (
                'sc_id' => 969,
                'date_enrolled' => '2022-06-17',
                'student_id' => 963,
                'class_id' => 139,
            ),
            469 => 
            array (
                'sc_id' => 970,
                'date_enrolled' => '2022-06-19',
                'student_id' => 529,
                'class_id' => 225,
            ),
            470 => 
            array (
                'sc_id' => 971,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1456,
                'class_id' => 358,
            ),
            471 => 
            array (
                'sc_id' => 972,
                'date_enrolled' => '2022-06-02',
                'student_id' => 322,
                'class_id' => 444,
            ),
            472 => 
            array (
                'sc_id' => 973,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1895,
                'class_id' => 117,
            ),
            473 => 
            array (
                'sc_id' => 974,
                'date_enrolled' => '2022-07-24',
                'student_id' => 900,
                'class_id' => 379,
            ),
            474 => 
            array (
                'sc_id' => 975,
                'date_enrolled' => '2022-06-27',
                'student_id' => 843,
                'class_id' => 73,
            ),
            475 => 
            array (
                'sc_id' => 976,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1828,
                'class_id' => 242,
            ),
            476 => 
            array (
                'sc_id' => 977,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1415,
                'class_id' => 60,
            ),
            477 => 
            array (
                'sc_id' => 978,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1843,
                'class_id' => 187,
            ),
            478 => 
            array (
                'sc_id' => 979,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1802,
                'class_id' => 90,
            ),
            479 => 
            array (
                'sc_id' => 980,
                'date_enrolled' => '2022-07-31',
                'student_id' => 529,
                'class_id' => 484,
            ),
            480 => 
            array (
                'sc_id' => 981,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1242,
                'class_id' => 250,
            ),
            481 => 
            array (
                'sc_id' => 982,
                'date_enrolled' => '2022-06-27',
                'student_id' => 776,
                'class_id' => 96,
            ),
            482 => 
            array (
                'sc_id' => 983,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1876,
                'class_id' => 454,
            ),
            483 => 
            array (
                'sc_id' => 984,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1564,
                'class_id' => 180,
            ),
            484 => 
            array (
                'sc_id' => 985,
                'date_enrolled' => '2022-06-15',
                'student_id' => 708,
                'class_id' => 256,
            ),
            485 => 
            array (
                'sc_id' => 986,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1869,
                'class_id' => 438,
            ),
            486 => 
            array (
                'sc_id' => 987,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1713,
                'class_id' => 450,
            ),
            487 => 
            array (
                'sc_id' => 988,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1763,
                'class_id' => 123,
            ),
            488 => 
            array (
                'sc_id' => 989,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1295,
                'class_id' => 153,
            ),
            489 => 
            array (
                'sc_id' => 990,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1448,
                'class_id' => 277,
            ),
            490 => 
            array (
                'sc_id' => 991,
                'date_enrolled' => '2022-07-28',
                'student_id' => 821,
                'class_id' => 125,
            ),
            491 => 
            array (
                'sc_id' => 992,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1066,
                'class_id' => 231,
            ),
            492 => 
            array (
                'sc_id' => 993,
                'date_enrolled' => '2022-07-24',
                'student_id' => 510,
                'class_id' => 254,
            ),
            493 => 
            array (
                'sc_id' => 994,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1425,
                'class_id' => 269,
            ),
            494 => 
            array (
                'sc_id' => 995,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1905,
                'class_id' => 320,
            ),
            495 => 
            array (
                'sc_id' => 996,
                'date_enrolled' => '2022-07-28',
                'student_id' => 380,
                'class_id' => 64,
            ),
            496 => 
            array (
                'sc_id' => 997,
                'date_enrolled' => '2022-06-10',
                'student_id' => 907,
                'class_id' => 484,
            ),
            497 => 
            array (
                'sc_id' => 998,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1116,
                'class_id' => 424,
            ),
            498 => 
            array (
                'sc_id' => 999,
                'date_enrolled' => '2022-08-11',
                'student_id' => 594,
                'class_id' => 115,
            ),
            499 => 
            array (
                'sc_id' => 1000,
                'date_enrolled' => '2022-07-17',
                'student_id' => 660,
                'class_id' => 413,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 1001,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1177,
                'class_id' => 441,
            ),
            1 => 
            array (
                'sc_id' => 1002,
                'date_enrolled' => '2022-08-30',
                'student_id' => 990,
                'class_id' => 418,
            ),
            2 => 
            array (
                'sc_id' => 1003,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1873,
                'class_id' => 189,
            ),
            3 => 
            array (
                'sc_id' => 1004,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1885,
                'class_id' => 481,
            ),
            4 => 
            array (
                'sc_id' => 1005,
                'date_enrolled' => '2022-06-11',
                'student_id' => 23,
                'class_id' => 176,
            ),
            5 => 
            array (
                'sc_id' => 1006,
                'date_enrolled' => '2022-07-24',
                'student_id' => 582,
                'class_id' => 434,
            ),
            6 => 
            array (
                'sc_id' => 1007,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1592,
                'class_id' => 138,
            ),
            7 => 
            array (
                'sc_id' => 1008,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1857,
                'class_id' => 462,
            ),
            8 => 
            array (
                'sc_id' => 1009,
                'date_enrolled' => '2022-06-28',
                'student_id' => 720,
                'class_id' => 244,
            ),
            9 => 
            array (
                'sc_id' => 1010,
                'date_enrolled' => '2022-06-01',
                'student_id' => 23,
                'class_id' => 238,
            ),
            10 => 
            array (
                'sc_id' => 1011,
                'date_enrolled' => '2022-07-31',
                'student_id' => 12,
                'class_id' => 435,
            ),
            11 => 
            array (
                'sc_id' => 1012,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1205,
                'class_id' => 441,
            ),
            12 => 
            array (
                'sc_id' => 1013,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1075,
                'class_id' => 150,
            ),
            13 => 
            array (
                'sc_id' => 1014,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1846,
                'class_id' => 72,
            ),
            14 => 
            array (
                'sc_id' => 1015,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1559,
                'class_id' => 259,
            ),
            15 => 
            array (
                'sc_id' => 1016,
                'date_enrolled' => '2022-08-05',
                'student_id' => 509,
                'class_id' => 416,
            ),
            16 => 
            array (
                'sc_id' => 1017,
                'date_enrolled' => '2022-08-30',
                'student_id' => 825,
                'class_id' => 189,
            ),
            17 => 
            array (
                'sc_id' => 1018,
                'date_enrolled' => '2022-06-23',
                'student_id' => 361,
                'class_id' => 119,
            ),
            18 => 
            array (
                'sc_id' => 1019,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1118,
                'class_id' => 378,
            ),
            19 => 
            array (
                'sc_id' => 1020,
                'date_enrolled' => '2022-06-30',
                'student_id' => 7,
                'class_id' => 416,
            ),
            20 => 
            array (
                'sc_id' => 1021,
                'date_enrolled' => '2022-07-09',
                'student_id' => 148,
                'class_id' => 350,
            ),
            21 => 
            array (
                'sc_id' => 1022,
                'date_enrolled' => '2022-08-16',
                'student_id' => 270,
                'class_id' => 301,
            ),
            22 => 
            array (
                'sc_id' => 1023,
                'date_enrolled' => '2022-07-22',
                'student_id' => 252,
                'class_id' => 127,
            ),
            23 => 
            array (
                'sc_id' => 1024,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1683,
                'class_id' => 182,
            ),
            24 => 
            array (
                'sc_id' => 1025,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1847,
                'class_id' => 174,
            ),
            25 => 
            array (
                'sc_id' => 1026,
                'date_enrolled' => '2022-06-08',
                'student_id' => 492,
                'class_id' => 95,
            ),
            26 => 
            array (
                'sc_id' => 1027,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1844,
                'class_id' => 103,
            ),
            27 => 
            array (
                'sc_id' => 1028,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1174,
                'class_id' => 20,
            ),
            28 => 
            array (
                'sc_id' => 1029,
                'date_enrolled' => '2022-07-30',
                'student_id' => 249,
                'class_id' => 277,
            ),
            29 => 
            array (
                'sc_id' => 1030,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1903,
                'class_id' => 392,
            ),
            30 => 
            array (
                'sc_id' => 1031,
                'date_enrolled' => '2022-07-30',
                'student_id' => 784,
                'class_id' => 326,
            ),
            31 => 
            array (
                'sc_id' => 1032,
                'date_enrolled' => '2022-07-10',
                'student_id' => 621,
                'class_id' => 96,
            ),
            32 => 
            array (
                'sc_id' => 1033,
                'date_enrolled' => '2022-06-30',
                'student_id' => 149,
                'class_id' => 228,
            ),
            33 => 
            array (
                'sc_id' => 1034,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1416,
                'class_id' => 157,
            ),
            34 => 
            array (
                'sc_id' => 1035,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1723,
                'class_id' => 94,
            ),
            35 => 
            array (
                'sc_id' => 1036,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1228,
                'class_id' => 475,
            ),
            36 => 
            array (
                'sc_id' => 1037,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1149,
                'class_id' => 101,
            ),
            37 => 
            array (
                'sc_id' => 1038,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1859,
                'class_id' => 287,
            ),
            38 => 
            array (
                'sc_id' => 1039,
                'date_enrolled' => '2022-06-06',
                'student_id' => 278,
                'class_id' => 494,
            ),
            39 => 
            array (
                'sc_id' => 1040,
                'date_enrolled' => '2022-07-05',
                'student_id' => 694,
                'class_id' => 78,
            ),
            40 => 
            array (
                'sc_id' => 1041,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1348,
                'class_id' => 122,
            ),
            41 => 
            array (
                'sc_id' => 1042,
                'date_enrolled' => '2022-06-27',
                'student_id' => 845,
                'class_id' => 461,
            ),
            42 => 
            array (
                'sc_id' => 1043,
                'date_enrolled' => '2022-06-30',
                'student_id' => 458,
                'class_id' => 317,
            ),
            43 => 
            array (
                'sc_id' => 1044,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1362,
                'class_id' => 453,
            ),
            44 => 
            array (
                'sc_id' => 1045,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1118,
                'class_id' => 232,
            ),
            45 => 
            array (
                'sc_id' => 1046,
                'date_enrolled' => '2022-08-10',
                'student_id' => 625,
                'class_id' => 119,
            ),
            46 => 
            array (
                'sc_id' => 1047,
                'date_enrolled' => '2022-07-08',
                'student_id' => 559,
                'class_id' => 280,
            ),
            47 => 
            array (
                'sc_id' => 1048,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1509,
                'class_id' => 440,
            ),
            48 => 
            array (
                'sc_id' => 1049,
                'date_enrolled' => '2022-06-22',
                'student_id' => 13,
                'class_id' => 298,
            ),
            49 => 
            array (
                'sc_id' => 1050,
                'date_enrolled' => '2022-06-22',
                'student_id' => 292,
                'class_id' => 131,
            ),
            50 => 
            array (
                'sc_id' => 1051,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1154,
                'class_id' => 208,
            ),
            51 => 
            array (
                'sc_id' => 1052,
                'date_enrolled' => '2022-06-10',
                'student_id' => 428,
                'class_id' => 483,
            ),
            52 => 
            array (
                'sc_id' => 1053,
                'date_enrolled' => '2022-08-22',
                'student_id' => 968,
                'class_id' => 471,
            ),
            53 => 
            array (
                'sc_id' => 1054,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1905,
                'class_id' => 109,
            ),
            54 => 
            array (
                'sc_id' => 1055,
                'date_enrolled' => '2022-06-27',
                'student_id' => 247,
                'class_id' => 2,
            ),
            55 => 
            array (
                'sc_id' => 1056,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1093,
                'class_id' => 421,
            ),
            56 => 
            array (
                'sc_id' => 1057,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1432,
                'class_id' => 225,
            ),
            57 => 
            array (
                'sc_id' => 1058,
                'date_enrolled' => '2022-07-10',
                'student_id' => 55,
                'class_id' => 41,
            ),
            58 => 
            array (
                'sc_id' => 1059,
                'date_enrolled' => '2022-07-28',
                'student_id' => 198,
                'class_id' => 9,
            ),
            59 => 
            array (
                'sc_id' => 1060,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1987,
                'class_id' => 289,
            ),
            60 => 
            array (
                'sc_id' => 1061,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1883,
                'class_id' => 28,
            ),
            61 => 
            array (
                'sc_id' => 1062,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1761,
                'class_id' => 55,
            ),
            62 => 
            array (
                'sc_id' => 1063,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1469,
                'class_id' => 347,
            ),
            63 => 
            array (
                'sc_id' => 1064,
                'date_enrolled' => '2022-08-24',
                'student_id' => 983,
                'class_id' => 441,
            ),
            64 => 
            array (
                'sc_id' => 1065,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1855,
                'class_id' => 308,
            ),
            65 => 
            array (
                'sc_id' => 1066,
                'date_enrolled' => '2022-06-11',
                'student_id' => 672,
                'class_id' => 209,
            ),
            66 => 
            array (
                'sc_id' => 1067,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1655,
                'class_id' => 471,
            ),
            67 => 
            array (
                'sc_id' => 1068,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1166,
                'class_id' => 105,
            ),
            68 => 
            array (
                'sc_id' => 1069,
                'date_enrolled' => '2022-07-31',
                'student_id' => 537,
                'class_id' => 250,
            ),
            69 => 
            array (
                'sc_id' => 1070,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1220,
                'class_id' => 32,
            ),
            70 => 
            array (
                'sc_id' => 1071,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1919,
                'class_id' => 44,
            ),
            71 => 
            array (
                'sc_id' => 1072,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1386,
                'class_id' => 449,
            ),
            72 => 
            array (
                'sc_id' => 1073,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1751,
                'class_id' => 406,
            ),
            73 => 
            array (
                'sc_id' => 1074,
                'date_enrolled' => '2022-06-24',
                'student_id' => 990,
                'class_id' => 359,
            ),
            74 => 
            array (
                'sc_id' => 1075,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1233,
                'class_id' => 310,
            ),
            75 => 
            array (
                'sc_id' => 1076,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1972,
                'class_id' => 104,
            ),
            76 => 
            array (
                'sc_id' => 1077,
                'date_enrolled' => '2022-07-31',
                'student_id' => 181,
                'class_id' => 175,
            ),
            77 => 
            array (
                'sc_id' => 1078,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1056,
                'class_id' => 27,
            ),
            78 => 
            array (
                'sc_id' => 1079,
                'date_enrolled' => '2022-07-28',
                'student_id' => 849,
                'class_id' => 235,
            ),
            79 => 
            array (
                'sc_id' => 1080,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1040,
                'class_id' => 39,
            ),
            80 => 
            array (
                'sc_id' => 1081,
                'date_enrolled' => '2022-07-07',
                'student_id' => 467,
                'class_id' => 377,
            ),
            81 => 
            array (
                'sc_id' => 1082,
                'date_enrolled' => '2022-06-26',
                'student_id' => 560,
                'class_id' => 272,
            ),
            82 => 
            array (
                'sc_id' => 1083,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1362,
                'class_id' => 422,
            ),
            83 => 
            array (
                'sc_id' => 1084,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1562,
                'class_id' => 42,
            ),
            84 => 
            array (
                'sc_id' => 1085,
                'date_enrolled' => '2022-08-01',
                'student_id' => 711,
                'class_id' => 386,
            ),
            85 => 
            array (
                'sc_id' => 1086,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1970,
                'class_id' => 494,
            ),
            86 => 
            array (
                'sc_id' => 1087,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1564,
                'class_id' => 489,
            ),
            87 => 
            array (
                'sc_id' => 1088,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1166,
                'class_id' => 162,
            ),
            88 => 
            array (
                'sc_id' => 1089,
                'date_enrolled' => '2022-08-18',
                'student_id' => 991,
                'class_id' => 276,
            ),
            89 => 
            array (
                'sc_id' => 1090,
                'date_enrolled' => '2022-06-09',
                'student_id' => 733,
                'class_id' => 198,
            ),
            90 => 
            array (
                'sc_id' => 1091,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1726,
                'class_id' => 345,
            ),
            91 => 
            array (
                'sc_id' => 1092,
                'date_enrolled' => '2022-07-10',
                'student_id' => 242,
                'class_id' => 123,
            ),
            92 => 
            array (
                'sc_id' => 1093,
                'date_enrolled' => '2022-08-01',
                'student_id' => 448,
                'class_id' => 499,
            ),
            93 => 
            array (
                'sc_id' => 1094,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1049,
                'class_id' => 360,
            ),
            94 => 
            array (
                'sc_id' => 1095,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1844,
                'class_id' => 72,
            ),
            95 => 
            array (
                'sc_id' => 1096,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1582,
                'class_id' => 269,
            ),
            96 => 
            array (
                'sc_id' => 1097,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1158,
                'class_id' => 448,
            ),
            97 => 
            array (
                'sc_id' => 1098,
                'date_enrolled' => '2022-06-18',
                'student_id' => 535,
                'class_id' => 487,
            ),
            98 => 
            array (
                'sc_id' => 1099,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1328,
                'class_id' => 174,
            ),
            99 => 
            array (
                'sc_id' => 1100,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1082,
                'class_id' => 120,
            ),
            100 => 
            array (
                'sc_id' => 1101,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1930,
                'class_id' => 466,
            ),
            101 => 
            array (
                'sc_id' => 1102,
                'date_enrolled' => '2022-06-20',
                'student_id' => 245,
                'class_id' => 457,
            ),
            102 => 
            array (
                'sc_id' => 1103,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1722,
                'class_id' => 246,
            ),
            103 => 
            array (
                'sc_id' => 1104,
                'date_enrolled' => '2022-06-07',
                'student_id' => 168,
                'class_id' => 492,
            ),
            104 => 
            array (
                'sc_id' => 1105,
                'date_enrolled' => '2022-08-07',
                'student_id' => 84,
                'class_id' => 105,
            ),
            105 => 
            array (
                'sc_id' => 1106,
                'date_enrolled' => '2022-08-13',
                'student_id' => 57,
                'class_id' => 141,
            ),
            106 => 
            array (
                'sc_id' => 1107,
                'date_enrolled' => '2022-06-12',
                'student_id' => 173,
                'class_id' => 367,
            ),
            107 => 
            array (
                'sc_id' => 1108,
                'date_enrolled' => '2022-07-15',
                'student_id' => 531,
                'class_id' => 306,
            ),
            108 => 
            array (
                'sc_id' => 1109,
                'date_enrolled' => '2022-08-13',
                'student_id' => 321,
                'class_id' => 339,
            ),
            109 => 
            array (
                'sc_id' => 1110,
                'date_enrolled' => '2022-07-23',
                'student_id' => 319,
                'class_id' => 343,
            ),
            110 => 
            array (
                'sc_id' => 1111,
                'date_enrolled' => '2022-06-07',
                'student_id' => 290,
                'class_id' => 35,
            ),
            111 => 
            array (
                'sc_id' => 1112,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1744,
                'class_id' => 263,
            ),
            112 => 
            array (
                'sc_id' => 1113,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1908,
                'class_id' => 204,
            ),
            113 => 
            array (
                'sc_id' => 1114,
                'date_enrolled' => '2022-07-18',
                'student_id' => 282,
                'class_id' => 235,
            ),
            114 => 
            array (
                'sc_id' => 1115,
                'date_enrolled' => '2022-06-06',
                'student_id' => 408,
                'class_id' => 100,
            ),
            115 => 
            array (
                'sc_id' => 1116,
                'date_enrolled' => '2022-08-19',
                'student_id' => 144,
                'class_id' => 175,
            ),
            116 => 
            array (
                'sc_id' => 1117,
                'date_enrolled' => '2022-08-07',
                'student_id' => 573,
                'class_id' => 225,
            ),
            117 => 
            array (
                'sc_id' => 1118,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1211,
                'class_id' => 16,
            ),
            118 => 
            array (
                'sc_id' => 1119,
                'date_enrolled' => '2022-07-28',
                'student_id' => 368,
                'class_id' => 83,
            ),
            119 => 
            array (
                'sc_id' => 1120,
                'date_enrolled' => '2022-07-05',
                'student_id' => 450,
                'class_id' => 489,
            ),
            120 => 
            array (
                'sc_id' => 1121,
                'date_enrolled' => '2022-08-22',
                'student_id' => 565,
                'class_id' => 236,
            ),
            121 => 
            array (
                'sc_id' => 1122,
                'date_enrolled' => '2022-06-24',
                'student_id' => 19,
                'class_id' => 398,
            ),
            122 => 
            array (
                'sc_id' => 1123,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1647,
                'class_id' => 471,
            ),
            123 => 
            array (
                'sc_id' => 1124,
                'date_enrolled' => '2022-08-24',
                'student_id' => 790,
                'class_id' => 105,
            ),
            124 => 
            array (
                'sc_id' => 1125,
                'date_enrolled' => '2022-08-07',
                'student_id' => 335,
                'class_id' => 383,
            ),
            125 => 
            array (
                'sc_id' => 1126,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1516,
                'class_id' => 405,
            ),
            126 => 
            array (
                'sc_id' => 1127,
                'date_enrolled' => '2022-07-14',
                'student_id' => 733,
                'class_id' => 373,
            ),
            127 => 
            array (
                'sc_id' => 1128,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1447,
                'class_id' => 355,
            ),
            128 => 
            array (
                'sc_id' => 1129,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1995,
                'class_id' => 477,
            ),
            129 => 
            array (
                'sc_id' => 1130,
                'date_enrolled' => '2022-07-07',
                'student_id' => 336,
                'class_id' => 365,
            ),
            130 => 
            array (
                'sc_id' => 1131,
                'date_enrolled' => '2022-06-08',
                'student_id' => 22,
                'class_id' => 374,
            ),
            131 => 
            array (
                'sc_id' => 1132,
                'date_enrolled' => '2022-07-30',
                'student_id' => 543,
                'class_id' => 301,
            ),
            132 => 
            array (
                'sc_id' => 1133,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1861,
                'class_id' => 397,
            ),
            133 => 
            array (
                'sc_id' => 1134,
                'date_enrolled' => '2022-06-18',
                'student_id' => 942,
                'class_id' => 122,
            ),
            134 => 
            array (
                'sc_id' => 1135,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1844,
                'class_id' => 375,
            ),
            135 => 
            array (
                'sc_id' => 1136,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1699,
                'class_id' => 208,
            ),
            136 => 
            array (
                'sc_id' => 1137,
                'date_enrolled' => '2022-07-12',
                'student_id' => 883,
                'class_id' => 16,
            ),
            137 => 
            array (
                'sc_id' => 1138,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1539,
                'class_id' => 222,
            ),
            138 => 
            array (
                'sc_id' => 1139,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1646,
                'class_id' => 205,
            ),
            139 => 
            array (
                'sc_id' => 1140,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1679,
                'class_id' => 295,
            ),
            140 => 
            array (
                'sc_id' => 1141,
                'date_enrolled' => '2022-07-03',
                'student_id' => 539,
                'class_id' => 71,
            ),
            141 => 
            array (
                'sc_id' => 1142,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1844,
                'class_id' => 479,
            ),
            142 => 
            array (
                'sc_id' => 1143,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1349,
                'class_id' => 111,
            ),
            143 => 
            array (
                'sc_id' => 1144,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1248,
                'class_id' => 414,
            ),
            144 => 
            array (
                'sc_id' => 1145,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1095,
                'class_id' => 373,
            ),
            145 => 
            array (
                'sc_id' => 1146,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1775,
                'class_id' => 273,
            ),
            146 => 
            array (
                'sc_id' => 1147,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1337,
                'class_id' => 477,
            ),
            147 => 
            array (
                'sc_id' => 1148,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1186,
                'class_id' => 186,
            ),
            148 => 
            array (
                'sc_id' => 1149,
                'date_enrolled' => '2022-06-24',
                'student_id' => 264,
                'class_id' => 96,
            ),
            149 => 
            array (
                'sc_id' => 1150,
                'date_enrolled' => '2022-08-05',
                'student_id' => 759,
                'class_id' => 97,
            ),
            150 => 
            array (
                'sc_id' => 1151,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1788,
                'class_id' => 50,
            ),
            151 => 
            array (
                'sc_id' => 1152,
                'date_enrolled' => '2022-06-25',
                'student_id' => 944,
                'class_id' => 168,
            ),
            152 => 
            array (
                'sc_id' => 1153,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1733,
                'class_id' => 179,
            ),
            153 => 
            array (
                'sc_id' => 1154,
                'date_enrolled' => '2022-08-12',
                'student_id' => 534,
                'class_id' => 129,
            ),
            154 => 
            array (
                'sc_id' => 1155,
                'date_enrolled' => '2022-08-31',
                'student_id' => 81,
                'class_id' => 307,
            ),
            155 => 
            array (
                'sc_id' => 1156,
                'date_enrolled' => '2022-07-18',
                'student_id' => 18,
                'class_id' => 178,
            ),
            156 => 
            array (
                'sc_id' => 1157,
                'date_enrolled' => '2022-08-16',
                'student_id' => 46,
                'class_id' => 203,
            ),
            157 => 
            array (
                'sc_id' => 1158,
                'date_enrolled' => '2022-06-14',
                'student_id' => 252,
                'class_id' => 462,
            ),
            158 => 
            array (
                'sc_id' => 1159,
                'date_enrolled' => '2022-08-09',
                'student_id' => 71,
                'class_id' => 461,
            ),
            159 => 
            array (
                'sc_id' => 1160,
                'date_enrolled' => '2022-07-23',
                'student_id' => 591,
                'class_id' => 295,
            ),
            160 => 
            array (
                'sc_id' => 1161,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1853,
                'class_id' => 419,
            ),
            161 => 
            array (
                'sc_id' => 1162,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1631,
                'class_id' => 144,
            ),
            162 => 
            array (
                'sc_id' => 1163,
                'date_enrolled' => '2022-08-06',
                'student_id' => 784,
                'class_id' => 220,
            ),
            163 => 
            array (
                'sc_id' => 1164,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1546,
                'class_id' => 290,
            ),
            164 => 
            array (
                'sc_id' => 1165,
                'date_enrolled' => '2022-07-15',
                'student_id' => 427,
                'class_id' => 112,
            ),
            165 => 
            array (
                'sc_id' => 1166,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1057,
                'class_id' => 59,
            ),
            166 => 
            array (
                'sc_id' => 1167,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1893,
                'class_id' => 160,
            ),
            167 => 
            array (
                'sc_id' => 1168,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1793,
                'class_id' => 299,
            ),
            168 => 
            array (
                'sc_id' => 1169,
                'date_enrolled' => '2022-07-30',
                'student_id' => 759,
                'class_id' => 272,
            ),
            169 => 
            array (
                'sc_id' => 1170,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1240,
                'class_id' => 309,
            ),
            170 => 
            array (
                'sc_id' => 1171,
                'date_enrolled' => '2022-06-06',
                'student_id' => 992,
                'class_id' => 119,
            ),
            171 => 
            array (
                'sc_id' => 1172,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1039,
                'class_id' => 425,
            ),
            172 => 
            array (
                'sc_id' => 1173,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1914,
                'class_id' => 139,
            ),
            173 => 
            array (
                'sc_id' => 1174,
                'date_enrolled' => '2022-07-28',
                'student_id' => 773,
                'class_id' => 136,
            ),
            174 => 
            array (
                'sc_id' => 1175,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1136,
                'class_id' => 79,
            ),
            175 => 
            array (
                'sc_id' => 1176,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1030,
                'class_id' => 207,
            ),
            176 => 
            array (
                'sc_id' => 1177,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1205,
                'class_id' => 88,
            ),
            177 => 
            array (
                'sc_id' => 1178,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1831,
                'class_id' => 148,
            ),
            178 => 
            array (
                'sc_id' => 1179,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1261,
                'class_id' => 290,
            ),
            179 => 
            array (
                'sc_id' => 1180,
                'date_enrolled' => '2022-08-08',
                'student_id' => 283,
                'class_id' => 231,
            ),
            180 => 
            array (
                'sc_id' => 1181,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1796,
                'class_id' => 258,
            ),
            181 => 
            array (
                'sc_id' => 1182,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1371,
                'class_id' => 404,
            ),
            182 => 
            array (
                'sc_id' => 1183,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1521,
                'class_id' => 68,
            ),
            183 => 
            array (
                'sc_id' => 1184,
                'date_enrolled' => '2022-08-12',
                'student_id' => 88,
                'class_id' => 374,
            ),
            184 => 
            array (
                'sc_id' => 1185,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1772,
                'class_id' => 17,
            ),
            185 => 
            array (
                'sc_id' => 1186,
                'date_enrolled' => '2022-08-14',
                'student_id' => 65,
                'class_id' => 302,
            ),
            186 => 
            array (
                'sc_id' => 1187,
                'date_enrolled' => '2022-08-25',
                'student_id' => 248,
                'class_id' => 350,
            ),
            187 => 
            array (
                'sc_id' => 1188,
                'date_enrolled' => '2022-08-22',
                'student_id' => 348,
                'class_id' => 260,
            ),
            188 => 
            array (
                'sc_id' => 1189,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1077,
                'class_id' => 363,
            ),
            189 => 
            array (
                'sc_id' => 1190,
                'date_enrolled' => '2022-08-20',
                'student_id' => 111,
                'class_id' => 49,
            ),
            190 => 
            array (
                'sc_id' => 1191,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1423,
                'class_id' => 222,
            ),
            191 => 
            array (
                'sc_id' => 1192,
                'date_enrolled' => '2022-07-16',
                'student_id' => 945,
                'class_id' => 208,
            ),
            192 => 
            array (
                'sc_id' => 1193,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1749,
                'class_id' => 481,
            ),
            193 => 
            array (
                'sc_id' => 1194,
                'date_enrolled' => '2022-07-02',
                'student_id' => 899,
                'class_id' => 456,
            ),
            194 => 
            array (
                'sc_id' => 1195,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1344,
                'class_id' => 36,
            ),
            195 => 
            array (
                'sc_id' => 1196,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1020,
                'class_id' => 492,
            ),
            196 => 
            array (
                'sc_id' => 1197,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1654,
                'class_id' => 487,
            ),
            197 => 
            array (
                'sc_id' => 1198,
                'date_enrolled' => '2022-08-02',
                'student_id' => 762,
                'class_id' => 290,
            ),
            198 => 
            array (
                'sc_id' => 1199,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1673,
                'class_id' => 358,
            ),
            199 => 
            array (
                'sc_id' => 1200,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1956,
                'class_id' => 284,
            ),
            200 => 
            array (
                'sc_id' => 1201,
                'date_enrolled' => '2022-06-04',
                'student_id' => 493,
                'class_id' => 242,
            ),
            201 => 
            array (
                'sc_id' => 1202,
                'date_enrolled' => '2022-06-20',
                'student_id' => 827,
                'class_id' => 6,
            ),
            202 => 
            array (
                'sc_id' => 1203,
                'date_enrolled' => '2022-06-13',
                'student_id' => 536,
                'class_id' => 454,
            ),
            203 => 
            array (
                'sc_id' => 1204,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1153,
                'class_id' => 106,
            ),
            204 => 
            array (
                'sc_id' => 1205,
                'date_enrolled' => '2022-08-13',
                'student_id' => 265,
                'class_id' => 398,
            ),
            205 => 
            array (
                'sc_id' => 1206,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1508,
                'class_id' => 90,
            ),
            206 => 
            array (
                'sc_id' => 1207,
                'date_enrolled' => '2022-06-20',
                'student_id' => 174,
                'class_id' => 445,
            ),
            207 => 
            array (
                'sc_id' => 1208,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1568,
                'class_id' => 258,
            ),
            208 => 
            array (
                'sc_id' => 1209,
                'date_enrolled' => '2022-08-27',
                'student_id' => 497,
                'class_id' => 334,
            ),
            209 => 
            array (
                'sc_id' => 1210,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1520,
                'class_id' => 249,
            ),
            210 => 
            array (
                'sc_id' => 1211,
                'date_enrolled' => '2022-07-02',
                'student_id' => 863,
                'class_id' => 49,
            ),
            211 => 
            array (
                'sc_id' => 1212,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1919,
                'class_id' => 319,
            ),
            212 => 
            array (
                'sc_id' => 1213,
                'date_enrolled' => '2022-07-23',
                'student_id' => 68,
                'class_id' => 389,
            ),
            213 => 
            array (
                'sc_id' => 1214,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1281,
                'class_id' => 34,
            ),
            214 => 
            array (
                'sc_id' => 1215,
                'date_enrolled' => '2022-06-25',
                'student_id' => 523,
                'class_id' => 226,
            ),
            215 => 
            array (
                'sc_id' => 1216,
                'date_enrolled' => '2022-07-23',
                'student_id' => 852,
                'class_id' => 330,
            ),
            216 => 
            array (
                'sc_id' => 1217,
                'date_enrolled' => '2022-08-10',
                'student_id' => 638,
                'class_id' => 397,
            ),
            217 => 
            array (
                'sc_id' => 1218,
                'date_enrolled' => '2022-06-15',
                'student_id' => 507,
                'class_id' => 34,
            ),
            218 => 
            array (
                'sc_id' => 1219,
                'date_enrolled' => '2022-08-13',
                'student_id' => 295,
                'class_id' => 411,
            ),
            219 => 
            array (
                'sc_id' => 1220,
                'date_enrolled' => '2022-08-29',
                'student_id' => 130,
                'class_id' => 372,
            ),
            220 => 
            array (
                'sc_id' => 1221,
                'date_enrolled' => '2022-08-12',
                'student_id' => 892,
                'class_id' => 191,
            ),
            221 => 
            array (
                'sc_id' => 1222,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1321,
                'class_id' => 430,
            ),
            222 => 
            array (
                'sc_id' => 1223,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1883,
                'class_id' => 332,
            ),
            223 => 
            array (
                'sc_id' => 1224,
                'date_enrolled' => '2022-06-27',
                'student_id' => 878,
                'class_id' => 491,
            ),
            224 => 
            array (
                'sc_id' => 1225,
                'date_enrolled' => '2022-08-18',
                'student_id' => 114,
                'class_id' => 477,
            ),
            225 => 
            array (
                'sc_id' => 1226,
                'date_enrolled' => '2022-06-19',
                'student_id' => 815,
                'class_id' => 423,
            ),
            226 => 
            array (
                'sc_id' => 1227,
                'date_enrolled' => '2022-06-18',
                'student_id' => 708,
                'class_id' => 429,
            ),
            227 => 
            array (
                'sc_id' => 1228,
                'date_enrolled' => '2022-06-24',
                'student_id' => 757,
                'class_id' => 240,
            ),
            228 => 
            array (
                'sc_id' => 1229,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1579,
                'class_id' => 413,
            ),
            229 => 
            array (
                'sc_id' => 1230,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1667,
                'class_id' => 380,
            ),
            230 => 
            array (
                'sc_id' => 1231,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1263,
                'class_id' => 491,
            ),
            231 => 
            array (
                'sc_id' => 1232,
                'date_enrolled' => '2022-08-25',
                'student_id' => 41,
                'class_id' => 422,
            ),
            232 => 
            array (
                'sc_id' => 1233,
                'date_enrolled' => '2022-08-07',
                'student_id' => 53,
                'class_id' => 111,
            ),
            233 => 
            array (
                'sc_id' => 1234,
                'date_enrolled' => '2022-06-25',
                'student_id' => 935,
                'class_id' => 91,
            ),
            234 => 
            array (
                'sc_id' => 1235,
                'date_enrolled' => '2022-06-18',
                'student_id' => 549,
                'class_id' => 242,
            ),
            235 => 
            array (
                'sc_id' => 1236,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1752,
                'class_id' => 345,
            ),
            236 => 
            array (
                'sc_id' => 1237,
                'date_enrolled' => '2022-08-11',
                'student_id' => 649,
                'class_id' => 42,
            ),
            237 => 
            array (
                'sc_id' => 1238,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1284,
                'class_id' => 186,
            ),
            238 => 
            array (
                'sc_id' => 1239,
                'date_enrolled' => '2022-08-30',
                'student_id' => 587,
                'class_id' => 174,
            ),
            239 => 
            array (
                'sc_id' => 1240,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1667,
                'class_id' => 312,
            ),
            240 => 
            array (
                'sc_id' => 1241,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1780,
                'class_id' => 221,
            ),
            241 => 
            array (
                'sc_id' => 1242,
                'date_enrolled' => '2022-08-02',
                'student_id' => 639,
                'class_id' => 395,
            ),
            242 => 
            array (
                'sc_id' => 1243,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1159,
                'class_id' => 379,
            ),
            243 => 
            array (
                'sc_id' => 1244,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1487,
                'class_id' => 108,
            ),
            244 => 
            array (
                'sc_id' => 1245,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1095,
                'class_id' => 200,
            ),
            245 => 
            array (
                'sc_id' => 1246,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1987,
                'class_id' => 373,
            ),
            246 => 
            array (
                'sc_id' => 1247,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1926,
                'class_id' => 343,
            ),
            247 => 
            array (
                'sc_id' => 1248,
                'date_enrolled' => '2022-08-21',
                'student_id' => 240,
                'class_id' => 85,
            ),
            248 => 
            array (
                'sc_id' => 1249,
                'date_enrolled' => '2022-07-28',
                'student_id' => 830,
                'class_id' => 189,
            ),
            249 => 
            array (
                'sc_id' => 1250,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1347,
                'class_id' => 257,
            ),
            250 => 
            array (
                'sc_id' => 1251,
                'date_enrolled' => '2022-06-15',
                'student_id' => 728,
                'class_id' => 487,
            ),
            251 => 
            array (
                'sc_id' => 1252,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1489,
                'class_id' => 127,
            ),
            252 => 
            array (
                'sc_id' => 1253,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1364,
                'class_id' => 23,
            ),
            253 => 
            array (
                'sc_id' => 1254,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1997,
                'class_id' => 147,
            ),
            254 => 
            array (
                'sc_id' => 1255,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1005,
                'class_id' => 283,
            ),
            255 => 
            array (
                'sc_id' => 1256,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1824,
                'class_id' => 443,
            ),
            256 => 
            array (
                'sc_id' => 1257,
                'date_enrolled' => '2022-06-29',
                'student_id' => 881,
                'class_id' => 161,
            ),
            257 => 
            array (
                'sc_id' => 1258,
                'date_enrolled' => '2022-06-04',
                'student_id' => 565,
                'class_id' => 132,
            ),
            258 => 
            array (
                'sc_id' => 1259,
                'date_enrolled' => '2022-06-22',
                'student_id' => 264,
                'class_id' => 362,
            ),
            259 => 
            array (
                'sc_id' => 1260,
                'date_enrolled' => '2022-06-09',
                'student_id' => 228,
                'class_id' => 49,
            ),
            260 => 
            array (
                'sc_id' => 1261,
                'date_enrolled' => '2022-06-09',
                'student_id' => 148,
                'class_id' => 350,
            ),
            261 => 
            array (
                'sc_id' => 1262,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1656,
                'class_id' => 361,
            ),
            262 => 
            array (
                'sc_id' => 1263,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1874,
                'class_id' => 164,
            ),
            263 => 
            array (
                'sc_id' => 1264,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1934,
                'class_id' => 475,
            ),
            264 => 
            array (
                'sc_id' => 1265,
                'date_enrolled' => '2022-06-13',
                'student_id' => 999,
                'class_id' => 333,
            ),
            265 => 
            array (
                'sc_id' => 1266,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1770,
                'class_id' => 48,
            ),
            266 => 
            array (
                'sc_id' => 1267,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1113,
                'class_id' => 322,
            ),
            267 => 
            array (
                'sc_id' => 1268,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1172,
                'class_id' => 146,
            ),
            268 => 
            array (
                'sc_id' => 1269,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1445,
                'class_id' => 0,
            ),
            269 => 
            array (
                'sc_id' => 1270,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1722,
                'class_id' => 20,
            ),
            270 => 
            array (
                'sc_id' => 1271,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1534,
                'class_id' => 52,
            ),
            271 => 
            array (
                'sc_id' => 1272,
                'date_enrolled' => '2022-06-12',
                'student_id' => 938,
                'class_id' => 120,
            ),
            272 => 
            array (
                'sc_id' => 1273,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1215,
                'class_id' => 148,
            ),
            273 => 
            array (
                'sc_id' => 1274,
                'date_enrolled' => '2022-06-26',
                'student_id' => 158,
                'class_id' => 259,
            ),
            274 => 
            array (
                'sc_id' => 1275,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1347,
                'class_id' => 393,
            ),
            275 => 
            array (
                'sc_id' => 1276,
                'date_enrolled' => '2022-08-30',
                'student_id' => 631,
                'class_id' => 333,
            ),
            276 => 
            array (
                'sc_id' => 1277,
                'date_enrolled' => '2022-06-13',
                'student_id' => 840,
                'class_id' => 455,
            ),
            277 => 
            array (
                'sc_id' => 1278,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1870,
                'class_id' => 12,
            ),
            278 => 
            array (
                'sc_id' => 1279,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1976,
                'class_id' => 315,
            ),
            279 => 
            array (
                'sc_id' => 1280,
                'date_enrolled' => '2022-06-01',
                'student_id' => 995,
                'class_id' => 206,
            ),
            280 => 
            array (
                'sc_id' => 1281,
                'date_enrolled' => '2022-06-01',
                'student_id' => 206,
                'class_id' => 64,
            ),
            281 => 
            array (
                'sc_id' => 1282,
                'date_enrolled' => '2022-06-20',
                'student_id' => 206,
                'class_id' => 187,
            ),
            282 => 
            array (
                'sc_id' => 1283,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1646,
                'class_id' => 352,
            ),
            283 => 
            array (
                'sc_id' => 1284,
                'date_enrolled' => '2022-08-10',
                'student_id' => 936,
                'class_id' => 253,
            ),
            284 => 
            array (
                'sc_id' => 1285,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1195,
                'class_id' => 106,
            ),
            285 => 
            array (
                'sc_id' => 1286,
                'date_enrolled' => '2022-08-01',
                'student_id' => 920,
                'class_id' => 262,
            ),
            286 => 
            array (
                'sc_id' => 1287,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1167,
                'class_id' => 240,
            ),
            287 => 
            array (
                'sc_id' => 1288,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1790,
                'class_id' => 475,
            ),
            288 => 
            array (
                'sc_id' => 1289,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1091,
                'class_id' => 42,
            ),
            289 => 
            array (
                'sc_id' => 1290,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1395,
                'class_id' => 179,
            ),
            290 => 
            array (
                'sc_id' => 1291,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1888,
                'class_id' => 498,
            ),
            291 => 
            array (
                'sc_id' => 1292,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1194,
                'class_id' => 283,
            ),
            292 => 
            array (
                'sc_id' => 1293,
                'date_enrolled' => '2022-06-19',
                'student_id' => 991,
                'class_id' => 268,
            ),
            293 => 
            array (
                'sc_id' => 1294,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1816,
                'class_id' => 49,
            ),
            294 => 
            array (
                'sc_id' => 1295,
                'date_enrolled' => '2022-06-03',
                'student_id' => 293,
                'class_id' => 172,
            ),
            295 => 
            array (
                'sc_id' => 1296,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1119,
                'class_id' => 134,
            ),
            296 => 
            array (
                'sc_id' => 1297,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1806,
                'class_id' => 157,
            ),
            297 => 
            array (
                'sc_id' => 1298,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1958,
                'class_id' => 484,
            ),
            298 => 
            array (
                'sc_id' => 1299,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1773,
                'class_id' => 56,
            ),
            299 => 
            array (
                'sc_id' => 1300,
                'date_enrolled' => '2022-07-29',
                'student_id' => 351,
                'class_id' => 156,
            ),
            300 => 
            array (
                'sc_id' => 1301,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1738,
                'class_id' => 219,
            ),
            301 => 
            array (
                'sc_id' => 1302,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1359,
                'class_id' => 25,
            ),
            302 => 
            array (
                'sc_id' => 1303,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1764,
                'class_id' => 424,
            ),
            303 => 
            array (
                'sc_id' => 1304,
                'date_enrolled' => '2022-08-25',
                'student_id' => 359,
                'class_id' => 303,
            ),
            304 => 
            array (
                'sc_id' => 1305,
                'date_enrolled' => '2022-08-13',
                'student_id' => 826,
                'class_id' => 312,
            ),
            305 => 
            array (
                'sc_id' => 1306,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1648,
                'class_id' => 280,
            ),
            306 => 
            array (
                'sc_id' => 1307,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1049,
                'class_id' => 234,
            ),
            307 => 
            array (
                'sc_id' => 1308,
                'date_enrolled' => '2022-07-10',
                'student_id' => 477,
                'class_id' => 299,
            ),
            308 => 
            array (
                'sc_id' => 1309,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1962,
                'class_id' => 84,
            ),
            309 => 
            array (
                'sc_id' => 1310,
                'date_enrolled' => '2022-07-08',
                'student_id' => 344,
                'class_id' => 406,
            ),
            310 => 
            array (
                'sc_id' => 1311,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1806,
                'class_id' => 54,
            ),
            311 => 
            array (
                'sc_id' => 1312,
                'date_enrolled' => '2022-07-22',
                'student_id' => 297,
                'class_id' => 488,
            ),
            312 => 
            array (
                'sc_id' => 1313,
                'date_enrolled' => '2022-07-10',
                'student_id' => 923,
                'class_id' => 411,
            ),
            313 => 
            array (
                'sc_id' => 1314,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1903,
                'class_id' => 151,
            ),
            314 => 
            array (
                'sc_id' => 1315,
                'date_enrolled' => '2022-06-08',
                'student_id' => 310,
                'class_id' => 175,
            ),
            315 => 
            array (
                'sc_id' => 1316,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1318,
                'class_id' => 291,
            ),
            316 => 
            array (
                'sc_id' => 1317,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1532,
                'class_id' => 339,
            ),
            317 => 
            array (
                'sc_id' => 1318,
                'date_enrolled' => '2022-06-17',
                'student_id' => 535,
                'class_id' => 165,
            ),
            318 => 
            array (
                'sc_id' => 1319,
                'date_enrolled' => '2022-06-02',
                'student_id' => 399,
                'class_id' => 143,
            ),
            319 => 
            array (
                'sc_id' => 1320,
                'date_enrolled' => '2022-06-20',
                'student_id' => 11,
                'class_id' => 259,
            ),
            320 => 
            array (
                'sc_id' => 1321,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1680,
                'class_id' => 305,
            ),
            321 => 
            array (
                'sc_id' => 1322,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1134,
                'class_id' => 236,
            ),
            322 => 
            array (
                'sc_id' => 1323,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1046,
                'class_id' => 469,
            ),
            323 => 
            array (
                'sc_id' => 1324,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1294,
                'class_id' => 181,
            ),
            324 => 
            array (
                'sc_id' => 1325,
                'date_enrolled' => '2022-06-02',
                'student_id' => 470,
                'class_id' => 13,
            ),
            325 => 
            array (
                'sc_id' => 1326,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1306,
                'class_id' => 99,
            ),
            326 => 
            array (
                'sc_id' => 1327,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1680,
                'class_id' => 26,
            ),
            327 => 
            array (
                'sc_id' => 1328,
                'date_enrolled' => '2022-07-05',
                'student_id' => 847,
                'class_id' => 371,
            ),
            328 => 
            array (
                'sc_id' => 1329,
                'date_enrolled' => '2022-08-06',
                'student_id' => 383,
                'class_id' => 37,
            ),
            329 => 
            array (
                'sc_id' => 1330,
                'date_enrolled' => '2022-06-11',
                'student_id' => 349,
                'class_id' => 119,
            ),
            330 => 
            array (
                'sc_id' => 1331,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1235,
                'class_id' => 346,
            ),
            331 => 
            array (
                'sc_id' => 1332,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1578,
                'class_id' => 435,
            ),
            332 => 
            array (
                'sc_id' => 1333,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1903,
                'class_id' => 13,
            ),
            333 => 
            array (
                'sc_id' => 1334,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1617,
                'class_id' => 88,
            ),
            334 => 
            array (
                'sc_id' => 1335,
                'date_enrolled' => '2022-08-23',
                'student_id' => 615,
                'class_id' => 211,
            ),
            335 => 
            array (
                'sc_id' => 1336,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1298,
                'class_id' => 134,
            ),
            336 => 
            array (
                'sc_id' => 1337,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1831,
                'class_id' => 471,
            ),
            337 => 
            array (
                'sc_id' => 1338,
                'date_enrolled' => '2022-08-23',
                'student_id' => 302,
                'class_id' => 464,
            ),
            338 => 
            array (
                'sc_id' => 1339,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1721,
                'class_id' => 429,
            ),
            339 => 
            array (
                'sc_id' => 1340,
                'date_enrolled' => '2022-06-23',
                'student_id' => 96,
                'class_id' => 3,
            ),
            340 => 
            array (
                'sc_id' => 1341,
                'date_enrolled' => '2022-06-13',
                'student_id' => 706,
                'class_id' => 317,
            ),
            341 => 
            array (
                'sc_id' => 1342,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1962,
                'class_id' => 213,
            ),
            342 => 
            array (
                'sc_id' => 1343,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1052,
                'class_id' => 135,
            ),
            343 => 
            array (
                'sc_id' => 1344,
                'date_enrolled' => '2022-08-15',
                'student_id' => 875,
                'class_id' => 27,
            ),
            344 => 
            array (
                'sc_id' => 1345,
                'date_enrolled' => '2022-08-06',
                'student_id' => 345,
                'class_id' => 146,
            ),
            345 => 
            array (
                'sc_id' => 1346,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1187,
                'class_id' => 371,
            ),
            346 => 
            array (
                'sc_id' => 1347,
                'date_enrolled' => '2022-08-22',
                'student_id' => 149,
                'class_id' => 383,
            ),
            347 => 
            array (
                'sc_id' => 1348,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1994,
                'class_id' => 118,
            ),
            348 => 
            array (
                'sc_id' => 1349,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1305,
                'class_id' => 123,
            ),
            349 => 
            array (
                'sc_id' => 1350,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1299,
                'class_id' => 349,
            ),
            350 => 
            array (
                'sc_id' => 1351,
                'date_enrolled' => '2022-07-10',
                'student_id' => 470,
                'class_id' => 114,
            ),
            351 => 
            array (
                'sc_id' => 1352,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1467,
                'class_id' => 72,
            ),
            352 => 
            array (
                'sc_id' => 1353,
                'date_enrolled' => '2022-07-20',
                'student_id' => 894,
                'class_id' => 152,
            ),
            353 => 
            array (
                'sc_id' => 1354,
                'date_enrolled' => '2022-06-30',
                'student_id' => 37,
                'class_id' => 189,
            ),
            354 => 
            array (
                'sc_id' => 1355,
                'date_enrolled' => '2022-07-14',
                'student_id' => 372,
                'class_id' => 26,
            ),
            355 => 
            array (
                'sc_id' => 1356,
                'date_enrolled' => '2022-08-30',
                'student_id' => 287,
                'class_id' => 274,
            ),
            356 => 
            array (
                'sc_id' => 1357,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1189,
                'class_id' => 170,
            ),
            357 => 
            array (
                'sc_id' => 1358,
                'date_enrolled' => '2022-06-20',
                'student_id' => 264,
                'class_id' => 134,
            ),
            358 => 
            array (
                'sc_id' => 1359,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1339,
                'class_id' => 374,
            ),
            359 => 
            array (
                'sc_id' => 1360,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1893,
                'class_id' => 331,
            ),
            360 => 
            array (
                'sc_id' => 1361,
                'date_enrolled' => '2022-07-09',
                'student_id' => 36,
                'class_id' => 144,
            ),
            361 => 
            array (
                'sc_id' => 1362,
                'date_enrolled' => '2022-06-09',
                'student_id' => 715,
                'class_id' => 202,
            ),
            362 => 
            array (
                'sc_id' => 1363,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1200,
                'class_id' => 377,
            ),
            363 => 
            array (
                'sc_id' => 1364,
                'date_enrolled' => '2022-06-03',
                'student_id' => 118,
                'class_id' => 179,
            ),
            364 => 
            array (
                'sc_id' => 1365,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1448,
                'class_id' => 290,
            ),
            365 => 
            array (
                'sc_id' => 1366,
                'date_enrolled' => '2022-07-14',
                'student_id' => 517,
                'class_id' => 307,
            ),
            366 => 
            array (
                'sc_id' => 1367,
                'date_enrolled' => '2022-06-20',
                'student_id' => 164,
                'class_id' => 377,
            ),
            367 => 
            array (
                'sc_id' => 1368,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1978,
                'class_id' => 76,
            ),
            368 => 
            array (
                'sc_id' => 1369,
                'date_enrolled' => '2022-08-21',
                'student_id' => 971,
                'class_id' => 117,
            ),
            369 => 
            array (
                'sc_id' => 1370,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1058,
                'class_id' => 483,
            ),
            370 => 
            array (
                'sc_id' => 1371,
                'date_enrolled' => '2022-07-16',
                'student_id' => 124,
                'class_id' => 414,
            ),
            371 => 
            array (
                'sc_id' => 1372,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1728,
                'class_id' => 302,
            ),
            372 => 
            array (
                'sc_id' => 1373,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1485,
                'class_id' => 158,
            ),
            373 => 
            array (
                'sc_id' => 1374,
                'date_enrolled' => '2022-06-19',
                'student_id' => 637,
                'class_id' => 82,
            ),
            374 => 
            array (
                'sc_id' => 1375,
                'date_enrolled' => '2022-07-21',
                'student_id' => 649,
                'class_id' => 450,
            ),
            375 => 
            array (
                'sc_id' => 1376,
                'date_enrolled' => '2022-06-17',
                'student_id' => 896,
                'class_id' => 175,
            ),
            376 => 
            array (
                'sc_id' => 1377,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1818,
                'class_id' => 405,
            ),
            377 => 
            array (
                'sc_id' => 1378,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1950,
                'class_id' => 243,
            ),
            378 => 
            array (
                'sc_id' => 1379,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1061,
                'class_id' => 123,
            ),
            379 => 
            array (
                'sc_id' => 1380,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1613,
                'class_id' => 129,
            ),
            380 => 
            array (
                'sc_id' => 1381,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1845,
                'class_id' => 471,
            ),
            381 => 
            array (
                'sc_id' => 1382,
                'date_enrolled' => '2022-08-15',
                'student_id' => 454,
                'class_id' => 344,
            ),
            382 => 
            array (
                'sc_id' => 1383,
                'date_enrolled' => '2022-07-10',
                'student_id' => 525,
                'class_id' => 241,
            ),
            383 => 
            array (
                'sc_id' => 1384,
                'date_enrolled' => '2022-07-08',
                'student_id' => 423,
                'class_id' => 376,
            ),
            384 => 
            array (
                'sc_id' => 1385,
                'date_enrolled' => '2022-07-25',
                'student_id' => 936,
                'class_id' => 17,
            ),
            385 => 
            array (
                'sc_id' => 1386,
                'date_enrolled' => '2022-06-27',
                'student_id' => 131,
                'class_id' => 159,
            ),
            386 => 
            array (
                'sc_id' => 1387,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1676,
                'class_id' => 15,
            ),
            387 => 
            array (
                'sc_id' => 1388,
                'date_enrolled' => '2022-07-18',
                'student_id' => 22,
                'class_id' => 411,
            ),
            388 => 
            array (
                'sc_id' => 1389,
                'date_enrolled' => '2022-07-03',
                'student_id' => 596,
                'class_id' => 438,
            ),
            389 => 
            array (
                'sc_id' => 1390,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1048,
                'class_id' => 262,
            ),
            390 => 
            array (
                'sc_id' => 1391,
                'date_enrolled' => '2022-07-28',
                'student_id' => 311,
                'class_id' => 368,
            ),
            391 => 
            array (
                'sc_id' => 1392,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1375,
                'class_id' => 175,
            ),
            392 => 
            array (
                'sc_id' => 1393,
                'date_enrolled' => '2022-06-07',
                'student_id' => 893,
                'class_id' => 16,
            ),
            393 => 
            array (
                'sc_id' => 1394,
                'date_enrolled' => '2022-08-26',
                'student_id' => 738,
                'class_id' => 43,
            ),
            394 => 
            array (
                'sc_id' => 1395,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1114,
                'class_id' => 431,
            ),
            395 => 
            array (
                'sc_id' => 1396,
                'date_enrolled' => '2022-07-18',
                'student_id' => 838,
                'class_id' => 259,
            ),
            396 => 
            array (
                'sc_id' => 1397,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1896,
                'class_id' => 204,
            ),
            397 => 
            array (
                'sc_id' => 1398,
                'date_enrolled' => '2022-06-13',
                'student_id' => 263,
                'class_id' => 495,
            ),
            398 => 
            array (
                'sc_id' => 1399,
                'date_enrolled' => '2022-06-10',
                'student_id' => 345,
                'class_id' => 481,
            ),
            399 => 
            array (
                'sc_id' => 1400,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1595,
                'class_id' => 494,
            ),
            400 => 
            array (
                'sc_id' => 1401,
                'date_enrolled' => '2022-07-22',
                'student_id' => 513,
                'class_id' => 110,
            ),
            401 => 
            array (
                'sc_id' => 1402,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1078,
                'class_id' => 367,
            ),
            402 => 
            array (
                'sc_id' => 1403,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1471,
                'class_id' => 214,
            ),
            403 => 
            array (
                'sc_id' => 1404,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1082,
                'class_id' => 174,
            ),
            404 => 
            array (
                'sc_id' => 1405,
                'date_enrolled' => '2022-06-21',
                'student_id' => 571,
                'class_id' => 300,
            ),
            405 => 
            array (
                'sc_id' => 1406,
                'date_enrolled' => '2022-07-16',
                'student_id' => 647,
                'class_id' => 10,
            ),
            406 => 
            array (
                'sc_id' => 1407,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1198,
                'class_id' => 108,
            ),
            407 => 
            array (
                'sc_id' => 1408,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1750,
                'class_id' => 90,
            ),
            408 => 
            array (
                'sc_id' => 1409,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1262,
                'class_id' => 424,
            ),
            409 => 
            array (
                'sc_id' => 1410,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1064,
                'class_id' => 95,
            ),
            410 => 
            array (
                'sc_id' => 1411,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1130,
                'class_id' => 432,
            ),
            411 => 
            array (
                'sc_id' => 1412,
                'date_enrolled' => '2022-07-12',
                'student_id' => 195,
                'class_id' => 286,
            ),
            412 => 
            array (
                'sc_id' => 1413,
                'date_enrolled' => '2022-06-07',
                'student_id' => 462,
                'class_id' => 218,
            ),
            413 => 
            array (
                'sc_id' => 1414,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1195,
                'class_id' => 67,
            ),
            414 => 
            array (
                'sc_id' => 1415,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1926,
                'class_id' => 178,
            ),
            415 => 
            array (
                'sc_id' => 1416,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1744,
                'class_id' => 230,
            ),
            416 => 
            array (
                'sc_id' => 1417,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1666,
                'class_id' => 302,
            ),
            417 => 
            array (
                'sc_id' => 1418,
                'date_enrolled' => '2022-06-15',
                'student_id' => 777,
                'class_id' => 274,
            ),
            418 => 
            array (
                'sc_id' => 1419,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1060,
                'class_id' => 78,
            ),
            419 => 
            array (
                'sc_id' => 1420,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1678,
                'class_id' => 287,
            ),
            420 => 
            array (
                'sc_id' => 1421,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1210,
                'class_id' => 138,
            ),
            421 => 
            array (
                'sc_id' => 1422,
                'date_enrolled' => '2022-07-06',
                'student_id' => 994,
                'class_id' => 132,
            ),
            422 => 
            array (
                'sc_id' => 1423,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1838,
                'class_id' => 295,
            ),
            423 => 
            array (
                'sc_id' => 1424,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1326,
                'class_id' => 254,
            ),
            424 => 
            array (
                'sc_id' => 1425,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1021,
                'class_id' => 175,
            ),
            425 => 
            array (
                'sc_id' => 1426,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1891,
                'class_id' => 348,
            ),
            426 => 
            array (
                'sc_id' => 1427,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1098,
                'class_id' => 197,
            ),
            427 => 
            array (
                'sc_id' => 1428,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1776,
                'class_id' => 400,
            ),
            428 => 
            array (
                'sc_id' => 1429,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1145,
                'class_id' => 382,
            ),
            429 => 
            array (
                'sc_id' => 1430,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1849,
                'class_id' => 353,
            ),
            430 => 
            array (
                'sc_id' => 1431,
                'date_enrolled' => '2022-06-18',
                'student_id' => 109,
                'class_id' => 418,
            ),
            431 => 
            array (
                'sc_id' => 1432,
                'date_enrolled' => '2022-08-08',
                'student_id' => 715,
                'class_id' => 111,
            ),
            432 => 
            array (
                'sc_id' => 1433,
                'date_enrolled' => '2022-06-22',
                'student_id' => 398,
                'class_id' => 431,
            ),
            433 => 
            array (
                'sc_id' => 1434,
                'date_enrolled' => '2022-08-12',
                'student_id' => 157,
                'class_id' => 149,
            ),
            434 => 
            array (
                'sc_id' => 1435,
                'date_enrolled' => '2022-06-09',
                'student_id' => 468,
                'class_id' => 82,
            ),
            435 => 
            array (
                'sc_id' => 1436,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1789,
                'class_id' => 190,
            ),
            436 => 
            array (
                'sc_id' => 1437,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1843,
                'class_id' => 106,
            ),
            437 => 
            array (
                'sc_id' => 1438,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1577,
                'class_id' => 258,
            ),
            438 => 
            array (
                'sc_id' => 1439,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1707,
                'class_id' => 453,
            ),
            439 => 
            array (
                'sc_id' => 1440,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1951,
                'class_id' => 478,
            ),
            440 => 
            array (
                'sc_id' => 1441,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1319,
                'class_id' => 145,
            ),
            441 => 
            array (
                'sc_id' => 1442,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1249,
                'class_id' => 223,
            ),
            442 => 
            array (
                'sc_id' => 1443,
                'date_enrolled' => '2022-07-15',
                'student_id' => 408,
                'class_id' => 185,
            ),
            443 => 
            array (
                'sc_id' => 1444,
                'date_enrolled' => '2022-06-02',
                'student_id' => 404,
                'class_id' => 87,
            ),
            444 => 
            array (
                'sc_id' => 1445,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1575,
                'class_id' => 129,
            ),
            445 => 
            array (
                'sc_id' => 1446,
                'date_enrolled' => '2022-08-27',
                'student_id' => 76,
                'class_id' => 126,
            ),
            446 => 
            array (
                'sc_id' => 1447,
                'date_enrolled' => '2022-06-21',
                'student_id' => 919,
                'class_id' => 438,
            ),
            447 => 
            array (
                'sc_id' => 1448,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1003,
                'class_id' => 84,
            ),
            448 => 
            array (
                'sc_id' => 1449,
                'date_enrolled' => '2022-07-23',
                'student_id' => 469,
                'class_id' => 488,
            ),
            449 => 
            array (
                'sc_id' => 1450,
                'date_enrolled' => '2022-06-04',
                'student_id' => 561,
                'class_id' => 76,
            ),
            450 => 
            array (
                'sc_id' => 1451,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1741,
                'class_id' => 92,
            ),
            451 => 
            array (
                'sc_id' => 1452,
                'date_enrolled' => '2022-06-30',
                'student_id' => 593,
                'class_id' => 132,
            ),
            452 => 
            array (
                'sc_id' => 1453,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1256,
                'class_id' => 266,
            ),
            453 => 
            array (
                'sc_id' => 1454,
                'date_enrolled' => '2022-07-09',
                'student_id' => 288,
                'class_id' => 56,
            ),
            454 => 
            array (
                'sc_id' => 1455,
                'date_enrolled' => '2022-06-04',
                'student_id' => 484,
                'class_id' => 481,
            ),
            455 => 
            array (
                'sc_id' => 1456,
                'date_enrolled' => '2022-08-19',
                'student_id' => 24,
                'class_id' => 142,
            ),
            456 => 
            array (
                'sc_id' => 1457,
                'date_enrolled' => '2022-08-05',
                'student_id' => 633,
                'class_id' => 343,
            ),
            457 => 
            array (
                'sc_id' => 1458,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1072,
                'class_id' => 462,
            ),
            458 => 
            array (
                'sc_id' => 1459,
                'date_enrolled' => '2022-07-25',
                'student_id' => 260,
                'class_id' => 11,
            ),
            459 => 
            array (
                'sc_id' => 1460,
                'date_enrolled' => '2022-08-04',
                'student_id' => 979,
                'class_id' => 322,
            ),
            460 => 
            array (
                'sc_id' => 1461,
                'date_enrolled' => '2022-06-03',
                'student_id' => 562,
                'class_id' => 222,
            ),
            461 => 
            array (
                'sc_id' => 1462,
                'date_enrolled' => '2022-08-26',
                'student_id' => 344,
                'class_id' => 252,
            ),
            462 => 
            array (
                'sc_id' => 1463,
                'date_enrolled' => '2022-07-15',
                'student_id' => 392,
                'class_id' => 435,
            ),
            463 => 
            array (
                'sc_id' => 1464,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1608,
                'class_id' => 199,
            ),
            464 => 
            array (
                'sc_id' => 1465,
                'date_enrolled' => '2022-08-23',
                'student_id' => 403,
                'class_id' => 95,
            ),
            465 => 
            array (
                'sc_id' => 1466,
                'date_enrolled' => '2022-07-12',
                'student_id' => 920,
                'class_id' => 392,
            ),
            466 => 
            array (
                'sc_id' => 1467,
                'date_enrolled' => '2022-06-26',
                'student_id' => 543,
                'class_id' => 76,
            ),
            467 => 
            array (
                'sc_id' => 1468,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1183,
                'class_id' => 36,
            ),
            468 => 
            array (
                'sc_id' => 1469,
                'date_enrolled' => '2022-07-09',
                'student_id' => 426,
                'class_id' => 330,
            ),
            469 => 
            array (
                'sc_id' => 1470,
                'date_enrolled' => '2022-06-22',
                'student_id' => 927,
                'class_id' => 335,
            ),
            470 => 
            array (
                'sc_id' => 1471,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1225,
                'class_id' => 403,
            ),
            471 => 
            array (
                'sc_id' => 1472,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1533,
                'class_id' => 306,
            ),
            472 => 
            array (
                'sc_id' => 1473,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1831,
                'class_id' => 80,
            ),
            473 => 
            array (
                'sc_id' => 1474,
                'date_enrolled' => '2022-07-19',
                'student_id' => 37,
                'class_id' => 481,
            ),
            474 => 
            array (
                'sc_id' => 1475,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1210,
                'class_id' => 61,
            ),
            475 => 
            array (
                'sc_id' => 1476,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1324,
                'class_id' => 344,
            ),
            476 => 
            array (
                'sc_id' => 1477,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1410,
                'class_id' => 337,
            ),
            477 => 
            array (
                'sc_id' => 1478,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1498,
                'class_id' => 418,
            ),
            478 => 
            array (
                'sc_id' => 1479,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1417,
                'class_id' => 262,
            ),
            479 => 
            array (
                'sc_id' => 1480,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1280,
                'class_id' => 168,
            ),
            480 => 
            array (
                'sc_id' => 1481,
                'date_enrolled' => '2022-08-04',
                'student_id' => 725,
                'class_id' => 298,
            ),
            481 => 
            array (
                'sc_id' => 1482,
                'date_enrolled' => '2022-06-03',
                'student_id' => 780,
                'class_id' => 358,
            ),
            482 => 
            array (
                'sc_id' => 1483,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1796,
                'class_id' => 88,
            ),
            483 => 
            array (
                'sc_id' => 1484,
                'date_enrolled' => '2022-06-17',
                'student_id' => 763,
                'class_id' => 381,
            ),
            484 => 
            array (
                'sc_id' => 1485,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1530,
                'class_id' => 206,
            ),
            485 => 
            array (
                'sc_id' => 1486,
                'date_enrolled' => '2022-07-08',
                'student_id' => 14,
                'class_id' => 431,
            ),
            486 => 
            array (
                'sc_id' => 1487,
                'date_enrolled' => '2022-08-19',
                'student_id' => 267,
                'class_id' => 327,
            ),
            487 => 
            array (
                'sc_id' => 1488,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1530,
                'class_id' => 267,
            ),
            488 => 
            array (
                'sc_id' => 1489,
                'date_enrolled' => '2022-07-15',
                'student_id' => 758,
                'class_id' => 211,
            ),
            489 => 
            array (
                'sc_id' => 1490,
                'date_enrolled' => '2022-07-06',
                'student_id' => 926,
                'class_id' => 172,
            ),
            490 => 
            array (
                'sc_id' => 1491,
                'date_enrolled' => '2022-08-12',
                'student_id' => 471,
                'class_id' => 97,
            ),
            491 => 
            array (
                'sc_id' => 1492,
                'date_enrolled' => '2022-07-16',
                'student_id' => 248,
                'class_id' => 163,
            ),
            492 => 
            array (
                'sc_id' => 1493,
                'date_enrolled' => '2022-08-13',
                'student_id' => 899,
                'class_id' => 67,
            ),
            493 => 
            array (
                'sc_id' => 1494,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1255,
                'class_id' => 266,
            ),
            494 => 
            array (
                'sc_id' => 1495,
                'date_enrolled' => '2022-07-07',
                'student_id' => 814,
                'class_id' => 158,
            ),
            495 => 
            array (
                'sc_id' => 1496,
                'date_enrolled' => '2022-07-30',
                'student_id' => 900,
                'class_id' => 25,
            ),
            496 => 
            array (
                'sc_id' => 1497,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1709,
                'class_id' => 133,
            ),
            497 => 
            array (
                'sc_id' => 1498,
                'date_enrolled' => '2022-07-16',
                'student_id' => 907,
                'class_id' => 384,
            ),
            498 => 
            array (
                'sc_id' => 1499,
                'date_enrolled' => '2022-07-07',
                'student_id' => 427,
                'class_id' => 453,
            ),
            499 => 
            array (
                'sc_id' => 1500,
                'date_enrolled' => '2022-06-06',
                'student_id' => 77,
                'class_id' => 317,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 1501,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1139,
                'class_id' => 154,
            ),
            1 => 
            array (
                'sc_id' => 1502,
                'date_enrolled' => '2022-08-10',
                'student_id' => 995,
                'class_id' => 427,
            ),
            2 => 
            array (
                'sc_id' => 1503,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1986,
                'class_id' => 50,
            ),
            3 => 
            array (
                'sc_id' => 1504,
                'date_enrolled' => '2022-08-21',
                'student_id' => 471,
                'class_id' => 257,
            ),
            4 => 
            array (
                'sc_id' => 1505,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1019,
                'class_id' => 279,
            ),
            5 => 
            array (
                'sc_id' => 1506,
                'date_enrolled' => '2022-08-29',
                'student_id' => 537,
                'class_id' => 166,
            ),
            6 => 
            array (
                'sc_id' => 1507,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1592,
                'class_id' => 200,
            ),
            7 => 
            array (
                'sc_id' => 1508,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1497,
                'class_id' => 182,
            ),
            8 => 
            array (
                'sc_id' => 1509,
                'date_enrolled' => '2022-07-23',
                'student_id' => 469,
                'class_id' => 9,
            ),
            9 => 
            array (
                'sc_id' => 1510,
                'date_enrolled' => '2022-06-15',
                'student_id' => 572,
                'class_id' => 137,
            ),
            10 => 
            array (
                'sc_id' => 1511,
                'date_enrolled' => '2022-06-16',
                'student_id' => 809,
                'class_id' => 426,
            ),
            11 => 
            array (
                'sc_id' => 1512,
                'date_enrolled' => '2022-08-20',
                'student_id' => 302,
                'class_id' => 17,
            ),
            12 => 
            array (
                'sc_id' => 1513,
                'date_enrolled' => '2022-06-23',
                'student_id' => 31,
                'class_id' => 495,
            ),
            13 => 
            array (
                'sc_id' => 1514,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1150,
                'class_id' => 442,
            ),
            14 => 
            array (
                'sc_id' => 1515,
                'date_enrolled' => '2022-07-12',
                'student_id' => 615,
                'class_id' => 462,
            ),
            15 => 
            array (
                'sc_id' => 1516,
                'date_enrolled' => '2022-07-12',
                'student_id' => 316,
                'class_id' => 153,
            ),
            16 => 
            array (
                'sc_id' => 1517,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1120,
                'class_id' => 70,
            ),
            17 => 
            array (
                'sc_id' => 1518,
                'date_enrolled' => '2022-06-26',
                'student_id' => 614,
                'class_id' => 144,
            ),
            18 => 
            array (
                'sc_id' => 1519,
                'date_enrolled' => '2022-07-23',
                'student_id' => 393,
                'class_id' => 485,
            ),
            19 => 
            array (
                'sc_id' => 1520,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1470,
                'class_id' => 455,
            ),
            20 => 
            array (
                'sc_id' => 1521,
                'date_enrolled' => '2022-06-09',
                'student_id' => 560,
                'class_id' => 400,
            ),
            21 => 
            array (
                'sc_id' => 1522,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1668,
                'class_id' => 456,
            ),
            22 => 
            array (
                'sc_id' => 1523,
                'date_enrolled' => '2022-07-07',
                'student_id' => 638,
                'class_id' => 386,
            ),
            23 => 
            array (
                'sc_id' => 1524,
                'date_enrolled' => '2022-06-13',
                'student_id' => 318,
                'class_id' => 402,
            ),
            24 => 
            array (
                'sc_id' => 1525,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1004,
                'class_id' => 391,
            ),
            25 => 
            array (
                'sc_id' => 1526,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1545,
                'class_id' => 237,
            ),
            26 => 
            array (
                'sc_id' => 1527,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1133,
                'class_id' => 356,
            ),
            27 => 
            array (
                'sc_id' => 1528,
                'date_enrolled' => '2022-06-13',
                'student_id' => 782,
                'class_id' => 279,
            ),
            28 => 
            array (
                'sc_id' => 1529,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1797,
                'class_id' => 82,
            ),
            29 => 
            array (
                'sc_id' => 1530,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1406,
                'class_id' => 239,
            ),
            30 => 
            array (
                'sc_id' => 1531,
                'date_enrolled' => '2022-08-30',
                'student_id' => 757,
                'class_id' => 18,
            ),
            31 => 
            array (
                'sc_id' => 1532,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1206,
                'class_id' => 70,
            ),
            32 => 
            array (
                'sc_id' => 1533,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1462,
                'class_id' => 43,
            ),
            33 => 
            array (
                'sc_id' => 1534,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1318,
                'class_id' => 171,
            ),
            34 => 
            array (
                'sc_id' => 1535,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1904,
                'class_id' => 482,
            ),
            35 => 
            array (
                'sc_id' => 1536,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1703,
                'class_id' => 303,
            ),
            36 => 
            array (
                'sc_id' => 1537,
                'date_enrolled' => '2022-07-05',
                'student_id' => 763,
                'class_id' => 78,
            ),
            37 => 
            array (
                'sc_id' => 1538,
                'date_enrolled' => '2022-08-10',
                'student_id' => 611,
                'class_id' => 82,
            ),
            38 => 
            array (
                'sc_id' => 1539,
                'date_enrolled' => '2022-07-22',
                'student_id' => 307,
                'class_id' => 489,
            ),
            39 => 
            array (
                'sc_id' => 1540,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1708,
                'class_id' => 487,
            ),
            40 => 
            array (
                'sc_id' => 1541,
                'date_enrolled' => '2022-07-11',
                'student_id' => 711,
                'class_id' => 476,
            ),
            41 => 
            array (
                'sc_id' => 1542,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1970,
                'class_id' => 336,
            ),
            42 => 
            array (
                'sc_id' => 1543,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1144,
                'class_id' => 152,
            ),
            43 => 
            array (
                'sc_id' => 1544,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1362,
                'class_id' => 244,
            ),
            44 => 
            array (
                'sc_id' => 1545,
                'date_enrolled' => '2022-07-16',
                'student_id' => 307,
                'class_id' => 72,
            ),
            45 => 
            array (
                'sc_id' => 1546,
                'date_enrolled' => '2022-06-06',
                'student_id' => 493,
                'class_id' => 38,
            ),
            46 => 
            array (
                'sc_id' => 1547,
                'date_enrolled' => '2022-06-13',
                'student_id' => 414,
                'class_id' => 390,
            ),
            47 => 
            array (
                'sc_id' => 1548,
                'date_enrolled' => '2022-06-24',
                'student_id' => 556,
                'class_id' => 215,
            ),
            48 => 
            array (
                'sc_id' => 1549,
                'date_enrolled' => '2022-08-25',
                'student_id' => 835,
                'class_id' => 372,
            ),
            49 => 
            array (
                'sc_id' => 1550,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1772,
                'class_id' => 47,
            ),
            50 => 
            array (
                'sc_id' => 1551,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1573,
                'class_id' => 308,
            ),
            51 => 
            array (
                'sc_id' => 1552,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1779,
                'class_id' => 54,
            ),
            52 => 
            array (
                'sc_id' => 1553,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1157,
                'class_id' => 148,
            ),
            53 => 
            array (
                'sc_id' => 1554,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1521,
                'class_id' => 204,
            ),
            54 => 
            array (
                'sc_id' => 1555,
                'date_enrolled' => '2022-07-26',
                'student_id' => 937,
                'class_id' => 301,
            ),
            55 => 
            array (
                'sc_id' => 1556,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1948,
                'class_id' => 19,
            ),
            56 => 
            array (
                'sc_id' => 1557,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1995,
                'class_id' => 78,
            ),
            57 => 
            array (
                'sc_id' => 1558,
                'date_enrolled' => '2022-06-22',
                'student_id' => 85,
                'class_id' => 4,
            ),
            58 => 
            array (
                'sc_id' => 1559,
                'date_enrolled' => '2022-07-06',
                'student_id' => 871,
                'class_id' => 81,
            ),
            59 => 
            array (
                'sc_id' => 1560,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1718,
                'class_id' => 32,
            ),
            60 => 
            array (
                'sc_id' => 1561,
                'date_enrolled' => '2022-07-06',
                'student_id' => 112,
                'class_id' => 422,
            ),
            61 => 
            array (
                'sc_id' => 1562,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1059,
                'class_id' => 106,
            ),
            62 => 
            array (
                'sc_id' => 1563,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1573,
                'class_id' => 311,
            ),
            63 => 
            array (
                'sc_id' => 1564,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1099,
                'class_id' => 293,
            ),
            64 => 
            array (
                'sc_id' => 1565,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1438,
                'class_id' => 197,
            ),
            65 => 
            array (
                'sc_id' => 1566,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1322,
                'class_id' => 32,
            ),
            66 => 
            array (
                'sc_id' => 1567,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1599,
                'class_id' => 311,
            ),
            67 => 
            array (
                'sc_id' => 1568,
                'date_enrolled' => '2022-06-28',
                'student_id' => 594,
                'class_id' => 328,
            ),
            68 => 
            array (
                'sc_id' => 1569,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1764,
                'class_id' => 33,
            ),
            69 => 
            array (
                'sc_id' => 1570,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1072,
                'class_id' => 131,
            ),
            70 => 
            array (
                'sc_id' => 1571,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1720,
                'class_id' => 54,
            ),
            71 => 
            array (
                'sc_id' => 1572,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1205,
                'class_id' => 218,
            ),
            72 => 
            array (
                'sc_id' => 1573,
                'date_enrolled' => '2022-08-27',
                'student_id' => 561,
                'class_id' => 312,
            ),
            73 => 
            array (
                'sc_id' => 1574,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1936,
                'class_id' => 282,
            ),
            74 => 
            array (
                'sc_id' => 1575,
                'date_enrolled' => '2022-08-06',
                'student_id' => 796,
                'class_id' => 157,
            ),
            75 => 
            array (
                'sc_id' => 1576,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1322,
                'class_id' => 479,
            ),
            76 => 
            array (
                'sc_id' => 1577,
                'date_enrolled' => '2022-06-22',
                'student_id' => 394,
                'class_id' => 412,
            ),
            77 => 
            array (
                'sc_id' => 1578,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1868,
                'class_id' => 80,
            ),
            78 => 
            array (
                'sc_id' => 1579,
                'date_enrolled' => '2022-07-25',
                'student_id' => 846,
                'class_id' => 120,
            ),
            79 => 
            array (
                'sc_id' => 1580,
                'date_enrolled' => '2022-08-30',
                'student_id' => 358,
                'class_id' => 112,
            ),
            80 => 
            array (
                'sc_id' => 1581,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1249,
                'class_id' => 270,
            ),
            81 => 
            array (
                'sc_id' => 1582,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1201,
                'class_id' => 445,
            ),
            82 => 
            array (
                'sc_id' => 1583,
                'date_enrolled' => '2022-06-25',
                'student_id' => 229,
                'class_id' => 314,
            ),
            83 => 
            array (
                'sc_id' => 1584,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1294,
                'class_id' => 148,
            ),
            84 => 
            array (
                'sc_id' => 1585,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1266,
                'class_id' => 187,
            ),
            85 => 
            array (
                'sc_id' => 1586,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1766,
                'class_id' => 248,
            ),
            86 => 
            array (
                'sc_id' => 1587,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1227,
                'class_id' => 316,
            ),
            87 => 
            array (
                'sc_id' => 1588,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1234,
                'class_id' => 444,
            ),
            88 => 
            array (
                'sc_id' => 1589,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1919,
                'class_id' => 491,
            ),
            89 => 
            array (
                'sc_id' => 1590,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1145,
                'class_id' => 471,
            ),
            90 => 
            array (
                'sc_id' => 1591,
                'date_enrolled' => '2022-08-21',
                'student_id' => 995,
                'class_id' => 453,
            ),
            91 => 
            array (
                'sc_id' => 1592,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1966,
                'class_id' => 280,
            ),
            92 => 
            array (
                'sc_id' => 1593,
                'date_enrolled' => '2022-06-15',
                'student_id' => 953,
                'class_id' => 338,
            ),
            93 => 
            array (
                'sc_id' => 1594,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1133,
                'class_id' => 371,
            ),
            94 => 
            array (
                'sc_id' => 1595,
                'date_enrolled' => '2022-08-05',
                'student_id' => 529,
                'class_id' => 37,
            ),
            95 => 
            array (
                'sc_id' => 1596,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1291,
                'class_id' => 355,
            ),
            96 => 
            array (
                'sc_id' => 1597,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1575,
                'class_id' => 357,
            ),
            97 => 
            array (
                'sc_id' => 1598,
                'date_enrolled' => '2022-07-16',
                'student_id' => 138,
                'class_id' => 0,
            ),
            98 => 
            array (
                'sc_id' => 1599,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1481,
                'class_id' => 45,
            ),
            99 => 
            array (
                'sc_id' => 1600,
                'date_enrolled' => '2022-06-17',
                'student_id' => 786,
                'class_id' => 206,
            ),
            100 => 
            array (
                'sc_id' => 1601,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1577,
                'class_id' => 5,
            ),
            101 => 
            array (
                'sc_id' => 1602,
                'date_enrolled' => '2022-06-12',
                'student_id' => 719,
                'class_id' => 29,
            ),
            102 => 
            array (
                'sc_id' => 1603,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1632,
                'class_id' => 211,
            ),
            103 => 
            array (
                'sc_id' => 1604,
                'date_enrolled' => '2022-07-05',
                'student_id' => 891,
                'class_id' => 433,
            ),
            104 => 
            array (
                'sc_id' => 1605,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1931,
                'class_id' => 138,
            ),
            105 => 
            array (
                'sc_id' => 1606,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1702,
                'class_id' => 427,
            ),
            106 => 
            array (
                'sc_id' => 1607,
                'date_enrolled' => '2022-08-16',
                'student_id' => 809,
                'class_id' => 485,
            ),
            107 => 
            array (
                'sc_id' => 1608,
                'date_enrolled' => '2022-06-06',
                'student_id' => 218,
                'class_id' => 343,
            ),
            108 => 
            array (
                'sc_id' => 1609,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1267,
                'class_id' => 88,
            ),
            109 => 
            array (
                'sc_id' => 1610,
                'date_enrolled' => '2022-08-22',
                'student_id' => 790,
                'class_id' => 22,
            ),
            110 => 
            array (
                'sc_id' => 1611,
                'date_enrolled' => '2022-08-28',
                'student_id' => 501,
                'class_id' => 100,
            ),
            111 => 
            array (
                'sc_id' => 1612,
                'date_enrolled' => '2022-08-23',
                'student_id' => 29,
                'class_id' => 420,
            ),
            112 => 
            array (
                'sc_id' => 1613,
                'date_enrolled' => '2022-08-15',
                'student_id' => 860,
                'class_id' => 357,
            ),
            113 => 
            array (
                'sc_id' => 1614,
                'date_enrolled' => '2022-06-08',
                'student_id' => 952,
                'class_id' => 462,
            ),
            114 => 
            array (
                'sc_id' => 1615,
                'date_enrolled' => '2022-08-08',
                'student_id' => 78,
                'class_id' => 142,
            ),
            115 => 
            array (
                'sc_id' => 1616,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1839,
                'class_id' => 370,
            ),
            116 => 
            array (
                'sc_id' => 1617,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1581,
                'class_id' => 110,
            ),
            117 => 
            array (
                'sc_id' => 1618,
                'date_enrolled' => '2022-07-13',
                'student_id' => 380,
                'class_id' => 465,
            ),
            118 => 
            array (
                'sc_id' => 1619,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1921,
                'class_id' => 314,
            ),
            119 => 
            array (
                'sc_id' => 1620,
                'date_enrolled' => '2022-06-05',
                'student_id' => 794,
                'class_id' => 401,
            ),
            120 => 
            array (
                'sc_id' => 1621,
                'date_enrolled' => '2022-08-21',
                'student_id' => 715,
                'class_id' => 353,
            ),
            121 => 
            array (
                'sc_id' => 1622,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1641,
                'class_id' => 460,
            ),
            122 => 
            array (
                'sc_id' => 1623,
                'date_enrolled' => '2022-08-08',
                'student_id' => 554,
                'class_id' => 35,
            ),
            123 => 
            array (
                'sc_id' => 1624,
                'date_enrolled' => '2022-07-08',
                'student_id' => 774,
                'class_id' => 226,
            ),
            124 => 
            array (
                'sc_id' => 1625,
                'date_enrolled' => '2022-06-24',
                'student_id' => 236,
                'class_id' => 350,
            ),
            125 => 
            array (
                'sc_id' => 1626,
                'date_enrolled' => '2022-06-03',
                'student_id' => 31,
                'class_id' => 383,
            ),
            126 => 
            array (
                'sc_id' => 1627,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1590,
                'class_id' => 471,
            ),
            127 => 
            array (
                'sc_id' => 1628,
                'date_enrolled' => '2022-07-21',
                'student_id' => 506,
                'class_id' => 409,
            ),
            128 => 
            array (
                'sc_id' => 1629,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1514,
                'class_id' => 300,
            ),
            129 => 
            array (
                'sc_id' => 1630,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1619,
                'class_id' => 81,
            ),
            130 => 
            array (
                'sc_id' => 1631,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1862,
                'class_id' => 494,
            ),
            131 => 
            array (
                'sc_id' => 1632,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1378,
                'class_id' => 285,
            ),
            132 => 
            array (
                'sc_id' => 1633,
                'date_enrolled' => '2022-06-04',
                'student_id' => 821,
                'class_id' => 397,
            ),
            133 => 
            array (
                'sc_id' => 1634,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1442,
                'class_id' => 292,
            ),
            134 => 
            array (
                'sc_id' => 1635,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1481,
                'class_id' => 110,
            ),
            135 => 
            array (
                'sc_id' => 1636,
                'date_enrolled' => '2022-08-20',
                'student_id' => 212,
                'class_id' => 25,
            ),
            136 => 
            array (
                'sc_id' => 1637,
                'date_enrolled' => '2022-06-19',
                'student_id' => 665,
                'class_id' => 55,
            ),
            137 => 
            array (
                'sc_id' => 1638,
                'date_enrolled' => '2022-06-15',
                'student_id' => 68,
                'class_id' => 9,
            ),
            138 => 
            array (
                'sc_id' => 1639,
                'date_enrolled' => '2022-06-02',
                'student_id' => 42,
                'class_id' => 244,
            ),
            139 => 
            array (
                'sc_id' => 1640,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1228,
                'class_id' => 44,
            ),
            140 => 
            array (
                'sc_id' => 1641,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1242,
                'class_id' => 199,
            ),
            141 => 
            array (
                'sc_id' => 1642,
                'date_enrolled' => '2022-07-08',
                'student_id' => 926,
                'class_id' => 133,
            ),
            142 => 
            array (
                'sc_id' => 1643,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1008,
                'class_id' => 156,
            ),
            143 => 
            array (
                'sc_id' => 1644,
                'date_enrolled' => '2022-07-25',
                'student_id' => 736,
                'class_id' => 359,
            ),
            144 => 
            array (
                'sc_id' => 1645,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1717,
                'class_id' => 105,
            ),
            145 => 
            array (
                'sc_id' => 1646,
                'date_enrolled' => '2022-08-30',
                'student_id' => 435,
                'class_id' => 120,
            ),
            146 => 
            array (
                'sc_id' => 1647,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1529,
                'class_id' => 142,
            ),
            147 => 
            array (
                'sc_id' => 1648,
                'date_enrolled' => '2022-06-26',
                'student_id' => 624,
                'class_id' => 461,
            ),
            148 => 
            array (
                'sc_id' => 1649,
                'date_enrolled' => '2022-08-04',
                'student_id' => 64,
                'class_id' => 153,
            ),
            149 => 
            array (
                'sc_id' => 1650,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1894,
                'class_id' => 380,
            ),
            150 => 
            array (
                'sc_id' => 1651,
                'date_enrolled' => '2022-07-05',
                'student_id' => 88,
                'class_id' => 301,
            ),
            151 => 
            array (
                'sc_id' => 1652,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1572,
                'class_id' => 149,
            ),
            152 => 
            array (
                'sc_id' => 1653,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1489,
                'class_id' => 481,
            ),
            153 => 
            array (
                'sc_id' => 1654,
                'date_enrolled' => '2022-07-11',
                'student_id' => 816,
                'class_id' => 109,
            ),
            154 => 
            array (
                'sc_id' => 1655,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1833,
                'class_id' => 28,
            ),
            155 => 
            array (
                'sc_id' => 1656,
                'date_enrolled' => '2022-08-23',
                'student_id' => 567,
                'class_id' => 330,
            ),
            156 => 
            array (
                'sc_id' => 1657,
                'date_enrolled' => '2022-07-04',
                'student_id' => 270,
                'class_id' => 166,
            ),
            157 => 
            array (
                'sc_id' => 1658,
                'date_enrolled' => '2022-08-10',
                'student_id' => 990,
                'class_id' => 234,
            ),
            158 => 
            array (
                'sc_id' => 1659,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1958,
                'class_id' => 368,
            ),
            159 => 
            array (
                'sc_id' => 1660,
                'date_enrolled' => '2022-08-03',
                'student_id' => 75,
                'class_id' => 392,
            ),
            160 => 
            array (
                'sc_id' => 1661,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1717,
                'class_id' => 297,
            ),
            161 => 
            array (
                'sc_id' => 1662,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1630,
                'class_id' => 175,
            ),
            162 => 
            array (
                'sc_id' => 1663,
                'date_enrolled' => '2022-06-13',
                'student_id' => 13,
                'class_id' => 129,
            ),
            163 => 
            array (
                'sc_id' => 1664,
                'date_enrolled' => '2022-08-12',
                'student_id' => 958,
                'class_id' => 65,
            ),
            164 => 
            array (
                'sc_id' => 1665,
                'date_enrolled' => '2022-06-28',
                'student_id' => 829,
                'class_id' => 362,
            ),
            165 => 
            array (
                'sc_id' => 1666,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1422,
                'class_id' => 219,
            ),
            166 => 
            array (
                'sc_id' => 1667,
                'date_enrolled' => '2022-07-31',
                'student_id' => 595,
                'class_id' => 291,
            ),
            167 => 
            array (
                'sc_id' => 1668,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1498,
                'class_id' => 499,
            ),
            168 => 
            array (
                'sc_id' => 1669,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1248,
                'class_id' => 411,
            ),
            169 => 
            array (
                'sc_id' => 1670,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1597,
                'class_id' => 287,
            ),
            170 => 
            array (
                'sc_id' => 1671,
                'date_enrolled' => '2022-08-30',
                'student_id' => 750,
                'class_id' => 134,
            ),
            171 => 
            array (
                'sc_id' => 1672,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1844,
                'class_id' => 255,
            ),
            172 => 
            array (
                'sc_id' => 1673,
                'date_enrolled' => '2022-06-11',
                'student_id' => 288,
                'class_id' => 218,
            ),
            173 => 
            array (
                'sc_id' => 1674,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1109,
                'class_id' => 462,
            ),
            174 => 
            array (
                'sc_id' => 1675,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1625,
                'class_id' => 7,
            ),
            175 => 
            array (
                'sc_id' => 1676,
                'date_enrolled' => '2022-07-17',
                'student_id' => 632,
                'class_id' => 274,
            ),
            176 => 
            array (
                'sc_id' => 1677,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1973,
                'class_id' => 464,
            ),
            177 => 
            array (
                'sc_id' => 1678,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1824,
                'class_id' => 448,
            ),
            178 => 
            array (
                'sc_id' => 1679,
                'date_enrolled' => '2022-07-16',
                'student_id' => 254,
                'class_id' => 496,
            ),
            179 => 
            array (
                'sc_id' => 1680,
                'date_enrolled' => '2022-08-04',
                'student_id' => 168,
                'class_id' => 324,
            ),
            180 => 
            array (
                'sc_id' => 1681,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1590,
                'class_id' => 145,
            ),
            181 => 
            array (
                'sc_id' => 1682,
                'date_enrolled' => '2022-07-20',
                'student_id' => 111,
                'class_id' => 129,
            ),
            182 => 
            array (
                'sc_id' => 1683,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1429,
                'class_id' => 193,
            ),
            183 => 
            array (
                'sc_id' => 1684,
                'date_enrolled' => '2022-06-03',
                'student_id' => 293,
                'class_id' => 452,
            ),
            184 => 
            array (
                'sc_id' => 1685,
                'date_enrolled' => '2022-08-02',
                'student_id' => 708,
                'class_id' => 205,
            ),
            185 => 
            array (
                'sc_id' => 1686,
                'date_enrolled' => '2022-08-17',
                'student_id' => 991,
                'class_id' => 479,
            ),
            186 => 
            array (
                'sc_id' => 1687,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1783,
                'class_id' => 304,
            ),
            187 => 
            array (
                'sc_id' => 1688,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1301,
                'class_id' => 39,
            ),
            188 => 
            array (
                'sc_id' => 1689,
                'date_enrolled' => '2022-07-14',
                'student_id' => 330,
                'class_id' => 496,
            ),
            189 => 
            array (
                'sc_id' => 1690,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1435,
                'class_id' => 356,
            ),
            190 => 
            array (
                'sc_id' => 1691,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1020,
                'class_id' => 78,
            ),
            191 => 
            array (
                'sc_id' => 1692,
                'date_enrolled' => '2022-08-07',
                'student_id' => 367,
                'class_id' => 124,
            ),
            192 => 
            array (
                'sc_id' => 1693,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1068,
                'class_id' => 201,
            ),
            193 => 
            array (
                'sc_id' => 1694,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1723,
                'class_id' => 229,
            ),
            194 => 
            array (
                'sc_id' => 1695,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1001,
                'class_id' => 235,
            ),
            195 => 
            array (
                'sc_id' => 1696,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1381,
                'class_id' => 165,
            ),
            196 => 
            array (
                'sc_id' => 1697,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1206,
                'class_id' => 471,
            ),
            197 => 
            array (
                'sc_id' => 1698,
                'date_enrolled' => '2022-06-01',
                'student_id' => 508,
                'class_id' => 134,
            ),
            198 => 
            array (
                'sc_id' => 1699,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1386,
                'class_id' => 189,
            ),
            199 => 
            array (
                'sc_id' => 1700,
                'date_enrolled' => '2022-07-24',
                'student_id' => 63,
                'class_id' => 390,
            ),
            200 => 
            array (
                'sc_id' => 1701,
                'date_enrolled' => '2022-07-08',
                'student_id' => 202,
                'class_id' => 4,
            ),
            201 => 
            array (
                'sc_id' => 1702,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1380,
                'class_id' => 404,
            ),
            202 => 
            array (
                'sc_id' => 1703,
                'date_enrolled' => '2022-07-10',
                'student_id' => 626,
                'class_id' => 419,
            ),
            203 => 
            array (
                'sc_id' => 1704,
                'date_enrolled' => '2022-08-05',
                'student_id' => 713,
                'class_id' => 421,
            ),
            204 => 
            array (
                'sc_id' => 1705,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1224,
                'class_id' => 232,
            ),
            205 => 
            array (
                'sc_id' => 1706,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1364,
                'class_id' => 457,
            ),
            206 => 
            array (
                'sc_id' => 1707,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1037,
                'class_id' => 255,
            ),
            207 => 
            array (
                'sc_id' => 1708,
                'date_enrolled' => '2022-07-07',
                'student_id' => 989,
                'class_id' => 377,
            ),
            208 => 
            array (
                'sc_id' => 1709,
                'date_enrolled' => '2022-08-22',
                'student_id' => 331,
                'class_id' => 52,
            ),
            209 => 
            array (
                'sc_id' => 1710,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1782,
                'class_id' => 123,
            ),
            210 => 
            array (
                'sc_id' => 1711,
                'date_enrolled' => '2022-08-22',
                'student_id' => 498,
                'class_id' => 317,
            ),
            211 => 
            array (
                'sc_id' => 1712,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1413,
                'class_id' => 12,
            ),
            212 => 
            array (
                'sc_id' => 1713,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1415,
                'class_id' => 141,
            ),
            213 => 
            array (
                'sc_id' => 1714,
                'date_enrolled' => '2022-06-23',
                'student_id' => 544,
                'class_id' => 459,
            ),
            214 => 
            array (
                'sc_id' => 1715,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1833,
                'class_id' => 235,
            ),
            215 => 
            array (
                'sc_id' => 1716,
                'date_enrolled' => '2022-08-26',
                'student_id' => 764,
                'class_id' => 189,
            ),
            216 => 
            array (
                'sc_id' => 1717,
                'date_enrolled' => '2022-07-19',
                'student_id' => 114,
                'class_id' => 16,
            ),
            217 => 
            array (
                'sc_id' => 1718,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1777,
                'class_id' => 49,
            ),
            218 => 
            array (
                'sc_id' => 1719,
                'date_enrolled' => '2022-07-05',
                'student_id' => 632,
                'class_id' => 203,
            ),
            219 => 
            array (
                'sc_id' => 1720,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1761,
                'class_id' => 454,
            ),
            220 => 
            array (
                'sc_id' => 1721,
                'date_enrolled' => '2022-07-30',
                'student_id' => 43,
                'class_id' => 381,
            ),
            221 => 
            array (
                'sc_id' => 1722,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1733,
                'class_id' => 217,
            ),
            222 => 
            array (
                'sc_id' => 1723,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1885,
                'class_id' => 111,
            ),
            223 => 
            array (
                'sc_id' => 1724,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1907,
                'class_id' => 187,
            ),
            224 => 
            array (
                'sc_id' => 1725,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1220,
                'class_id' => 394,
            ),
            225 => 
            array (
                'sc_id' => 1726,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1786,
                'class_id' => 314,
            ),
            226 => 
            array (
                'sc_id' => 1727,
                'date_enrolled' => '2022-06-30',
                'student_id' => 650,
                'class_id' => 404,
            ),
            227 => 
            array (
                'sc_id' => 1728,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1074,
                'class_id' => 281,
            ),
            228 => 
            array (
                'sc_id' => 1729,
                'date_enrolled' => '2022-06-16',
                'student_id' => 566,
                'class_id' => 323,
            ),
            229 => 
            array (
                'sc_id' => 1730,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1985,
                'class_id' => 398,
            ),
            230 => 
            array (
                'sc_id' => 1731,
                'date_enrolled' => '2022-07-10',
                'student_id' => 966,
                'class_id' => 362,
            ),
            231 => 
            array (
                'sc_id' => 1732,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1348,
                'class_id' => 321,
            ),
            232 => 
            array (
                'sc_id' => 1733,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1838,
                'class_id' => 423,
            ),
            233 => 
            array (
                'sc_id' => 1734,
                'date_enrolled' => '2022-08-18',
                'student_id' => 745,
                'class_id' => 150,
            ),
            234 => 
            array (
                'sc_id' => 1735,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1503,
                'class_id' => 117,
            ),
            235 => 
            array (
                'sc_id' => 1736,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1031,
                'class_id' => 313,
            ),
            236 => 
            array (
                'sc_id' => 1737,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1699,
                'class_id' => 295,
            ),
            237 => 
            array (
                'sc_id' => 1738,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1110,
                'class_id' => 371,
            ),
            238 => 
            array (
                'sc_id' => 1739,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1215,
                'class_id' => 369,
            ),
            239 => 
            array (
                'sc_id' => 1740,
                'date_enrolled' => '2022-07-29',
                'student_id' => 179,
                'class_id' => 332,
            ),
            240 => 
            array (
                'sc_id' => 1741,
                'date_enrolled' => '2022-07-05',
                'student_id' => 220,
                'class_id' => 185,
            ),
            241 => 
            array (
                'sc_id' => 1742,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1570,
                'class_id' => 155,
            ),
            242 => 
            array (
                'sc_id' => 1743,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1871,
                'class_id' => 446,
            ),
            243 => 
            array (
                'sc_id' => 1744,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1421,
                'class_id' => 12,
            ),
            244 => 
            array (
                'sc_id' => 1745,
                'date_enrolled' => '2022-06-24',
                'student_id' => 973,
                'class_id' => 482,
            ),
            245 => 
            array (
                'sc_id' => 1746,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1722,
                'class_id' => 1,
            ),
            246 => 
            array (
                'sc_id' => 1747,
                'date_enrolled' => '2022-07-26',
                'student_id' => 428,
                'class_id' => 468,
            ),
            247 => 
            array (
                'sc_id' => 1748,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1106,
                'class_id' => 127,
            ),
            248 => 
            array (
                'sc_id' => 1749,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1129,
                'class_id' => 183,
            ),
            249 => 
            array (
                'sc_id' => 1750,
                'date_enrolled' => '2022-06-14',
                'student_id' => 252,
                'class_id' => 155,
            ),
            250 => 
            array (
                'sc_id' => 1751,
                'date_enrolled' => '2022-08-17',
                'student_id' => 798,
                'class_id' => 236,
            ),
            251 => 
            array (
                'sc_id' => 1752,
                'date_enrolled' => '2022-07-24',
                'student_id' => 25,
                'class_id' => 397,
            ),
            252 => 
            array (
                'sc_id' => 1753,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1986,
                'class_id' => 179,
            ),
            253 => 
            array (
                'sc_id' => 1754,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1807,
                'class_id' => 218,
            ),
            254 => 
            array (
                'sc_id' => 1755,
                'date_enrolled' => '2022-06-13',
                'student_id' => 263,
                'class_id' => 411,
            ),
            255 => 
            array (
                'sc_id' => 1756,
                'date_enrolled' => '2022-06-06',
                'student_id' => 374,
                'class_id' => 368,
            ),
            256 => 
            array (
                'sc_id' => 1757,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1701,
                'class_id' => 288,
            ),
            257 => 
            array (
                'sc_id' => 1758,
                'date_enrolled' => '2022-06-02',
                'student_id' => 599,
                'class_id' => 42,
            ),
            258 => 
            array (
                'sc_id' => 1759,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1789,
                'class_id' => 480,
            ),
            259 => 
            array (
                'sc_id' => 1760,
                'date_enrolled' => '2022-08-18',
                'student_id' => 337,
                'class_id' => 136,
            ),
            260 => 
            array (
                'sc_id' => 1761,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1073,
                'class_id' => 420,
            ),
            261 => 
            array (
                'sc_id' => 1762,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1004,
                'class_id' => 113,
            ),
            262 => 
            array (
                'sc_id' => 1763,
                'date_enrolled' => '2022-07-17',
                'student_id' => 70,
                'class_id' => 485,
            ),
            263 => 
            array (
                'sc_id' => 1764,
                'date_enrolled' => '2022-07-15',
                'student_id' => 273,
                'class_id' => 130,
            ),
            264 => 
            array (
                'sc_id' => 1765,
                'date_enrolled' => '2022-06-02',
                'student_id' => 378,
                'class_id' => 283,
            ),
            265 => 
            array (
                'sc_id' => 1766,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1527,
                'class_id' => 121,
            ),
            266 => 
            array (
                'sc_id' => 1767,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1616,
                'class_id' => 4,
            ),
            267 => 
            array (
                'sc_id' => 1768,
                'date_enrolled' => '2022-08-15',
                'student_id' => 638,
                'class_id' => 338,
            ),
            268 => 
            array (
                'sc_id' => 1769,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1252,
                'class_id' => 374,
            ),
            269 => 
            array (
                'sc_id' => 1770,
                'date_enrolled' => '2022-08-24',
                'student_id' => 968,
                'class_id' => 190,
            ),
            270 => 
            array (
                'sc_id' => 1771,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1616,
                'class_id' => 439,
            ),
            271 => 
            array (
                'sc_id' => 1772,
                'date_enrolled' => '2022-06-04',
                'student_id' => 784,
                'class_id' => 482,
            ),
            272 => 
            array (
                'sc_id' => 1773,
                'date_enrolled' => '2022-08-12',
                'student_id' => 995,
                'class_id' => 105,
            ),
            273 => 
            array (
                'sc_id' => 1774,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1305,
                'class_id' => 414,
            ),
            274 => 
            array (
                'sc_id' => 1775,
                'date_enrolled' => '2022-06-29',
                'student_id' => 45,
                'class_id' => 223,
            ),
            275 => 
            array (
                'sc_id' => 1776,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1499,
                'class_id' => 270,
            ),
            276 => 
            array (
                'sc_id' => 1777,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1951,
                'class_id' => 173,
            ),
            277 => 
            array (
                'sc_id' => 1778,
                'date_enrolled' => '2022-06-15',
                'student_id' => 968,
                'class_id' => 387,
            ),
            278 => 
            array (
                'sc_id' => 1779,
                'date_enrolled' => '2022-07-16',
                'student_id' => 503,
                'class_id' => 233,
            ),
            279 => 
            array (
                'sc_id' => 1780,
                'date_enrolled' => '2022-08-13',
                'student_id' => 419,
                'class_id' => 43,
            ),
            280 => 
            array (
                'sc_id' => 1781,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1478,
                'class_id' => 476,
            ),
            281 => 
            array (
                'sc_id' => 1782,
                'date_enrolled' => '2022-06-02',
                'student_id' => 678,
                'class_id' => 286,
            ),
            282 => 
            array (
                'sc_id' => 1783,
                'date_enrolled' => '2022-08-23',
                'student_id' => 151,
                'class_id' => 404,
            ),
            283 => 
            array (
                'sc_id' => 1784,
                'date_enrolled' => '2022-08-29',
                'student_id' => 113,
                'class_id' => 362,
            ),
            284 => 
            array (
                'sc_id' => 1785,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1827,
                'class_id' => 450,
            ),
            285 => 
            array (
                'sc_id' => 1786,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1359,
                'class_id' => 175,
            ),
            286 => 
            array (
                'sc_id' => 1787,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1225,
                'class_id' => 213,
            ),
            287 => 
            array (
                'sc_id' => 1788,
                'date_enrolled' => '2022-06-23',
                'student_id' => 795,
                'class_id' => 310,
            ),
            288 => 
            array (
                'sc_id' => 1789,
                'date_enrolled' => '2022-07-11',
                'student_id' => 960,
                'class_id' => 50,
            ),
            289 => 
            array (
                'sc_id' => 1790,
                'date_enrolled' => '2022-08-12',
                'student_id' => 989,
                'class_id' => 317,
            ),
            290 => 
            array (
                'sc_id' => 1791,
                'date_enrolled' => '2022-08-20',
                'student_id' => 402,
                'class_id' => 366,
            ),
            291 => 
            array (
                'sc_id' => 1792,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1806,
                'class_id' => 58,
            ),
            292 => 
            array (
                'sc_id' => 1793,
                'date_enrolled' => '2022-07-13',
                'student_id' => 593,
                'class_id' => 306,
            ),
            293 => 
            array (
                'sc_id' => 1794,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1113,
                'class_id' => 53,
            ),
            294 => 
            array (
                'sc_id' => 1795,
                'date_enrolled' => '2022-07-08',
                'student_id' => 701,
                'class_id' => 339,
            ),
            295 => 
            array (
                'sc_id' => 1796,
                'date_enrolled' => '2022-08-27',
                'student_id' => 72,
                'class_id' => 58,
            ),
            296 => 
            array (
                'sc_id' => 1797,
                'date_enrolled' => '2022-08-10',
                'student_id' => 595,
                'class_id' => 148,
            ),
            297 => 
            array (
                'sc_id' => 1798,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1670,
                'class_id' => 316,
            ),
            298 => 
            array (
                'sc_id' => 1799,
                'date_enrolled' => '2022-08-26',
                'student_id' => 527,
                'class_id' => 461,
            ),
            299 => 
            array (
                'sc_id' => 1800,
                'date_enrolled' => '2022-08-30',
                'student_id' => 933,
                'class_id' => 135,
            ),
            300 => 
            array (
                'sc_id' => 1801,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1242,
                'class_id' => 257,
            ),
            301 => 
            array (
                'sc_id' => 1802,
                'date_enrolled' => '2022-08-28',
                'student_id' => 765,
                'class_id' => 295,
            ),
            302 => 
            array (
                'sc_id' => 1803,
                'date_enrolled' => '2022-06-07',
                'student_id' => 506,
                'class_id' => 256,
            ),
            303 => 
            array (
                'sc_id' => 1804,
                'date_enrolled' => '2022-06-23',
                'student_id' => 925,
                'class_id' => 86,
            ),
            304 => 
            array (
                'sc_id' => 1805,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1500,
                'class_id' => 190,
            ),
            305 => 
            array (
                'sc_id' => 1806,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1729,
                'class_id' => 70,
            ),
            306 => 
            array (
                'sc_id' => 1807,
                'date_enrolled' => '2022-06-07',
                'student_id' => 417,
                'class_id' => 436,
            ),
            307 => 
            array (
                'sc_id' => 1808,
                'date_enrolled' => '2022-06-26',
                'student_id' => 689,
                'class_id' => 380,
            ),
            308 => 
            array (
                'sc_id' => 1809,
                'date_enrolled' => '2022-07-22',
                'student_id' => 823,
                'class_id' => 333,
            ),
            309 => 
            array (
                'sc_id' => 1810,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1354,
                'class_id' => 200,
            ),
            310 => 
            array (
                'sc_id' => 1811,
                'date_enrolled' => '2022-06-29',
                'student_id' => 842,
                'class_id' => 249,
            ),
            311 => 
            array (
                'sc_id' => 1812,
                'date_enrolled' => '2022-06-16',
                'student_id' => 285,
                'class_id' => 144,
            ),
            312 => 
            array (
                'sc_id' => 1813,
                'date_enrolled' => '2022-08-25',
                'student_id' => 632,
                'class_id' => 315,
            ),
            313 => 
            array (
                'sc_id' => 1814,
                'date_enrolled' => '2022-06-30',
                'student_id' => 584,
                'class_id' => 346,
            ),
            314 => 
            array (
                'sc_id' => 1815,
                'date_enrolled' => '2022-06-15',
                'student_id' => 647,
                'class_id' => 415,
            ),
            315 => 
            array (
                'sc_id' => 1816,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1580,
                'class_id' => 298,
            ),
            316 => 
            array (
                'sc_id' => 1817,
                'date_enrolled' => '2022-08-14',
                'student_id' => 372,
                'class_id' => 296,
            ),
            317 => 
            array (
                'sc_id' => 1818,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1646,
                'class_id' => 328,
            ),
            318 => 
            array (
                'sc_id' => 1819,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1567,
                'class_id' => 297,
            ),
            319 => 
            array (
                'sc_id' => 1820,
                'date_enrolled' => '2022-06-27',
                'student_id' => 13,
                'class_id' => 306,
            ),
            320 => 
            array (
                'sc_id' => 1821,
                'date_enrolled' => '2022-08-30',
                'student_id' => 434,
                'class_id' => 13,
            ),
            321 => 
            array (
                'sc_id' => 1822,
                'date_enrolled' => '2022-06-26',
                'student_id' => 195,
                'class_id' => 322,
            ),
            322 => 
            array (
                'sc_id' => 1823,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1432,
                'class_id' => 233,
            ),
            323 => 
            array (
                'sc_id' => 1824,
                'date_enrolled' => '2022-08-11',
                'student_id' => 661,
                'class_id' => 470,
            ),
            324 => 
            array (
                'sc_id' => 1825,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1484,
                'class_id' => 60,
            ),
            325 => 
            array (
                'sc_id' => 1826,
                'date_enrolled' => '2022-08-10',
                'student_id' => 920,
                'class_id' => 60,
            ),
            326 => 
            array (
                'sc_id' => 1827,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1451,
                'class_id' => 379,
            ),
            327 => 
            array (
                'sc_id' => 1828,
                'date_enrolled' => '2022-07-28',
                'student_id' => 611,
                'class_id' => 364,
            ),
            328 => 
            array (
                'sc_id' => 1829,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1870,
                'class_id' => 323,
            ),
            329 => 
            array (
                'sc_id' => 1830,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1115,
                'class_id' => 432,
            ),
            330 => 
            array (
                'sc_id' => 1831,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1303,
                'class_id' => 227,
            ),
            331 => 
            array (
                'sc_id' => 1832,
                'date_enrolled' => '2022-08-08',
                'student_id' => 678,
                'class_id' => 489,
            ),
            332 => 
            array (
                'sc_id' => 1833,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1112,
                'class_id' => 143,
            ),
            333 => 
            array (
                'sc_id' => 1834,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1904,
                'class_id' => 283,
            ),
            334 => 
            array (
                'sc_id' => 1835,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1240,
                'class_id' => 417,
            ),
            335 => 
            array (
                'sc_id' => 1836,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1567,
                'class_id' => 270,
            ),
            336 => 
            array (
                'sc_id' => 1837,
                'date_enrolled' => '2022-08-09',
                'student_id' => 868,
                'class_id' => 36,
            ),
            337 => 
            array (
                'sc_id' => 1838,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1589,
                'class_id' => 67,
            ),
            338 => 
            array (
                'sc_id' => 1839,
                'date_enrolled' => '2022-06-07',
                'student_id' => 496,
                'class_id' => 296,
            ),
            339 => 
            array (
                'sc_id' => 1840,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1177,
                'class_id' => 297,
            ),
            340 => 
            array (
                'sc_id' => 1841,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1529,
                'class_id' => 182,
            ),
            341 => 
            array (
                'sc_id' => 1842,
                'date_enrolled' => '2022-08-19',
                'student_id' => 163,
                'class_id' => 123,
            ),
            342 => 
            array (
                'sc_id' => 1843,
                'date_enrolled' => '2022-07-05',
                'student_id' => 689,
                'class_id' => 274,
            ),
            343 => 
            array (
                'sc_id' => 1844,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1460,
                'class_id' => 419,
            ),
            344 => 
            array (
                'sc_id' => 1845,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1731,
                'class_id' => 0,
            ),
            345 => 
            array (
                'sc_id' => 1846,
                'date_enrolled' => '2022-08-29',
                'student_id' => 97,
                'class_id' => 135,
            ),
            346 => 
            array (
                'sc_id' => 1847,
                'date_enrolled' => '2022-07-31',
                'student_id' => 467,
                'class_id' => 123,
            ),
            347 => 
            array (
                'sc_id' => 1848,
                'date_enrolled' => '2022-08-31',
                'student_id' => 976,
                'class_id' => 368,
            ),
            348 => 
            array (
                'sc_id' => 1849,
                'date_enrolled' => '2022-07-18',
                'student_id' => 425,
                'class_id' => 299,
            ),
            349 => 
            array (
                'sc_id' => 1850,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1683,
                'class_id' => 306,
            ),
            350 => 
            array (
                'sc_id' => 1851,
                'date_enrolled' => '2022-07-08',
                'student_id' => 975,
                'class_id' => 308,
            ),
            351 => 
            array (
                'sc_id' => 1852,
                'date_enrolled' => '2022-07-05',
                'student_id' => 776,
                'class_id' => 37,
            ),
            352 => 
            array (
                'sc_id' => 1853,
                'date_enrolled' => '2022-07-29',
                'student_id' => 140,
                'class_id' => 355,
            ),
            353 => 
            array (
                'sc_id' => 1854,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1661,
                'class_id' => 182,
            ),
            354 => 
            array (
                'sc_id' => 1855,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1272,
                'class_id' => 114,
            ),
            355 => 
            array (
                'sc_id' => 1856,
                'date_enrolled' => '2022-06-25',
                'student_id' => 421,
                'class_id' => 226,
            ),
            356 => 
            array (
                'sc_id' => 1857,
                'date_enrolled' => '2022-07-30',
                'student_id' => 284,
                'class_id' => 353,
            ),
            357 => 
            array (
                'sc_id' => 1858,
                'date_enrolled' => '2022-07-05',
                'student_id' => 925,
                'class_id' => 402,
            ),
            358 => 
            array (
                'sc_id' => 1859,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1252,
                'class_id' => 24,
            ),
            359 => 
            array (
                'sc_id' => 1860,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1269,
                'class_id' => 50,
            ),
            360 => 
            array (
                'sc_id' => 1861,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1994,
                'class_id' => 209,
            ),
            361 => 
            array (
                'sc_id' => 1862,
                'date_enrolled' => '2022-08-13',
                'student_id' => 21,
                'class_id' => 261,
            ),
            362 => 
            array (
                'sc_id' => 1863,
                'date_enrolled' => '2022-06-11',
                'student_id' => 590,
                'class_id' => 308,
            ),
            363 => 
            array (
                'sc_id' => 1864,
                'date_enrolled' => '2022-08-12',
                'student_id' => 800,
                'class_id' => 102,
            ),
            364 => 
            array (
                'sc_id' => 1865,
                'date_enrolled' => '2022-06-16',
                'student_id' => 786,
                'class_id' => 346,
            ),
            365 => 
            array (
                'sc_id' => 1866,
                'date_enrolled' => '2022-08-22',
                'student_id' => 394,
                'class_id' => 440,
            ),
            366 => 
            array (
                'sc_id' => 1867,
                'date_enrolled' => '2022-07-03',
                'student_id' => 854,
                'class_id' => 368,
            ),
            367 => 
            array (
                'sc_id' => 1868,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1410,
                'class_id' => 175,
            ),
            368 => 
            array (
                'sc_id' => 1869,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1345,
                'class_id' => 292,
            ),
            369 => 
            array (
                'sc_id' => 1870,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1900,
                'class_id' => 202,
            ),
            370 => 
            array (
                'sc_id' => 1871,
                'date_enrolled' => '2022-08-07',
                'student_id' => 442,
                'class_id' => 290,
            ),
            371 => 
            array (
                'sc_id' => 1872,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1509,
                'class_id' => 284,
            ),
            372 => 
            array (
                'sc_id' => 1873,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1760,
                'class_id' => 34,
            ),
            373 => 
            array (
                'sc_id' => 1874,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1657,
                'class_id' => 369,
            ),
            374 => 
            array (
                'sc_id' => 1875,
                'date_enrolled' => '2022-07-01',
                'student_id' => 577,
                'class_id' => 157,
            ),
            375 => 
            array (
                'sc_id' => 1876,
                'date_enrolled' => '2022-06-09',
                'student_id' => 132,
                'class_id' => 228,
            ),
            376 => 
            array (
                'sc_id' => 1877,
                'date_enrolled' => '2022-06-28',
                'student_id' => 835,
                'class_id' => 235,
            ),
            377 => 
            array (
                'sc_id' => 1878,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1787,
                'class_id' => 401,
            ),
            378 => 
            array (
                'sc_id' => 1879,
                'date_enrolled' => '2022-06-01',
                'student_id' => 943,
                'class_id' => 470,
            ),
            379 => 
            array (
                'sc_id' => 1880,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1527,
                'class_id' => 100,
            ),
            380 => 
            array (
                'sc_id' => 1881,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1135,
                'class_id' => 49,
            ),
            381 => 
            array (
                'sc_id' => 1882,
                'date_enrolled' => '2022-06-24',
                'student_id' => 195,
                'class_id' => 396,
            ),
            382 => 
            array (
                'sc_id' => 1883,
                'date_enrolled' => '2022-08-31',
                'student_id' => 11,
                'class_id' => 75,
            ),
            383 => 
            array (
                'sc_id' => 1884,
                'date_enrolled' => '2022-07-09',
                'student_id' => 691,
                'class_id' => 149,
            ),
            384 => 
            array (
                'sc_id' => 1885,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1688,
                'class_id' => 350,
            ),
            385 => 
            array (
                'sc_id' => 1886,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1838,
                'class_id' => 494,
            ),
            386 => 
            array (
                'sc_id' => 1887,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1038,
                'class_id' => 437,
            ),
            387 => 
            array (
                'sc_id' => 1888,
                'date_enrolled' => '2022-07-12',
                'student_id' => 734,
                'class_id' => 164,
            ),
            388 => 
            array (
                'sc_id' => 1889,
                'date_enrolled' => '2022-07-24',
                'student_id' => 630,
                'class_id' => 82,
            ),
            389 => 
            array (
                'sc_id' => 1890,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1117,
                'class_id' => 289,
            ),
            390 => 
            array (
                'sc_id' => 1891,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1579,
                'class_id' => 362,
            ),
            391 => 
            array (
                'sc_id' => 1892,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1703,
                'class_id' => 349,
            ),
            392 => 
            array (
                'sc_id' => 1893,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1466,
                'class_id' => 125,
            ),
            393 => 
            array (
                'sc_id' => 1894,
                'date_enrolled' => '2022-07-11',
                'student_id' => 762,
                'class_id' => 454,
            ),
            394 => 
            array (
                'sc_id' => 1895,
                'date_enrolled' => '2022-08-12',
                'student_id' => 447,
                'class_id' => 482,
            ),
            395 => 
            array (
                'sc_id' => 1896,
                'date_enrolled' => '2022-06-10',
                'student_id' => 619,
                'class_id' => 478,
            ),
            396 => 
            array (
                'sc_id' => 1897,
                'date_enrolled' => '2022-07-08',
                'student_id' => 452,
                'class_id' => 246,
            ),
            397 => 
            array (
                'sc_id' => 1898,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1951,
                'class_id' => 176,
            ),
            398 => 
            array (
                'sc_id' => 1899,
                'date_enrolled' => '2022-07-24',
                'student_id' => 426,
                'class_id' => 62,
            ),
            399 => 
            array (
                'sc_id' => 1900,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1936,
                'class_id' => 368,
            ),
            400 => 
            array (
                'sc_id' => 1901,
                'date_enrolled' => '2022-08-05',
                'student_id' => 38,
                'class_id' => 432,
            ),
            401 => 
            array (
                'sc_id' => 1902,
                'date_enrolled' => '2022-08-24',
                'student_id' => 621,
                'class_id' => 117,
            ),
            402 => 
            array (
                'sc_id' => 1903,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1969,
                'class_id' => 0,
            ),
            403 => 
            array (
                'sc_id' => 1904,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1885,
                'class_id' => 463,
            ),
            404 => 
            array (
                'sc_id' => 1905,
                'date_enrolled' => '2022-07-26',
                'student_id' => 142,
                'class_id' => 421,
            ),
            405 => 
            array (
                'sc_id' => 1906,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1085,
                'class_id' => 492,
            ),
            406 => 
            array (
                'sc_id' => 1907,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1411,
                'class_id' => 245,
            ),
            407 => 
            array (
                'sc_id' => 1908,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1500,
                'class_id' => 463,
            ),
            408 => 
            array (
                'sc_id' => 1909,
                'date_enrolled' => '2022-06-11',
                'student_id' => 567,
                'class_id' => 375,
            ),
            409 => 
            array (
                'sc_id' => 1910,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1584,
                'class_id' => 125,
            ),
            410 => 
            array (
                'sc_id' => 1911,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1085,
                'class_id' => 407,
            ),
            411 => 
            array (
                'sc_id' => 1912,
                'date_enrolled' => '2022-08-14',
                'student_id' => 84,
                'class_id' => 240,
            ),
            412 => 
            array (
                'sc_id' => 1913,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1589,
                'class_id' => 472,
            ),
            413 => 
            array (
                'sc_id' => 1914,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1216,
                'class_id' => 158,
            ),
            414 => 
            array (
                'sc_id' => 1915,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1575,
                'class_id' => 324,
            ),
            415 => 
            array (
                'sc_id' => 1916,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1036,
                'class_id' => 1,
            ),
            416 => 
            array (
                'sc_id' => 1917,
                'date_enrolled' => '2022-06-01',
                'student_id' => 212,
                'class_id' => 19,
            ),
            417 => 
            array (
                'sc_id' => 1918,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1927,
                'class_id' => 6,
            ),
            418 => 
            array (
                'sc_id' => 1919,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1205,
                'class_id' => 20,
            ),
            419 => 
            array (
                'sc_id' => 1920,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1270,
                'class_id' => 70,
            ),
            420 => 
            array (
                'sc_id' => 1921,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1290,
                'class_id' => 447,
            ),
            421 => 
            array (
                'sc_id' => 1922,
                'date_enrolled' => '2022-08-17',
                'student_id' => 431,
                'class_id' => 282,
            ),
            422 => 
            array (
                'sc_id' => 1923,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1892,
                'class_id' => 327,
            ),
            423 => 
            array (
                'sc_id' => 1924,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1248,
                'class_id' => 337,
            ),
            424 => 
            array (
                'sc_id' => 1925,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1808,
                'class_id' => 4,
            ),
            425 => 
            array (
                'sc_id' => 1926,
                'date_enrolled' => '2022-08-01',
                'student_id' => 951,
                'class_id' => 258,
            ),
            426 => 
            array (
                'sc_id' => 1927,
                'date_enrolled' => '2022-07-22',
                'student_id' => 486,
                'class_id' => 493,
            ),
            427 => 
            array (
                'sc_id' => 1928,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1542,
                'class_id' => 360,
            ),
            428 => 
            array (
                'sc_id' => 1929,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1445,
                'class_id' => 79,
            ),
            429 => 
            array (
                'sc_id' => 1930,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1710,
                'class_id' => 185,
            ),
            430 => 
            array (
                'sc_id' => 1931,
                'date_enrolled' => '2022-08-01',
                'student_id' => 133,
                'class_id' => 50,
            ),
            431 => 
            array (
                'sc_id' => 1932,
                'date_enrolled' => '2022-06-20',
                'student_id' => 650,
                'class_id' => 207,
            ),
            432 => 
            array (
                'sc_id' => 1933,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1481,
                'class_id' => 90,
            ),
            433 => 
            array (
                'sc_id' => 1934,
                'date_enrolled' => '2022-06-02',
                'student_id' => 121,
                'class_id' => 202,
            ),
            434 => 
            array (
                'sc_id' => 1935,
                'date_enrolled' => '2022-08-22',
                'student_id' => 476,
                'class_id' => 146,
            ),
            435 => 
            array (
                'sc_id' => 1936,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1472,
                'class_id' => 1,
            ),
            436 => 
            array (
                'sc_id' => 1937,
                'date_enrolled' => '2022-06-29',
                'student_id' => 308,
                'class_id' => 145,
            ),
            437 => 
            array (
                'sc_id' => 1938,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1092,
                'class_id' => 357,
            ),
            438 => 
            array (
                'sc_id' => 1939,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1421,
                'class_id' => 302,
            ),
            439 => 
            array (
                'sc_id' => 1940,
                'date_enrolled' => '2022-07-04',
                'student_id' => 323,
                'class_id' => 493,
            ),
            440 => 
            array (
                'sc_id' => 1941,
                'date_enrolled' => '2022-06-12',
                'student_id' => 232,
                'class_id' => 252,
            ),
            441 => 
            array (
                'sc_id' => 1942,
                'date_enrolled' => '2022-06-03',
                'student_id' => 719,
                'class_id' => 186,
            ),
            442 => 
            array (
                'sc_id' => 1943,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1511,
                'class_id' => 87,
            ),
            443 => 
            array (
                'sc_id' => 1944,
                'date_enrolled' => '2022-06-14',
                'student_id' => 788,
                'class_id' => 160,
            ),
            444 => 
            array (
                'sc_id' => 1945,
                'date_enrolled' => '2022-08-30',
                'student_id' => 81,
                'class_id' => 12,
            ),
            445 => 
            array (
                'sc_id' => 1946,
                'date_enrolled' => '2022-08-18',
                'student_id' => 441,
                'class_id' => 217,
            ),
            446 => 
            array (
                'sc_id' => 1947,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1216,
                'class_id' => 306,
            ),
            447 => 
            array (
                'sc_id' => 1948,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1116,
                'class_id' => 222,
            ),
            448 => 
            array (
                'sc_id' => 1949,
                'date_enrolled' => '2022-08-28',
                'student_id' => 469,
                'class_id' => 124,
            ),
            449 => 
            array (
                'sc_id' => 1950,
                'date_enrolled' => '2022-07-16',
                'student_id' => 772,
                'class_id' => 25,
            ),
            450 => 
            array (
                'sc_id' => 1951,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1191,
                'class_id' => 404,
            ),
            451 => 
            array (
                'sc_id' => 1952,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1077,
                'class_id' => 332,
            ),
            452 => 
            array (
                'sc_id' => 1953,
                'date_enrolled' => '2022-06-29',
                'student_id' => 78,
                'class_id' => 484,
            ),
            453 => 
            array (
                'sc_id' => 1954,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1223,
                'class_id' => 36,
            ),
            454 => 
            array (
                'sc_id' => 1955,
                'date_enrolled' => '2022-06-11',
                'student_id' => 779,
                'class_id' => 470,
            ),
            455 => 
            array (
                'sc_id' => 1956,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1032,
                'class_id' => 55,
            ),
            456 => 
            array (
                'sc_id' => 1957,
                'date_enrolled' => '2022-08-17',
                'student_id' => 167,
                'class_id' => 466,
            ),
            457 => 
            array (
                'sc_id' => 1958,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1073,
                'class_id' => 335,
            ),
            458 => 
            array (
                'sc_id' => 1959,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1645,
                'class_id' => 281,
            ),
            459 => 
            array (
                'sc_id' => 1960,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1126,
                'class_id' => 382,
            ),
            460 => 
            array (
                'sc_id' => 1961,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1415,
                'class_id' => 357,
            ),
            461 => 
            array (
                'sc_id' => 1962,
                'date_enrolled' => '2022-08-13',
                'student_id' => 245,
                'class_id' => 316,
            ),
            462 => 
            array (
                'sc_id' => 1963,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1810,
                'class_id' => 495,
            ),
            463 => 
            array (
                'sc_id' => 1964,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1541,
                'class_id' => 222,
            ),
            464 => 
            array (
                'sc_id' => 1965,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1972,
                'class_id' => 53,
            ),
            465 => 
            array (
                'sc_id' => 1966,
                'date_enrolled' => '2022-08-21',
                'student_id' => 379,
                'class_id' => 182,
            ),
            466 => 
            array (
                'sc_id' => 1967,
                'date_enrolled' => '2022-08-06',
                'student_id' => 145,
                'class_id' => 35,
            ),
            467 => 
            array (
                'sc_id' => 1968,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1926,
                'class_id' => 155,
            ),
            468 => 
            array (
                'sc_id' => 1969,
                'date_enrolled' => '2022-08-19',
                'student_id' => 207,
                'class_id' => 219,
            ),
            469 => 
            array (
                'sc_id' => 1970,
                'date_enrolled' => '2022-07-13',
                'student_id' => 9,
                'class_id' => 437,
            ),
            470 => 
            array (
                'sc_id' => 1971,
                'date_enrolled' => '2022-06-05',
                'student_id' => 188,
                'class_id' => 262,
            ),
            471 => 
            array (
                'sc_id' => 1972,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1978,
                'class_id' => 329,
            ),
            472 => 
            array (
                'sc_id' => 1973,
                'date_enrolled' => '2022-07-18',
                'student_id' => 916,
                'class_id' => 282,
            ),
            473 => 
            array (
                'sc_id' => 1974,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1123,
                'class_id' => 278,
            ),
            474 => 
            array (
                'sc_id' => 1975,
                'date_enrolled' => '2022-07-25',
                'student_id' => 161,
                'class_id' => 492,
            ),
            475 => 
            array (
                'sc_id' => 1976,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1960,
                'class_id' => 60,
            ),
            476 => 
            array (
                'sc_id' => 1977,
                'date_enrolled' => '2022-08-03',
                'student_id' => 646,
                'class_id' => 315,
            ),
            477 => 
            array (
                'sc_id' => 1978,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1643,
                'class_id' => 266,
            ),
            478 => 
            array (
                'sc_id' => 1979,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1680,
                'class_id' => 442,
            ),
            479 => 
            array (
                'sc_id' => 1980,
                'date_enrolled' => '2022-06-06',
                'student_id' => 270,
                'class_id' => 431,
            ),
            480 => 
            array (
                'sc_id' => 1981,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1207,
                'class_id' => 226,
            ),
            481 => 
            array (
                'sc_id' => 1982,
                'date_enrolled' => '2022-06-02',
                'student_id' => 798,
                'class_id' => 183,
            ),
            482 => 
            array (
                'sc_id' => 1983,
                'date_enrolled' => '2022-07-26',
                'student_id' => 630,
                'class_id' => 173,
            ),
            483 => 
            array (
                'sc_id' => 1984,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1168,
                'class_id' => 451,
            ),
            484 => 
            array (
                'sc_id' => 1985,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1332,
                'class_id' => 390,
            ),
            485 => 
            array (
                'sc_id' => 1986,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1904,
                'class_id' => 416,
            ),
            486 => 
            array (
                'sc_id' => 1987,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1716,
                'class_id' => 415,
            ),
            487 => 
            array (
                'sc_id' => 1988,
                'date_enrolled' => '2022-07-02',
                'student_id' => 975,
                'class_id' => 214,
            ),
            488 => 
            array (
                'sc_id' => 1989,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1707,
                'class_id' => 176,
            ),
            489 => 
            array (
                'sc_id' => 1990,
                'date_enrolled' => '2022-08-07',
                'student_id' => 322,
                'class_id' => 303,
            ),
            490 => 
            array (
                'sc_id' => 1991,
                'date_enrolled' => '2022-08-13',
                'student_id' => 662,
                'class_id' => 128,
            ),
            491 => 
            array (
                'sc_id' => 1992,
                'date_enrolled' => '2022-08-25',
                'student_id' => 772,
                'class_id' => 223,
            ),
            492 => 
            array (
                'sc_id' => 1993,
                'date_enrolled' => '2022-08-18',
                'student_id' => 691,
                'class_id' => 261,
            ),
            493 => 
            array (
                'sc_id' => 1994,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1037,
                'class_id' => 282,
            ),
            494 => 
            array (
                'sc_id' => 1995,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1883,
                'class_id' => 287,
            ),
            495 => 
            array (
                'sc_id' => 1996,
                'date_enrolled' => '2022-08-09',
                'student_id' => 431,
                'class_id' => 61,
            ),
            496 => 
            array (
                'sc_id' => 1997,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1975,
                'class_id' => 241,
            ),
            497 => 
            array (
                'sc_id' => 1998,
                'date_enrolled' => '2022-07-19',
                'student_id' => 205,
                'class_id' => 103,
            ),
            498 => 
            array (
                'sc_id' => 1999,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1448,
                'class_id' => 13,
            ),
            499 => 
            array (
                'sc_id' => 2000,
                'date_enrolled' => '2022-07-02',
                'student_id' => 106,
                'class_id' => 474,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 2001,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1413,
                'class_id' => 32,
            ),
            1 => 
            array (
                'sc_id' => 2002,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1684,
                'class_id' => 488,
            ),
            2 => 
            array (
                'sc_id' => 2003,
                'date_enrolled' => '2022-08-02',
                'student_id' => 206,
                'class_id' => 219,
            ),
            3 => 
            array (
                'sc_id' => 2004,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1318,
                'class_id' => 298,
            ),
            4 => 
            array (
                'sc_id' => 2005,
                'date_enrolled' => '2022-07-19',
                'student_id' => 192,
                'class_id' => 138,
            ),
            5 => 
            array (
                'sc_id' => 2006,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1581,
                'class_id' => 189,
            ),
            6 => 
            array (
                'sc_id' => 2007,
                'date_enrolled' => '2022-06-11',
                'student_id' => 337,
                'class_id' => 293,
            ),
            7 => 
            array (
                'sc_id' => 2008,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1414,
                'class_id' => 245,
            ),
            8 => 
            array (
                'sc_id' => 2009,
                'date_enrolled' => '2022-07-25',
                'student_id' => 187,
                'class_id' => 337,
            ),
            9 => 
            array (
                'sc_id' => 2010,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1821,
                'class_id' => 421,
            ),
            10 => 
            array (
                'sc_id' => 2011,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1839,
                'class_id' => 296,
            ),
            11 => 
            array (
                'sc_id' => 2012,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1082,
                'class_id' => 437,
            ),
            12 => 
            array (
                'sc_id' => 2013,
                'date_enrolled' => '2022-07-26',
                'student_id' => 360,
                'class_id' => 310,
            ),
            13 => 
            array (
                'sc_id' => 2014,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1565,
                'class_id' => 245,
            ),
            14 => 
            array (
                'sc_id' => 2015,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1247,
                'class_id' => 401,
            ),
            15 => 
            array (
                'sc_id' => 2016,
                'date_enrolled' => '2022-06-09',
                'student_id' => 865,
                'class_id' => 266,
            ),
            16 => 
            array (
                'sc_id' => 2017,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1947,
                'class_id' => 106,
            ),
            17 => 
            array (
                'sc_id' => 2018,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1349,
                'class_id' => 62,
            ),
            18 => 
            array (
                'sc_id' => 2019,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1363,
                'class_id' => 259,
            ),
            19 => 
            array (
                'sc_id' => 2020,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1886,
                'class_id' => 372,
            ),
            20 => 
            array (
                'sc_id' => 2021,
                'date_enrolled' => '2022-08-25',
                'student_id' => 605,
                'class_id' => 209,
            ),
            21 => 
            array (
                'sc_id' => 2022,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1672,
                'class_id' => 200,
            ),
            22 => 
            array (
                'sc_id' => 2023,
                'date_enrolled' => '2022-06-06',
                'student_id' => 323,
                'class_id' => 104,
            ),
            23 => 
            array (
                'sc_id' => 2024,
                'date_enrolled' => '2022-07-01',
                'student_id' => 943,
                'class_id' => 424,
            ),
            24 => 
            array (
                'sc_id' => 2025,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1376,
                'class_id' => 238,
            ),
            25 => 
            array (
                'sc_id' => 2026,
                'date_enrolled' => '2022-08-21',
                'student_id' => 379,
                'class_id' => 156,
            ),
            26 => 
            array (
                'sc_id' => 2027,
                'date_enrolled' => '2022-08-17',
                'student_id' => 934,
                'class_id' => 50,
            ),
            27 => 
            array (
                'sc_id' => 2028,
                'date_enrolled' => '2022-06-05',
                'student_id' => 395,
                'class_id' => 59,
            ),
            28 => 
            array (
                'sc_id' => 2029,
                'date_enrolled' => '2022-06-25',
                'student_id' => 689,
                'class_id' => 80,
            ),
            29 => 
            array (
                'sc_id' => 2030,
                'date_enrolled' => '2022-06-13',
                'student_id' => 696,
                'class_id' => 42,
            ),
            30 => 
            array (
                'sc_id' => 2031,
                'date_enrolled' => '2022-07-12',
                'student_id' => 75,
                'class_id' => 439,
            ),
            31 => 
            array (
                'sc_id' => 2032,
                'date_enrolled' => '2022-07-22',
                'student_id' => 893,
                'class_id' => 297,
            ),
            32 => 
            array (
                'sc_id' => 2033,
                'date_enrolled' => '2022-08-05',
                'student_id' => 103,
                'class_id' => 444,
            ),
            33 => 
            array (
                'sc_id' => 2034,
                'date_enrolled' => '2022-06-15',
                'student_id' => 116,
                'class_id' => 88,
            ),
            34 => 
            array (
                'sc_id' => 2035,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1858,
                'class_id' => 233,
            ),
            35 => 
            array (
                'sc_id' => 2036,
                'date_enrolled' => '2022-06-28',
                'student_id' => 558,
                'class_id' => 223,
            ),
            36 => 
            array (
                'sc_id' => 2037,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1942,
                'class_id' => 7,
            ),
            37 => 
            array (
                'sc_id' => 2038,
                'date_enrolled' => '2022-06-26',
                'student_id' => 787,
                'class_id' => 253,
            ),
            38 => 
            array (
                'sc_id' => 2039,
                'date_enrolled' => '2022-06-29',
                'student_id' => 211,
                'class_id' => 96,
            ),
            39 => 
            array (
                'sc_id' => 2040,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1281,
                'class_id' => 414,
            ),
            40 => 
            array (
                'sc_id' => 2041,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1233,
                'class_id' => 34,
            ),
            41 => 
            array (
                'sc_id' => 2042,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1294,
                'class_id' => 86,
            ),
            42 => 
            array (
                'sc_id' => 2043,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1921,
                'class_id' => 176,
            ),
            43 => 
            array (
                'sc_id' => 2044,
                'date_enrolled' => '2022-08-18',
                'student_id' => 32,
                'class_id' => 437,
            ),
            44 => 
            array (
                'sc_id' => 2045,
                'date_enrolled' => '2022-07-01',
                'student_id' => 291,
                'class_id' => 260,
            ),
            45 => 
            array (
                'sc_id' => 2046,
                'date_enrolled' => '2022-07-26',
                'student_id' => 651,
                'class_id' => 490,
            ),
            46 => 
            array (
                'sc_id' => 2047,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1229,
                'class_id' => 287,
            ),
            47 => 
            array (
                'sc_id' => 2048,
                'date_enrolled' => '2022-08-10',
                'student_id' => 328,
                'class_id' => 362,
            ),
            48 => 
            array (
                'sc_id' => 2049,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1184,
                'class_id' => 315,
            ),
            49 => 
            array (
                'sc_id' => 2050,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1901,
                'class_id' => 37,
            ),
            50 => 
            array (
                'sc_id' => 2051,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1532,
                'class_id' => 265,
            ),
            51 => 
            array (
                'sc_id' => 2052,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1816,
                'class_id' => 395,
            ),
            52 => 
            array (
                'sc_id' => 2053,
                'date_enrolled' => '2022-08-27',
                'student_id' => 332,
                'class_id' => 124,
            ),
            53 => 
            array (
                'sc_id' => 2054,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1437,
                'class_id' => 153,
            ),
            54 => 
            array (
                'sc_id' => 2055,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1155,
                'class_id' => 327,
            ),
            55 => 
            array (
                'sc_id' => 2056,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1285,
                'class_id' => 486,
            ),
            56 => 
            array (
                'sc_id' => 2057,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1766,
                'class_id' => 304,
            ),
            57 => 
            array (
                'sc_id' => 2058,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1088,
                'class_id' => 456,
            ),
            58 => 
            array (
                'sc_id' => 2059,
                'date_enrolled' => '2022-07-15',
                'student_id' => 78,
                'class_id' => 32,
            ),
            59 => 
            array (
                'sc_id' => 2060,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1952,
                'class_id' => 284,
            ),
            60 => 
            array (
                'sc_id' => 2061,
                'date_enrolled' => '2022-06-14',
                'student_id' => 708,
                'class_id' => 210,
            ),
            61 => 
            array (
                'sc_id' => 2062,
                'date_enrolled' => '2022-06-22',
                'student_id' => 544,
                'class_id' => 288,
            ),
            62 => 
            array (
                'sc_id' => 2063,
                'date_enrolled' => '2022-06-20',
                'student_id' => 282,
                'class_id' => 154,
            ),
            63 => 
            array (
                'sc_id' => 2064,
                'date_enrolled' => '2022-08-10',
                'student_id' => 527,
                'class_id' => 467,
            ),
            64 => 
            array (
                'sc_id' => 2065,
                'date_enrolled' => '2022-08-14',
                'student_id' => 938,
                'class_id' => 59,
            ),
            65 => 
            array (
                'sc_id' => 2066,
                'date_enrolled' => '2022-07-25',
                'student_id' => 457,
                'class_id' => 431,
            ),
            66 => 
            array (
                'sc_id' => 2067,
                'date_enrolled' => '2022-07-23',
                'student_id' => 353,
                'class_id' => 87,
            ),
            67 => 
            array (
                'sc_id' => 2068,
                'date_enrolled' => '2022-08-15',
                'student_id' => 16,
                'class_id' => 1,
            ),
            68 => 
            array (
                'sc_id' => 2069,
                'date_enrolled' => '2022-06-15',
                'student_id' => 147,
                'class_id' => 99,
            ),
            69 => 
            array (
                'sc_id' => 2070,
                'date_enrolled' => '2022-08-28',
                'student_id' => 440,
                'class_id' => 336,
            ),
            70 => 
            array (
                'sc_id' => 2071,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1690,
                'class_id' => 381,
            ),
            71 => 
            array (
                'sc_id' => 2072,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1035,
                'class_id' => 66,
            ),
            72 => 
            array (
                'sc_id' => 2073,
                'date_enrolled' => '2022-06-06',
                'student_id' => 298,
                'class_id' => 336,
            ),
            73 => 
            array (
                'sc_id' => 2074,
                'date_enrolled' => '2022-06-15',
                'student_id' => 267,
                'class_id' => 436,
            ),
            74 => 
            array (
                'sc_id' => 2075,
                'date_enrolled' => '2022-08-18',
                'student_id' => 276,
                'class_id' => 333,
            ),
            75 => 
            array (
                'sc_id' => 2076,
                'date_enrolled' => '2022-06-02',
                'student_id' => 523,
                'class_id' => 331,
            ),
            76 => 
            array (
                'sc_id' => 2077,
                'date_enrolled' => '2022-08-05',
                'student_id' => 750,
                'class_id' => 111,
            ),
            77 => 
            array (
                'sc_id' => 2078,
                'date_enrolled' => '2022-07-31',
                'student_id' => 37,
                'class_id' => 486,
            ),
            78 => 
            array (
                'sc_id' => 2079,
                'date_enrolled' => '2022-07-13',
                'student_id' => 823,
                'class_id' => 231,
            ),
            79 => 
            array (
                'sc_id' => 2080,
                'date_enrolled' => '2022-06-10',
                'student_id' => 63,
                'class_id' => 87,
            ),
            80 => 
            array (
                'sc_id' => 2081,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1058,
                'class_id' => 189,
            ),
            81 => 
            array (
                'sc_id' => 2082,
                'date_enrolled' => '2022-08-24',
                'student_id' => 195,
                'class_id' => 377,
            ),
            82 => 
            array (
                'sc_id' => 2083,
                'date_enrolled' => '2022-07-01',
                'student_id' => 863,
                'class_id' => 200,
            ),
            83 => 
            array (
                'sc_id' => 2084,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1174,
                'class_id' => 204,
            ),
            84 => 
            array (
                'sc_id' => 2085,
                'date_enrolled' => '2022-07-12',
                'student_id' => 13,
                'class_id' => 331,
            ),
            85 => 
            array (
                'sc_id' => 2086,
                'date_enrolled' => '2022-06-10',
                'student_id' => 703,
                'class_id' => 205,
            ),
            86 => 
            array (
                'sc_id' => 2087,
                'date_enrolled' => '2022-07-29',
                'student_id' => 230,
                'class_id' => 120,
            ),
            87 => 
            array (
                'sc_id' => 2088,
                'date_enrolled' => '2022-07-09',
                'student_id' => 901,
                'class_id' => 211,
            ),
            88 => 
            array (
                'sc_id' => 2089,
                'date_enrolled' => '2022-06-13',
                'student_id' => 537,
                'class_id' => 84,
            ),
            89 => 
            array (
                'sc_id' => 2090,
                'date_enrolled' => '2022-07-17',
                'student_id' => 437,
                'class_id' => 182,
            ),
            90 => 
            array (
                'sc_id' => 2091,
                'date_enrolled' => '2022-08-08',
                'student_id' => 115,
                'class_id' => 248,
            ),
            91 => 
            array (
                'sc_id' => 2092,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1351,
                'class_id' => 156,
            ),
            92 => 
            array (
                'sc_id' => 2093,
                'date_enrolled' => '2022-06-28',
                'student_id' => 814,
                'class_id' => 433,
            ),
            93 => 
            array (
                'sc_id' => 2094,
                'date_enrolled' => '2022-08-15',
                'student_id' => 229,
                'class_id' => 391,
            ),
            94 => 
            array (
                'sc_id' => 2095,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1532,
                'class_id' => 242,
            ),
            95 => 
            array (
                'sc_id' => 2096,
                'date_enrolled' => '2022-08-25',
                'student_id' => 904,
                'class_id' => 22,
            ),
            96 => 
            array (
                'sc_id' => 2097,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1942,
                'class_id' => 122,
            ),
            97 => 
            array (
                'sc_id' => 2098,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1874,
                'class_id' => 321,
            ),
            98 => 
            array (
                'sc_id' => 2099,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1847,
                'class_id' => 252,
            ),
            99 => 
            array (
                'sc_id' => 2100,
                'date_enrolled' => '2022-08-02',
                'student_id' => 713,
                'class_id' => 138,
            ),
            100 => 
            array (
                'sc_id' => 2101,
                'date_enrolled' => '2022-07-05',
                'student_id' => 747,
                'class_id' => 446,
            ),
            101 => 
            array (
                'sc_id' => 2102,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1787,
                'class_id' => 312,
            ),
            102 => 
            array (
                'sc_id' => 2103,
                'date_enrolled' => '2022-08-04',
                'student_id' => 736,
                'class_id' => 281,
            ),
            103 => 
            array (
                'sc_id' => 2104,
                'date_enrolled' => '2022-08-28',
                'student_id' => 510,
                'class_id' => 495,
            ),
            104 => 
            array (
                'sc_id' => 2105,
                'date_enrolled' => '2022-06-01',
                'student_id' => 191,
                'class_id' => 441,
            ),
            105 => 
            array (
                'sc_id' => 2106,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1829,
                'class_id' => 173,
            ),
            106 => 
            array (
                'sc_id' => 2107,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1434,
                'class_id' => 121,
            ),
            107 => 
            array (
                'sc_id' => 2108,
                'date_enrolled' => '2022-07-20',
                'student_id' => 241,
                'class_id' => 56,
            ),
            108 => 
            array (
                'sc_id' => 2109,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1324,
                'class_id' => 34,
            ),
            109 => 
            array (
                'sc_id' => 2110,
                'date_enrolled' => '2022-08-12',
                'student_id' => 180,
                'class_id' => 25,
            ),
            110 => 
            array (
                'sc_id' => 2111,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1292,
                'class_id' => 93,
            ),
            111 => 
            array (
                'sc_id' => 2112,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1190,
                'class_id' => 169,
            ),
            112 => 
            array (
                'sc_id' => 2113,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1920,
                'class_id' => 21,
            ),
            113 => 
            array (
                'sc_id' => 2114,
                'date_enrolled' => '2022-06-09',
                'student_id' => 229,
                'class_id' => 36,
            ),
            114 => 
            array (
                'sc_id' => 2115,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1649,
                'class_id' => 57,
            ),
            115 => 
            array (
                'sc_id' => 2116,
                'date_enrolled' => '2022-08-13',
                'student_id' => 782,
                'class_id' => 300,
            ),
            116 => 
            array (
                'sc_id' => 2117,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1047,
                'class_id' => 18,
            ),
            117 => 
            array (
                'sc_id' => 2118,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1744,
                'class_id' => 458,
            ),
            118 => 
            array (
                'sc_id' => 2119,
                'date_enrolled' => '2022-07-14',
                'student_id' => 906,
                'class_id' => 368,
            ),
            119 => 
            array (
                'sc_id' => 2120,
                'date_enrolled' => '2022-07-18',
                'student_id' => 577,
                'class_id' => 330,
            ),
            120 => 
            array (
                'sc_id' => 2121,
                'date_enrolled' => '2022-08-27',
                'student_id' => 278,
                'class_id' => 332,
            ),
            121 => 
            array (
                'sc_id' => 2122,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1170,
                'class_id' => 498,
            ),
            122 => 
            array (
                'sc_id' => 2123,
                'date_enrolled' => '2022-07-05',
                'student_id' => 948,
                'class_id' => 210,
            ),
            123 => 
            array (
                'sc_id' => 2124,
                'date_enrolled' => '2022-06-26',
                'student_id' => 657,
                'class_id' => 477,
            ),
            124 => 
            array (
                'sc_id' => 2125,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1469,
                'class_id' => 136,
            ),
            125 => 
            array (
                'sc_id' => 2126,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1992,
                'class_id' => 134,
            ),
            126 => 
            array (
                'sc_id' => 2127,
                'date_enrolled' => '2022-07-31',
                'student_id' => 924,
                'class_id' => 112,
            ),
            127 => 
            array (
                'sc_id' => 2128,
                'date_enrolled' => '2022-06-03',
                'student_id' => 278,
                'class_id' => 145,
            ),
            128 => 
            array (
                'sc_id' => 2129,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1803,
                'class_id' => 126,
            ),
            129 => 
            array (
                'sc_id' => 2130,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1841,
                'class_id' => 350,
            ),
            130 => 
            array (
                'sc_id' => 2131,
                'date_enrolled' => '2022-07-29',
                'student_id' => 787,
                'class_id' => 474,
            ),
            131 => 
            array (
                'sc_id' => 2132,
                'date_enrolled' => '2022-06-05',
                'student_id' => 138,
                'class_id' => 194,
            ),
            132 => 
            array (
                'sc_id' => 2133,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1885,
                'class_id' => 36,
            ),
            133 => 
            array (
                'sc_id' => 2134,
                'date_enrolled' => '2022-08-11',
                'student_id' => 948,
                'class_id' => 298,
            ),
            134 => 
            array (
                'sc_id' => 2135,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1101,
                'class_id' => 186,
            ),
            135 => 
            array (
                'sc_id' => 2136,
                'date_enrolled' => '2022-07-24',
                'student_id' => 541,
                'class_id' => 72,
            ),
            136 => 
            array (
                'sc_id' => 2137,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1629,
                'class_id' => 92,
            ),
            137 => 
            array (
                'sc_id' => 2138,
                'date_enrolled' => '2022-06-18',
                'student_id' => 853,
                'class_id' => 33,
            ),
            138 => 
            array (
                'sc_id' => 2139,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1857,
                'class_id' => 223,
            ),
            139 => 
            array (
                'sc_id' => 2140,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1841,
                'class_id' => 194,
            ),
            140 => 
            array (
                'sc_id' => 2141,
                'date_enrolled' => '2022-06-02',
                'student_id' => 116,
                'class_id' => 15,
            ),
            141 => 
            array (
                'sc_id' => 2142,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1411,
                'class_id' => 436,
            ),
            142 => 
            array (
                'sc_id' => 2143,
                'date_enrolled' => '2022-06-08',
                'student_id' => 419,
                'class_id' => 390,
            ),
            143 => 
            array (
                'sc_id' => 2144,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1602,
                'class_id' => 171,
            ),
            144 => 
            array (
                'sc_id' => 2145,
                'date_enrolled' => '2022-06-26',
                'student_id' => 525,
                'class_id' => 418,
            ),
            145 => 
            array (
                'sc_id' => 2146,
                'date_enrolled' => '2022-08-26',
                'student_id' => 247,
                'class_id' => 31,
            ),
            146 => 
            array (
                'sc_id' => 2147,
                'date_enrolled' => '2022-07-29',
                'student_id' => 665,
                'class_id' => 424,
            ),
            147 => 
            array (
                'sc_id' => 2148,
                'date_enrolled' => '2022-07-30',
                'student_id' => 975,
                'class_id' => 356,
            ),
            148 => 
            array (
                'sc_id' => 2149,
                'date_enrolled' => '2022-07-11',
                'student_id' => 546,
                'class_id' => 195,
            ),
            149 => 
            array (
                'sc_id' => 2150,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1612,
                'class_id' => 174,
            ),
            150 => 
            array (
                'sc_id' => 2151,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1372,
                'class_id' => 480,
            ),
            151 => 
            array (
                'sc_id' => 2152,
                'date_enrolled' => '2022-07-03',
                'student_id' => 220,
                'class_id' => 72,
            ),
            152 => 
            array (
                'sc_id' => 2153,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1523,
                'class_id' => 243,
            ),
            153 => 
            array (
                'sc_id' => 2154,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1156,
                'class_id' => 134,
            ),
            154 => 
            array (
                'sc_id' => 2155,
                'date_enrolled' => '2022-06-30',
                'student_id' => 805,
                'class_id' => 189,
            ),
            155 => 
            array (
                'sc_id' => 2156,
                'date_enrolled' => '2022-08-21',
                'student_id' => 534,
                'class_id' => 498,
            ),
            156 => 
            array (
                'sc_id' => 2157,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1570,
                'class_id' => 404,
            ),
            157 => 
            array (
                'sc_id' => 2158,
                'date_enrolled' => '2022-06-03',
                'student_id' => 66,
                'class_id' => 331,
            ),
            158 => 
            array (
                'sc_id' => 2159,
                'date_enrolled' => '2022-07-30',
                'student_id' => 838,
                'class_id' => 126,
            ),
            159 => 
            array (
                'sc_id' => 2160,
                'date_enrolled' => '2022-07-11',
                'student_id' => 475,
                'class_id' => 314,
            ),
            160 => 
            array (
                'sc_id' => 2161,
                'date_enrolled' => '2022-06-22',
                'student_id' => 474,
                'class_id' => 144,
            ),
            161 => 
            array (
                'sc_id' => 2162,
                'date_enrolled' => '2022-07-25',
                'student_id' => 830,
                'class_id' => 430,
            ),
            162 => 
            array (
                'sc_id' => 2163,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1784,
                'class_id' => 170,
            ),
            163 => 
            array (
                'sc_id' => 2164,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1764,
                'class_id' => 485,
            ),
            164 => 
            array (
                'sc_id' => 2165,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1796,
                'class_id' => 488,
            ),
            165 => 
            array (
                'sc_id' => 2166,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1995,
                'class_id' => 63,
            ),
            166 => 
            array (
                'sc_id' => 2167,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1350,
                'class_id' => 111,
            ),
            167 => 
            array (
                'sc_id' => 2168,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1132,
                'class_id' => 192,
            ),
            168 => 
            array (
                'sc_id' => 2169,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1227,
                'class_id' => 289,
            ),
            169 => 
            array (
                'sc_id' => 2170,
                'date_enrolled' => '2022-07-21',
                'student_id' => 650,
                'class_id' => 424,
            ),
            170 => 
            array (
                'sc_id' => 2171,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1677,
                'class_id' => 137,
            ),
            171 => 
            array (
                'sc_id' => 2172,
                'date_enrolled' => '2022-07-31',
                'student_id' => 353,
                'class_id' => 132,
            ),
            172 => 
            array (
                'sc_id' => 2173,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1184,
                'class_id' => 156,
            ),
            173 => 
            array (
                'sc_id' => 2174,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1683,
                'class_id' => 471,
            ),
            174 => 
            array (
                'sc_id' => 2175,
                'date_enrolled' => '2022-07-12',
                'student_id' => 434,
                'class_id' => 72,
            ),
            175 => 
            array (
                'sc_id' => 2176,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1357,
                'class_id' => 468,
            ),
            176 => 
            array (
                'sc_id' => 2177,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1671,
                'class_id' => 309,
            ),
            177 => 
            array (
                'sc_id' => 2178,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1126,
                'class_id' => 300,
            ),
            178 => 
            array (
                'sc_id' => 2179,
                'date_enrolled' => '2022-06-06',
                'student_id' => 302,
                'class_id' => 181,
            ),
            179 => 
            array (
                'sc_id' => 2180,
                'date_enrolled' => '2022-08-13',
                'student_id' => 430,
                'class_id' => 350,
            ),
            180 => 
            array (
                'sc_id' => 2181,
                'date_enrolled' => '2022-07-20',
                'student_id' => 289,
                'class_id' => 412,
            ),
            181 => 
            array (
                'sc_id' => 2182,
                'date_enrolled' => '2022-06-16',
                'student_id' => 244,
                'class_id' => 442,
            ),
            182 => 
            array (
                'sc_id' => 2183,
                'date_enrolled' => '2022-06-12',
                'student_id' => 24,
                'class_id' => 121,
            ),
            183 => 
            array (
                'sc_id' => 2184,
                'date_enrolled' => '2022-07-19',
                'student_id' => 457,
                'class_id' => 382,
            ),
            184 => 
            array (
                'sc_id' => 2185,
                'date_enrolled' => '2022-08-29',
                'student_id' => 231,
                'class_id' => 106,
            ),
            185 => 
            array (
                'sc_id' => 2186,
                'date_enrolled' => '2022-07-02',
                'student_id' => 549,
                'class_id' => 483,
            ),
            186 => 
            array (
                'sc_id' => 2187,
                'date_enrolled' => '2022-08-05',
                'student_id' => 804,
                'class_id' => 168,
            ),
            187 => 
            array (
                'sc_id' => 2188,
                'date_enrolled' => '2022-08-23',
                'student_id' => 900,
                'class_id' => 374,
            ),
            188 => 
            array (
                'sc_id' => 2189,
                'date_enrolled' => '2022-08-08',
                'student_id' => 787,
                'class_id' => 306,
            ),
            189 => 
            array (
                'sc_id' => 2190,
                'date_enrolled' => '2022-07-23',
                'student_id' => 823,
                'class_id' => 141,
            ),
            190 => 
            array (
                'sc_id' => 2191,
                'date_enrolled' => '2022-07-12',
                'student_id' => 863,
                'class_id' => 187,
            ),
            191 => 
            array (
                'sc_id' => 2192,
                'date_enrolled' => '2022-08-09',
                'student_id' => 247,
                'class_id' => 244,
            ),
            192 => 
            array (
                'sc_id' => 2193,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1174,
                'class_id' => 267,
            ),
            193 => 
            array (
                'sc_id' => 2194,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1553,
                'class_id' => 171,
            ),
            194 => 
            array (
                'sc_id' => 2195,
                'date_enrolled' => '2022-08-07',
                'student_id' => 567,
                'class_id' => 476,
            ),
            195 => 
            array (
                'sc_id' => 2196,
                'date_enrolled' => '2022-06-13',
                'student_id' => 99,
                'class_id' => 15,
            ),
            196 => 
            array (
                'sc_id' => 2197,
                'date_enrolled' => '2022-06-10',
                'student_id' => 185,
                'class_id' => 58,
            ),
            197 => 
            array (
                'sc_id' => 2198,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1591,
                'class_id' => 380,
            ),
            198 => 
            array (
                'sc_id' => 2199,
                'date_enrolled' => '2022-07-25',
                'student_id' => 499,
                'class_id' => 50,
            ),
            199 => 
            array (
                'sc_id' => 2200,
                'date_enrolled' => '2022-08-03',
                'student_id' => 345,
                'class_id' => 233,
            ),
            200 => 
            array (
                'sc_id' => 2201,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1939,
                'class_id' => 195,
            ),
            201 => 
            array (
                'sc_id' => 2202,
                'date_enrolled' => '2022-08-18',
                'student_id' => 167,
                'class_id' => 32,
            ),
            202 => 
            array (
                'sc_id' => 2203,
                'date_enrolled' => '2022-08-03',
                'student_id' => 188,
                'class_id' => 294,
            ),
            203 => 
            array (
                'sc_id' => 2204,
                'date_enrolled' => '2022-06-16',
                'student_id' => 352,
                'class_id' => 317,
            ),
            204 => 
            array (
                'sc_id' => 2205,
                'date_enrolled' => '2022-07-06',
                'student_id' => 35,
                'class_id' => 151,
            ),
            205 => 
            array (
                'sc_id' => 2206,
                'date_enrolled' => '2022-06-26',
                'student_id' => 237,
                'class_id' => 266,
            ),
            206 => 
            array (
                'sc_id' => 2207,
                'date_enrolled' => '2022-07-26',
                'student_id' => 314,
                'class_id' => 113,
            ),
            207 => 
            array (
                'sc_id' => 2208,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1445,
                'class_id' => 253,
            ),
            208 => 
            array (
                'sc_id' => 2209,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1005,
                'class_id' => 79,
            ),
            209 => 
            array (
                'sc_id' => 2210,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1612,
                'class_id' => 156,
            ),
            210 => 
            array (
                'sc_id' => 2211,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1926,
                'class_id' => 27,
            ),
            211 => 
            array (
                'sc_id' => 2212,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1953,
                'class_id' => 281,
            ),
            212 => 
            array (
                'sc_id' => 2213,
                'date_enrolled' => '2022-07-20',
                'student_id' => 918,
                'class_id' => 135,
            ),
            213 => 
            array (
                'sc_id' => 2214,
                'date_enrolled' => '2022-07-03',
                'student_id' => 607,
                'class_id' => 440,
            ),
            214 => 
            array (
                'sc_id' => 2215,
                'date_enrolled' => '2022-07-09',
                'student_id' => 110,
                'class_id' => 220,
            ),
            215 => 
            array (
                'sc_id' => 2216,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1610,
                'class_id' => 442,
            ),
            216 => 
            array (
                'sc_id' => 2217,
                'date_enrolled' => '2022-06-26',
                'student_id' => 233,
                'class_id' => 342,
            ),
            217 => 
            array (
                'sc_id' => 2218,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1351,
                'class_id' => 414,
            ),
            218 => 
            array (
                'sc_id' => 2219,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1584,
                'class_id' => 296,
            ),
            219 => 
            array (
                'sc_id' => 2220,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1925,
                'class_id' => 240,
            ),
            220 => 
            array (
                'sc_id' => 2221,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1472,
                'class_id' => 282,
            ),
            221 => 
            array (
                'sc_id' => 2222,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1460,
                'class_id' => 469,
            ),
            222 => 
            array (
                'sc_id' => 2223,
                'date_enrolled' => '2022-08-07',
                'student_id' => 674,
                'class_id' => 156,
            ),
            223 => 
            array (
                'sc_id' => 2224,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1831,
                'class_id' => 374,
            ),
            224 => 
            array (
                'sc_id' => 2225,
                'date_enrolled' => '2022-08-13',
                'student_id' => 144,
                'class_id' => 268,
            ),
            225 => 
            array (
                'sc_id' => 2226,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1559,
                'class_id' => 198,
            ),
            226 => 
            array (
                'sc_id' => 2227,
                'date_enrolled' => '2022-07-24',
                'student_id' => 232,
                'class_id' => 111,
            ),
            227 => 
            array (
                'sc_id' => 2228,
                'date_enrolled' => '2022-08-03',
                'student_id' => 833,
                'class_id' => 478,
            ),
            228 => 
            array (
                'sc_id' => 2229,
                'date_enrolled' => '2022-07-10',
                'student_id' => 379,
                'class_id' => 241,
            ),
            229 => 
            array (
                'sc_id' => 2230,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1106,
                'class_id' => 281,
            ),
            230 => 
            array (
                'sc_id' => 2231,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1867,
                'class_id' => 408,
            ),
            231 => 
            array (
                'sc_id' => 2232,
                'date_enrolled' => '2022-08-10',
                'student_id' => 584,
                'class_id' => 380,
            ),
            232 => 
            array (
                'sc_id' => 2233,
                'date_enrolled' => '2022-07-17',
                'student_id' => 738,
                'class_id' => 5,
            ),
            233 => 
            array (
                'sc_id' => 2234,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1573,
                'class_id' => 30,
            ),
            234 => 
            array (
                'sc_id' => 2235,
                'date_enrolled' => '2022-07-08',
                'student_id' => 128,
                'class_id' => 235,
            ),
            235 => 
            array (
                'sc_id' => 2236,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1474,
                'class_id' => 107,
            ),
            236 => 
            array (
                'sc_id' => 2237,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1779,
                'class_id' => 150,
            ),
            237 => 
            array (
                'sc_id' => 2238,
                'date_enrolled' => '2022-06-29',
                'student_id' => 690,
                'class_id' => 413,
            ),
            238 => 
            array (
                'sc_id' => 2239,
                'date_enrolled' => '2022-06-27',
                'student_id' => 468,
                'class_id' => 401,
            ),
            239 => 
            array (
                'sc_id' => 2240,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1496,
                'class_id' => 462,
            ),
            240 => 
            array (
                'sc_id' => 2241,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1577,
                'class_id' => 360,
            ),
            241 => 
            array (
                'sc_id' => 2242,
                'date_enrolled' => '2022-08-05',
                'student_id' => 27,
                'class_id' => 50,
            ),
            242 => 
            array (
                'sc_id' => 2243,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1928,
                'class_id' => 471,
            ),
            243 => 
            array (
                'sc_id' => 2244,
                'date_enrolled' => '2022-07-24',
                'student_id' => 217,
                'class_id' => 200,
            ),
            244 => 
            array (
                'sc_id' => 2245,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1484,
                'class_id' => 66,
            ),
            245 => 
            array (
                'sc_id' => 2246,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1270,
                'class_id' => 47,
            ),
            246 => 
            array (
                'sc_id' => 2247,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1537,
                'class_id' => 341,
            ),
            247 => 
            array (
                'sc_id' => 2248,
                'date_enrolled' => '2022-07-30',
                'student_id' => 551,
                'class_id' => 72,
            ),
            248 => 
            array (
                'sc_id' => 2249,
                'date_enrolled' => '2022-06-17',
                'student_id' => 828,
                'class_id' => 144,
            ),
            249 => 
            array (
                'sc_id' => 2250,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1906,
                'class_id' => 260,
            ),
            250 => 
            array (
                'sc_id' => 2251,
                'date_enrolled' => '2022-08-10',
                'student_id' => 622,
                'class_id' => 86,
            ),
            251 => 
            array (
                'sc_id' => 2252,
                'date_enrolled' => '2022-06-19',
                'student_id' => 359,
                'class_id' => 453,
            ),
            252 => 
            array (
                'sc_id' => 2253,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1491,
                'class_id' => 123,
            ),
            253 => 
            array (
                'sc_id' => 2254,
                'date_enrolled' => '2022-06-17',
                'student_id' => 758,
                'class_id' => 419,
            ),
            254 => 
            array (
                'sc_id' => 2255,
                'date_enrolled' => '2022-07-14',
                'student_id' => 998,
                'class_id' => 112,
            ),
            255 => 
            array (
                'sc_id' => 2256,
                'date_enrolled' => '2022-07-14',
                'student_id' => 802,
                'class_id' => 422,
            ),
            256 => 
            array (
                'sc_id' => 2257,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1296,
                'class_id' => 261,
            ),
            257 => 
            array (
                'sc_id' => 2258,
                'date_enrolled' => '2022-08-16',
                'student_id' => 776,
                'class_id' => 285,
            ),
            258 => 
            array (
                'sc_id' => 2259,
                'date_enrolled' => '2022-06-12',
                'student_id' => 616,
                'class_id' => 352,
            ),
            259 => 
            array (
                'sc_id' => 2260,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1857,
                'class_id' => 175,
            ),
            260 => 
            array (
                'sc_id' => 2261,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1414,
                'class_id' => 114,
            ),
            261 => 
            array (
                'sc_id' => 2262,
                'date_enrolled' => '2022-07-19',
                'student_id' => 189,
                'class_id' => 175,
            ),
            262 => 
            array (
                'sc_id' => 2263,
                'date_enrolled' => '2022-06-28',
                'student_id' => 338,
                'class_id' => 498,
            ),
            263 => 
            array (
                'sc_id' => 2264,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1489,
                'class_id' => 485,
            ),
            264 => 
            array (
                'sc_id' => 2265,
                'date_enrolled' => '2022-08-02',
                'student_id' => 571,
                'class_id' => 491,
            ),
            265 => 
            array (
                'sc_id' => 2266,
                'date_enrolled' => '2022-08-31',
                'student_id' => 484,
                'class_id' => 80,
            ),
            266 => 
            array (
                'sc_id' => 2267,
                'date_enrolled' => '2022-06-12',
                'student_id' => 856,
                'class_id' => 153,
            ),
            267 => 
            array (
                'sc_id' => 2268,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1495,
                'class_id' => 69,
            ),
            268 => 
            array (
                'sc_id' => 2269,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1243,
                'class_id' => 274,
            ),
            269 => 
            array (
                'sc_id' => 2270,
                'date_enrolled' => '2022-08-17',
                'student_id' => 857,
                'class_id' => 9,
            ),
            270 => 
            array (
                'sc_id' => 2271,
                'date_enrolled' => '2022-07-23',
                'student_id' => 101,
                'class_id' => 10,
            ),
            271 => 
            array (
                'sc_id' => 2272,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1414,
                'class_id' => 74,
            ),
            272 => 
            array (
                'sc_id' => 2273,
                'date_enrolled' => '2022-06-03',
                'student_id' => 490,
                'class_id' => 44,
            ),
            273 => 
            array (
                'sc_id' => 2274,
                'date_enrolled' => '2022-06-29',
                'student_id' => 816,
                'class_id' => 233,
            ),
            274 => 
            array (
                'sc_id' => 2275,
                'date_enrolled' => '2022-08-09',
                'student_id' => 723,
                'class_id' => 238,
            ),
            275 => 
            array (
                'sc_id' => 2276,
                'date_enrolled' => '2022-08-02',
                'student_id' => 590,
                'class_id' => 469,
            ),
            276 => 
            array (
                'sc_id' => 2277,
                'date_enrolled' => '2022-08-14',
                'student_id' => 385,
                'class_id' => 388,
            ),
            277 => 
            array (
                'sc_id' => 2278,
                'date_enrolled' => '2022-07-30',
                'student_id' => 264,
                'class_id' => 22,
            ),
            278 => 
            array (
                'sc_id' => 2279,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1347,
                'class_id' => 123,
            ),
            279 => 
            array (
                'sc_id' => 2280,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1141,
                'class_id' => 418,
            ),
            280 => 
            array (
                'sc_id' => 2281,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1582,
                'class_id' => 334,
            ),
            281 => 
            array (
                'sc_id' => 2282,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1116,
                'class_id' => 151,
            ),
            282 => 
            array (
                'sc_id' => 2283,
                'date_enrolled' => '2022-07-19',
                'student_id' => 467,
                'class_id' => 342,
            ),
            283 => 
            array (
                'sc_id' => 2284,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1167,
                'class_id' => 397,
            ),
            284 => 
            array (
                'sc_id' => 2285,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1590,
                'class_id' => 396,
            ),
            285 => 
            array (
                'sc_id' => 2286,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1209,
                'class_id' => 348,
            ),
            286 => 
            array (
                'sc_id' => 2287,
                'date_enrolled' => '2022-08-22',
                'student_id' => 294,
                'class_id' => 359,
            ),
            287 => 
            array (
                'sc_id' => 2288,
                'date_enrolled' => '2022-06-13',
                'student_id' => 677,
                'class_id' => 368,
            ),
            288 => 
            array (
                'sc_id' => 2289,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1318,
                'class_id' => 473,
            ),
            289 => 
            array (
                'sc_id' => 2290,
                'date_enrolled' => '2022-07-05',
                'student_id' => 719,
                'class_id' => 100,
            ),
            290 => 
            array (
                'sc_id' => 2291,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1839,
                'class_id' => 487,
            ),
            291 => 
            array (
                'sc_id' => 2292,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1928,
                'class_id' => 297,
            ),
            292 => 
            array (
                'sc_id' => 2293,
                'date_enrolled' => '2022-06-06',
                'student_id' => 168,
                'class_id' => 452,
            ),
            293 => 
            array (
                'sc_id' => 2294,
                'date_enrolled' => '2022-06-30',
                'student_id' => 315,
                'class_id' => 102,
            ),
            294 => 
            array (
                'sc_id' => 2295,
                'date_enrolled' => '2022-08-07',
                'student_id' => 161,
                'class_id' => 476,
            ),
            295 => 
            array (
                'sc_id' => 2296,
                'date_enrolled' => '2022-07-22',
                'student_id' => 200,
                'class_id' => 472,
            ),
            296 => 
            array (
                'sc_id' => 2297,
                'date_enrolled' => '2022-07-06',
                'student_id' => 280,
                'class_id' => 455,
            ),
            297 => 
            array (
                'sc_id' => 2298,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1424,
                'class_id' => 401,
            ),
            298 => 
            array (
                'sc_id' => 2299,
                'date_enrolled' => '2022-07-06',
                'student_id' => 591,
                'class_id' => 259,
            ),
            299 => 
            array (
                'sc_id' => 2300,
                'date_enrolled' => '2022-07-29',
                'student_id' => 452,
                'class_id' => 250,
            ),
            300 => 
            array (
                'sc_id' => 2301,
                'date_enrolled' => '2022-07-12',
                'student_id' => 668,
                'class_id' => 99,
            ),
            301 => 
            array (
                'sc_id' => 2302,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1401,
                'class_id' => 469,
            ),
            302 => 
            array (
                'sc_id' => 2303,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1822,
                'class_id' => 349,
            ),
            303 => 
            array (
                'sc_id' => 2304,
                'date_enrolled' => '2022-07-24',
                'student_id' => 486,
                'class_id' => 254,
            ),
            304 => 
            array (
                'sc_id' => 2305,
                'date_enrolled' => '2022-07-24',
                'student_id' => 370,
                'class_id' => 240,
            ),
            305 => 
            array (
                'sc_id' => 2306,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1182,
                'class_id' => 17,
            ),
            306 => 
            array (
                'sc_id' => 2307,
                'date_enrolled' => '2022-06-15',
                'student_id' => 243,
                'class_id' => 425,
            ),
            307 => 
            array (
                'sc_id' => 2308,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1955,
                'class_id' => 407,
            ),
            308 => 
            array (
                'sc_id' => 2309,
                'date_enrolled' => '2022-06-19',
                'student_id' => 433,
                'class_id' => 152,
            ),
            309 => 
            array (
                'sc_id' => 2310,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1196,
                'class_id' => 178,
            ),
            310 => 
            array (
                'sc_id' => 2311,
                'date_enrolled' => '2022-08-24',
                'student_id' => 825,
                'class_id' => 411,
            ),
            311 => 
            array (
                'sc_id' => 2312,
                'date_enrolled' => '2022-07-15',
                'student_id' => 456,
                'class_id' => 72,
            ),
            312 => 
            array (
                'sc_id' => 2313,
                'date_enrolled' => '2022-07-06',
                'student_id' => 123,
                'class_id' => 394,
            ),
            313 => 
            array (
                'sc_id' => 2314,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1932,
                'class_id' => 27,
            ),
            314 => 
            array (
                'sc_id' => 2315,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1314,
                'class_id' => 242,
            ),
            315 => 
            array (
                'sc_id' => 2316,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1591,
                'class_id' => 17,
            ),
            316 => 
            array (
                'sc_id' => 2317,
                'date_enrolled' => '2022-06-22',
                'student_id' => 355,
                'class_id' => 150,
            ),
            317 => 
            array (
                'sc_id' => 2318,
                'date_enrolled' => '2022-07-20',
                'student_id' => 314,
                'class_id' => 53,
            ),
            318 => 
            array (
                'sc_id' => 2319,
                'date_enrolled' => '2022-08-02',
                'student_id' => 4,
                'class_id' => 370,
            ),
            319 => 
            array (
                'sc_id' => 2320,
                'date_enrolled' => '2022-07-29',
                'student_id' => 722,
                'class_id' => 235,
            ),
            320 => 
            array (
                'sc_id' => 2321,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1708,
                'class_id' => 73,
            ),
            321 => 
            array (
                'sc_id' => 2322,
                'date_enrolled' => '2022-06-29',
                'student_id' => 244,
                'class_id' => 67,
            ),
            322 => 
            array (
                'sc_id' => 2323,
                'date_enrolled' => '2022-07-03',
                'student_id' => 131,
                'class_id' => 464,
            ),
            323 => 
            array (
                'sc_id' => 2324,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1380,
                'class_id' => 280,
            ),
            324 => 
            array (
                'sc_id' => 2325,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1669,
                'class_id' => 21,
            ),
            325 => 
            array (
                'sc_id' => 2326,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1904,
                'class_id' => 368,
            ),
            326 => 
            array (
                'sc_id' => 2327,
                'date_enrolled' => '2022-08-16',
                'student_id' => 277,
                'class_id' => 404,
            ),
            327 => 
            array (
                'sc_id' => 2328,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1887,
                'class_id' => 321,
            ),
            328 => 
            array (
                'sc_id' => 2329,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1547,
                'class_id' => 12,
            ),
            329 => 
            array (
                'sc_id' => 2330,
                'date_enrolled' => '2022-08-08',
                'student_id' => 284,
                'class_id' => 462,
            ),
            330 => 
            array (
                'sc_id' => 2331,
                'date_enrolled' => '2022-08-12',
                'student_id' => 461,
                'class_id' => 231,
            ),
            331 => 
            array (
                'sc_id' => 2332,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1329,
                'class_id' => 364,
            ),
            332 => 
            array (
                'sc_id' => 2333,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1777,
                'class_id' => 309,
            ),
            333 => 
            array (
                'sc_id' => 2334,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1871,
                'class_id' => 259,
            ),
            334 => 
            array (
                'sc_id' => 2335,
                'date_enrolled' => '2022-06-16',
                'student_id' => 944,
                'class_id' => 10,
            ),
            335 => 
            array (
                'sc_id' => 2336,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1603,
                'class_id' => 339,
            ),
            336 => 
            array (
                'sc_id' => 2337,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1277,
                'class_id' => 124,
            ),
            337 => 
            array (
                'sc_id' => 2338,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1811,
                'class_id' => 200,
            ),
            338 => 
            array (
                'sc_id' => 2339,
                'date_enrolled' => '2022-08-28',
                'student_id' => 591,
                'class_id' => 148,
            ),
            339 => 
            array (
                'sc_id' => 2340,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1823,
                'class_id' => 411,
            ),
            340 => 
            array (
                'sc_id' => 2341,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1729,
                'class_id' => 432,
            ),
            341 => 
            array (
                'sc_id' => 2342,
                'date_enrolled' => '2022-08-19',
                'student_id' => 18,
                'class_id' => 240,
            ),
            342 => 
            array (
                'sc_id' => 2343,
                'date_enrolled' => '2022-07-11',
                'student_id' => 966,
                'class_id' => 465,
            ),
            343 => 
            array (
                'sc_id' => 2344,
                'date_enrolled' => '2022-08-07',
                'student_id' => 546,
                'class_id' => 410,
            ),
            344 => 
            array (
                'sc_id' => 2345,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1609,
                'class_id' => 110,
            ),
            345 => 
            array (
                'sc_id' => 2346,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1594,
                'class_id' => 424,
            ),
            346 => 
            array (
                'sc_id' => 2347,
                'date_enrolled' => '2022-08-31',
                'student_id' => 311,
                'class_id' => 300,
            ),
            347 => 
            array (
                'sc_id' => 2348,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1449,
                'class_id' => 3,
            ),
            348 => 
            array (
                'sc_id' => 2349,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1049,
                'class_id' => 19,
            ),
            349 => 
            array (
                'sc_id' => 2350,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1221,
                'class_id' => 465,
            ),
            350 => 
            array (
                'sc_id' => 2351,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1783,
                'class_id' => 124,
            ),
            351 => 
            array (
                'sc_id' => 2352,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1082,
                'class_id' => 268,
            ),
            352 => 
            array (
                'sc_id' => 2353,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1948,
                'class_id' => 16,
            ),
            353 => 
            array (
                'sc_id' => 2354,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1556,
                'class_id' => 176,
            ),
            354 => 
            array (
                'sc_id' => 2355,
                'date_enrolled' => '2022-07-13',
                'student_id' => 920,
                'class_id' => 75,
            ),
            355 => 
            array (
                'sc_id' => 2356,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1147,
                'class_id' => 127,
            ),
            356 => 
            array (
                'sc_id' => 2357,
                'date_enrolled' => '2022-07-12',
                'student_id' => 931,
                'class_id' => 123,
            ),
            357 => 
            array (
                'sc_id' => 2358,
                'date_enrolled' => '2022-08-08',
                'student_id' => 468,
                'class_id' => 410,
            ),
            358 => 
            array (
                'sc_id' => 2359,
                'date_enrolled' => '2022-06-04',
                'student_id' => 359,
                'class_id' => 106,
            ),
            359 => 
            array (
                'sc_id' => 2360,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1584,
                'class_id' => 245,
            ),
            360 => 
            array (
                'sc_id' => 2361,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1802,
                'class_id' => 349,
            ),
            361 => 
            array (
                'sc_id' => 2362,
                'date_enrolled' => '2022-08-01',
                'student_id' => 176,
                'class_id' => 340,
            ),
            362 => 
            array (
                'sc_id' => 2363,
                'date_enrolled' => '2022-06-03',
                'student_id' => 374,
                'class_id' => 217,
            ),
            363 => 
            array (
                'sc_id' => 2364,
                'date_enrolled' => '2022-07-02',
                'student_id' => 108,
                'class_id' => 64,
            ),
            364 => 
            array (
                'sc_id' => 2365,
                'date_enrolled' => '2022-06-19',
                'student_id' => 361,
                'class_id' => 105,
            ),
            365 => 
            array (
                'sc_id' => 2366,
                'date_enrolled' => '2022-07-03',
                'student_id' => 759,
                'class_id' => 70,
            ),
            366 => 
            array (
                'sc_id' => 2367,
                'date_enrolled' => '2022-07-15',
                'student_id' => 343,
                'class_id' => 183,
            ),
            367 => 
            array (
                'sc_id' => 2368,
                'date_enrolled' => '2022-08-23',
                'student_id' => 409,
                'class_id' => 413,
            ),
            368 => 
            array (
                'sc_id' => 2369,
                'date_enrolled' => '2022-08-12',
                'student_id' => 388,
                'class_id' => 244,
            ),
            369 => 
            array (
                'sc_id' => 2370,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1585,
                'class_id' => 240,
            ),
            370 => 
            array (
                'sc_id' => 2371,
                'date_enrolled' => '2022-06-22',
                'student_id' => 667,
                'class_id' => 386,
            ),
            371 => 
            array (
                'sc_id' => 2372,
                'date_enrolled' => '2022-06-02',
                'student_id' => 715,
                'class_id' => 223,
            ),
            372 => 
            array (
                'sc_id' => 2373,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1662,
                'class_id' => 450,
            ),
            373 => 
            array (
                'sc_id' => 2374,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1272,
                'class_id' => 418,
            ),
            374 => 
            array (
                'sc_id' => 2375,
                'date_enrolled' => '2022-06-21',
                'student_id' => 174,
                'class_id' => 317,
            ),
            375 => 
            array (
                'sc_id' => 2376,
                'date_enrolled' => '2022-07-27',
                'student_id' => 876,
                'class_id' => 117,
            ),
            376 => 
            array (
                'sc_id' => 2377,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1483,
                'class_id' => 128,
            ),
            377 => 
            array (
                'sc_id' => 2378,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1739,
                'class_id' => 180,
            ),
            378 => 
            array (
                'sc_id' => 2379,
                'date_enrolled' => '2022-07-10',
                'student_id' => 461,
                'class_id' => 424,
            ),
            379 => 
            array (
                'sc_id' => 2380,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1093,
                'class_id' => 66,
            ),
            380 => 
            array (
                'sc_id' => 2381,
                'date_enrolled' => '2022-06-08',
                'student_id' => 175,
                'class_id' => 439,
            ),
            381 => 
            array (
                'sc_id' => 2382,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1220,
                'class_id' => 391,
            ),
            382 => 
            array (
                'sc_id' => 2383,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1107,
                'class_id' => 17,
            ),
            383 => 
            array (
                'sc_id' => 2384,
                'date_enrolled' => '2022-07-12',
                'student_id' => 719,
                'class_id' => 151,
            ),
            384 => 
            array (
                'sc_id' => 2385,
                'date_enrolled' => '2022-06-08',
                'student_id' => 533,
                'class_id' => 392,
            ),
            385 => 
            array (
                'sc_id' => 2386,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1975,
                'class_id' => 27,
            ),
            386 => 
            array (
                'sc_id' => 2387,
                'date_enrolled' => '2022-07-21',
                'student_id' => 734,
                'class_id' => 235,
            ),
            387 => 
            array (
                'sc_id' => 2388,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1114,
                'class_id' => 116,
            ),
            388 => 
            array (
                'sc_id' => 2389,
                'date_enrolled' => '2022-08-12',
                'student_id' => 62,
                'class_id' => 83,
            ),
            389 => 
            array (
                'sc_id' => 2390,
                'date_enrolled' => '2022-07-23',
                'student_id' => 940,
                'class_id' => 471,
            ),
            390 => 
            array (
                'sc_id' => 2391,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1378,
                'class_id' => 62,
            ),
            391 => 
            array (
                'sc_id' => 2392,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1439,
                'class_id' => 384,
            ),
            392 => 
            array (
                'sc_id' => 2393,
                'date_enrolled' => '2022-06-01',
                'student_id' => 186,
                'class_id' => 243,
            ),
            393 => 
            array (
                'sc_id' => 2394,
                'date_enrolled' => '2022-06-22',
                'student_id' => 893,
                'class_id' => 470,
            ),
            394 => 
            array (
                'sc_id' => 2395,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1961,
                'class_id' => 287,
            ),
            395 => 
            array (
                'sc_id' => 2396,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1766,
                'class_id' => 343,
            ),
            396 => 
            array (
                'sc_id' => 2397,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1678,
                'class_id' => 246,
            ),
            397 => 
            array (
                'sc_id' => 2398,
                'date_enrolled' => '2022-06-06',
                'student_id' => 579,
                'class_id' => 186,
            ),
            398 => 
            array (
                'sc_id' => 2399,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1623,
                'class_id' => 408,
            ),
            399 => 
            array (
                'sc_id' => 2400,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1222,
                'class_id' => 159,
            ),
            400 => 
            array (
                'sc_id' => 2401,
                'date_enrolled' => '2022-06-28',
                'student_id' => 902,
                'class_id' => 11,
            ),
            401 => 
            array (
                'sc_id' => 2402,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1785,
                'class_id' => 145,
            ),
            402 => 
            array (
                'sc_id' => 2403,
                'date_enrolled' => '2022-08-18',
                'student_id' => 85,
                'class_id' => 458,
            ),
            403 => 
            array (
                'sc_id' => 2404,
                'date_enrolled' => '2022-07-31',
                'student_id' => 549,
                'class_id' => 305,
            ),
            404 => 
            array (
                'sc_id' => 2405,
                'date_enrolled' => '2022-07-19',
                'student_id' => 423,
                'class_id' => 306,
            ),
            405 => 
            array (
                'sc_id' => 2406,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1797,
                'class_id' => 105,
            ),
            406 => 
            array (
                'sc_id' => 2407,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1100,
                'class_id' => 89,
            ),
            407 => 
            array (
                'sc_id' => 2408,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1691,
                'class_id' => 315,
            ),
            408 => 
            array (
                'sc_id' => 2409,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1910,
                'class_id' => 423,
            ),
            409 => 
            array (
                'sc_id' => 2410,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1003,
                'class_id' => 18,
            ),
            410 => 
            array (
                'sc_id' => 2411,
                'date_enrolled' => '2022-08-01',
                'student_id' => 937,
                'class_id' => 62,
            ),
            411 => 
            array (
                'sc_id' => 2412,
                'date_enrolled' => '2022-06-11',
                'student_id' => 525,
                'class_id' => 29,
            ),
            412 => 
            array (
                'sc_id' => 2413,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1401,
                'class_id' => 270,
            ),
            413 => 
            array (
                'sc_id' => 2414,
                'date_enrolled' => '2022-06-15',
                'student_id' => 263,
                'class_id' => 368,
            ),
            414 => 
            array (
                'sc_id' => 2415,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1462,
                'class_id' => 354,
            ),
            415 => 
            array (
                'sc_id' => 2416,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1998,
                'class_id' => 213,
            ),
            416 => 
            array (
                'sc_id' => 2417,
                'date_enrolled' => '2022-08-25',
                'student_id' => 565,
                'class_id' => 336,
            ),
            417 => 
            array (
                'sc_id' => 2418,
                'date_enrolled' => '2022-07-18',
                'student_id' => 380,
                'class_id' => 85,
            ),
            418 => 
            array (
                'sc_id' => 2419,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1030,
                'class_id' => 197,
            ),
            419 => 
            array (
                'sc_id' => 2420,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1196,
                'class_id' => 435,
            ),
            420 => 
            array (
                'sc_id' => 2421,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1934,
                'class_id' => 95,
            ),
            421 => 
            array (
                'sc_id' => 2422,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1805,
                'class_id' => 75,
            ),
            422 => 
            array (
                'sc_id' => 2423,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1480,
                'class_id' => 237,
            ),
            423 => 
            array (
                'sc_id' => 2424,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1678,
                'class_id' => 262,
            ),
            424 => 
            array (
                'sc_id' => 2425,
                'date_enrolled' => '2022-07-13',
                'student_id' => 364,
                'class_id' => 82,
            ),
            425 => 
            array (
                'sc_id' => 2426,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1869,
                'class_id' => 209,
            ),
            426 => 
            array (
                'sc_id' => 2427,
                'date_enrolled' => '2022-08-22',
                'student_id' => 107,
                'class_id' => 480,
            ),
            427 => 
            array (
                'sc_id' => 2428,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1124,
                'class_id' => 471,
            ),
            428 => 
            array (
                'sc_id' => 2429,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1245,
                'class_id' => 402,
            ),
            429 => 
            array (
                'sc_id' => 2430,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1750,
                'class_id' => 446,
            ),
            430 => 
            array (
                'sc_id' => 2431,
                'date_enrolled' => '2022-08-04',
                'student_id' => 778,
                'class_id' => 214,
            ),
            431 => 
            array (
                'sc_id' => 2432,
                'date_enrolled' => '2022-06-28',
                'student_id' => 127,
                'class_id' => 358,
            ),
            432 => 
            array (
                'sc_id' => 2433,
                'date_enrolled' => '2022-06-30',
                'student_id' => 940,
                'class_id' => 301,
            ),
            433 => 
            array (
                'sc_id' => 2434,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1644,
                'class_id' => 465,
            ),
            434 => 
            array (
                'sc_id' => 2435,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1748,
                'class_id' => 56,
            ),
            435 => 
            array (
                'sc_id' => 2436,
                'date_enrolled' => '2022-08-14',
                'student_id' => 887,
                'class_id' => 180,
            ),
            436 => 
            array (
                'sc_id' => 2437,
                'date_enrolled' => '2022-06-17',
                'student_id' => 875,
                'class_id' => 244,
            ),
            437 => 
            array (
                'sc_id' => 2438,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1049,
                'class_id' => 151,
            ),
            438 => 
            array (
                'sc_id' => 2439,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1474,
                'class_id' => 211,
            ),
            439 => 
            array (
                'sc_id' => 2440,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1099,
                'class_id' => 497,
            ),
            440 => 
            array (
                'sc_id' => 2441,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1770,
                'class_id' => 96,
            ),
            441 => 
            array (
                'sc_id' => 2442,
                'date_enrolled' => '2022-08-07',
                'student_id' => 99,
                'class_id' => 371,
            ),
            442 => 
            array (
                'sc_id' => 2443,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1883,
                'class_id' => 51,
            ),
            443 => 
            array (
                'sc_id' => 2444,
                'date_enrolled' => '2022-07-27',
                'student_id' => 827,
                'class_id' => 480,
            ),
            444 => 
            array (
                'sc_id' => 2445,
                'date_enrolled' => '2022-08-21',
                'student_id' => 209,
                'class_id' => 337,
            ),
            445 => 
            array (
                'sc_id' => 2446,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1701,
                'class_id' => 142,
            ),
            446 => 
            array (
                'sc_id' => 2447,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1459,
                'class_id' => 49,
            ),
            447 => 
            array (
                'sc_id' => 2448,
                'date_enrolled' => '2022-07-27',
                'student_id' => 773,
                'class_id' => 91,
            ),
            448 => 
            array (
                'sc_id' => 2449,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1637,
                'class_id' => 295,
            ),
            449 => 
            array (
                'sc_id' => 2450,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1015,
                'class_id' => 495,
            ),
            450 => 
            array (
                'sc_id' => 2451,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1111,
                'class_id' => 220,
            ),
            451 => 
            array (
                'sc_id' => 2452,
                'date_enrolled' => '2022-07-21',
                'student_id' => 274,
                'class_id' => 490,
            ),
            452 => 
            array (
                'sc_id' => 2453,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1289,
                'class_id' => 436,
            ),
            453 => 
            array (
                'sc_id' => 2454,
                'date_enrolled' => '2022-07-20',
                'student_id' => 558,
                'class_id' => 0,
            ),
            454 => 
            array (
                'sc_id' => 2455,
                'date_enrolled' => '2022-06-02',
                'student_id' => 121,
                'class_id' => 143,
            ),
            455 => 
            array (
                'sc_id' => 2456,
                'date_enrolled' => '2022-07-19',
                'student_id' => 405,
                'class_id' => 385,
            ),
            456 => 
            array (
                'sc_id' => 2457,
                'date_enrolled' => '2022-07-23',
                'student_id' => 308,
                'class_id' => 370,
            ),
            457 => 
            array (
                'sc_id' => 2458,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1730,
                'class_id' => 129,
            ),
            458 => 
            array (
                'sc_id' => 2459,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1835,
                'class_id' => 359,
            ),
            459 => 
            array (
                'sc_id' => 2460,
                'date_enrolled' => '2022-08-27',
                'student_id' => 743,
                'class_id' => 332,
            ),
            460 => 
            array (
                'sc_id' => 2461,
                'date_enrolled' => '2022-07-08',
                'student_id' => 879,
                'class_id' => 78,
            ),
            461 => 
            array (
                'sc_id' => 2462,
                'date_enrolled' => '2022-08-22',
                'student_id' => 705,
                'class_id' => 479,
            ),
            462 => 
            array (
                'sc_id' => 2463,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1941,
                'class_id' => 131,
            ),
            463 => 
            array (
                'sc_id' => 2464,
                'date_enrolled' => '2022-07-28',
                'student_id' => 97,
                'class_id' => 127,
            ),
            464 => 
            array (
                'sc_id' => 2465,
                'date_enrolled' => '2022-07-26',
                'student_id' => 534,
                'class_id' => 153,
            ),
            465 => 
            array (
                'sc_id' => 2466,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1284,
                'class_id' => 345,
            ),
            466 => 
            array (
                'sc_id' => 2467,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1101,
                'class_id' => 106,
            ),
            467 => 
            array (
                'sc_id' => 2468,
                'date_enrolled' => '2022-08-31',
                'student_id' => 500,
                'class_id' => 345,
            ),
            468 => 
            array (
                'sc_id' => 2469,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1139,
                'class_id' => 363,
            ),
            469 => 
            array (
                'sc_id' => 2470,
                'date_enrolled' => '2022-06-02',
                'student_id' => 13,
                'class_id' => 438,
            ),
            470 => 
            array (
                'sc_id' => 2471,
                'date_enrolled' => '2022-07-11',
                'student_id' => 216,
                'class_id' => 496,
            ),
            471 => 
            array (
                'sc_id' => 2472,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1467,
                'class_id' => 367,
            ),
            472 => 
            array (
                'sc_id' => 2473,
                'date_enrolled' => '2022-07-05',
                'student_id' => 390,
                'class_id' => 488,
            ),
            473 => 
            array (
                'sc_id' => 2474,
                'date_enrolled' => '2022-08-16',
                'student_id' => 823,
                'class_id' => 56,
            ),
            474 => 
            array (
                'sc_id' => 2475,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1355,
                'class_id' => 222,
            ),
            475 => 
            array (
                'sc_id' => 2476,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1429,
                'class_id' => 273,
            ),
            476 => 
            array (
                'sc_id' => 2477,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1780,
                'class_id' => 476,
            ),
            477 => 
            array (
                'sc_id' => 2478,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1780,
                'class_id' => 405,
            ),
            478 => 
            array (
                'sc_id' => 2479,
                'date_enrolled' => '2022-08-27',
                'student_id' => 811,
                'class_id' => 344,
            ),
            479 => 
            array (
                'sc_id' => 2480,
                'date_enrolled' => '2022-08-23',
                'student_id' => 24,
                'class_id' => 52,
            ),
            480 => 
            array (
                'sc_id' => 2481,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1478,
                'class_id' => 365,
            ),
            481 => 
            array (
                'sc_id' => 2482,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1324,
                'class_id' => 46,
            ),
            482 => 
            array (
                'sc_id' => 2483,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1288,
                'class_id' => 484,
            ),
            483 => 
            array (
                'sc_id' => 2484,
                'date_enrolled' => '2022-07-22',
                'student_id' => 231,
                'class_id' => 113,
            ),
            484 => 
            array (
                'sc_id' => 2485,
                'date_enrolled' => '2022-06-05',
                'student_id' => 72,
                'class_id' => 210,
            ),
            485 => 
            array (
                'sc_id' => 2486,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1678,
                'class_id' => 336,
            ),
            486 => 
            array (
                'sc_id' => 2487,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1705,
                'class_id' => 175,
            ),
            487 => 
            array (
                'sc_id' => 2488,
                'date_enrolled' => '2022-07-26',
                'student_id' => 116,
                'class_id' => 247,
            ),
            488 => 
            array (
                'sc_id' => 2489,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1177,
                'class_id' => 142,
            ),
            489 => 
            array (
                'sc_id' => 2490,
                'date_enrolled' => '2022-07-21',
                'student_id' => 446,
                'class_id' => 287,
            ),
            490 => 
            array (
                'sc_id' => 2491,
                'date_enrolled' => '2022-08-17',
                'student_id' => 93,
                'class_id' => 129,
            ),
            491 => 
            array (
                'sc_id' => 2492,
                'date_enrolled' => '2022-06-02',
                'student_id' => 924,
                'class_id' => 378,
            ),
            492 => 
            array (
                'sc_id' => 2493,
                'date_enrolled' => '2022-08-03',
                'student_id' => 239,
                'class_id' => 67,
            ),
            493 => 
            array (
                'sc_id' => 2494,
                'date_enrolled' => '2022-08-03',
                'student_id' => 352,
                'class_id' => 289,
            ),
            494 => 
            array (
                'sc_id' => 2495,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1426,
                'class_id' => 450,
            ),
            495 => 
            array (
                'sc_id' => 2496,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1075,
                'class_id' => 352,
            ),
            496 => 
            array (
                'sc_id' => 2497,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1298,
                'class_id' => 321,
            ),
            497 => 
            array (
                'sc_id' => 2498,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1577,
                'class_id' => 59,
            ),
            498 => 
            array (
                'sc_id' => 2499,
                'date_enrolled' => '2022-06-05',
                'student_id' => 600,
                'class_id' => 81,
            ),
            499 => 
            array (
                'sc_id' => 2500,
                'date_enrolled' => '2022-06-17',
                'student_id' => 666,
                'class_id' => 458,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 2501,
                'date_enrolled' => '2022-08-19',
                'student_id' => 933,
                'class_id' => 470,
            ),
            1 => 
            array (
                'sc_id' => 2502,
                'date_enrolled' => '2022-08-17',
                'student_id' => 626,
                'class_id' => 132,
            ),
            2 => 
            array (
                'sc_id' => 2503,
                'date_enrolled' => '2022-07-02',
                'student_id' => 466,
                'class_id' => 113,
            ),
            3 => 
            array (
                'sc_id' => 2504,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1394,
                'class_id' => 193,
            ),
            4 => 
            array (
                'sc_id' => 2505,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1481,
                'class_id' => 141,
            ),
            5 => 
            array (
                'sc_id' => 2506,
                'date_enrolled' => '2022-07-20',
                'student_id' => 62,
                'class_id' => 363,
            ),
            6 => 
            array (
                'sc_id' => 2507,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1394,
                'class_id' => 499,
            ),
            7 => 
            array (
                'sc_id' => 2508,
                'date_enrolled' => '2022-08-27',
                'student_id' => 532,
                'class_id' => 299,
            ),
            8 => 
            array (
                'sc_id' => 2509,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1274,
                'class_id' => 443,
            ),
            9 => 
            array (
                'sc_id' => 2510,
                'date_enrolled' => '2022-07-29',
                'student_id' => 323,
                'class_id' => 328,
            ),
            10 => 
            array (
                'sc_id' => 2511,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1823,
                'class_id' => 479,
            ),
            11 => 
            array (
                'sc_id' => 2512,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1683,
                'class_id' => 436,
            ),
            12 => 
            array (
                'sc_id' => 2513,
                'date_enrolled' => '2022-08-30',
                'student_id' => 765,
                'class_id' => 281,
            ),
            13 => 
            array (
                'sc_id' => 2514,
                'date_enrolled' => '2022-07-19',
                'student_id' => 36,
                'class_id' => 327,
            ),
            14 => 
            array (
                'sc_id' => 2515,
                'date_enrolled' => '2022-06-30',
                'student_id' => 830,
                'class_id' => 385,
            ),
            15 => 
            array (
                'sc_id' => 2516,
                'date_enrolled' => '2022-08-17',
                'student_id' => 998,
                'class_id' => 9,
            ),
            16 => 
            array (
                'sc_id' => 2517,
                'date_enrolled' => '2022-08-22',
                'student_id' => 422,
                'class_id' => 119,
            ),
            17 => 
            array (
                'sc_id' => 2518,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1218,
                'class_id' => 348,
            ),
            18 => 
            array (
                'sc_id' => 2519,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1341,
                'class_id' => 241,
            ),
            19 => 
            array (
                'sc_id' => 2520,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1594,
                'class_id' => 323,
            ),
            20 => 
            array (
                'sc_id' => 2521,
                'date_enrolled' => '2022-06-30',
                'student_id' => 871,
                'class_id' => 307,
            ),
            21 => 
            array (
                'sc_id' => 2522,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1239,
                'class_id' => 110,
            ),
            22 => 
            array (
                'sc_id' => 2523,
                'date_enrolled' => '2022-06-16',
                'student_id' => 31,
                'class_id' => 401,
            ),
            23 => 
            array (
                'sc_id' => 2524,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1410,
                'class_id' => 57,
            ),
            24 => 
            array (
                'sc_id' => 2525,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1732,
                'class_id' => 8,
            ),
            25 => 
            array (
                'sc_id' => 2526,
                'date_enrolled' => '2022-06-16',
                'student_id' => 308,
                'class_id' => 321,
            ),
            26 => 
            array (
                'sc_id' => 2527,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1536,
                'class_id' => 391,
            ),
            27 => 
            array (
                'sc_id' => 2528,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1519,
                'class_id' => 232,
            ),
            28 => 
            array (
                'sc_id' => 2529,
                'date_enrolled' => '2022-08-17',
                'student_id' => 461,
                'class_id' => 494,
            ),
            29 => 
            array (
                'sc_id' => 2530,
                'date_enrolled' => '2022-06-14',
                'student_id' => 164,
                'class_id' => 366,
            ),
            30 => 
            array (
                'sc_id' => 2531,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1142,
                'class_id' => 38,
            ),
            31 => 
            array (
                'sc_id' => 2532,
                'date_enrolled' => '2022-08-12',
                'student_id' => 961,
                'class_id' => 477,
            ),
            32 => 
            array (
                'sc_id' => 2533,
                'date_enrolled' => '2022-06-15',
                'student_id' => 739,
                'class_id' => 492,
            ),
            33 => 
            array (
                'sc_id' => 2534,
                'date_enrolled' => '2022-08-20',
                'student_id' => 298,
                'class_id' => 324,
            ),
            34 => 
            array (
                'sc_id' => 2535,
                'date_enrolled' => '2022-07-19',
                'student_id' => 271,
                'class_id' => 178,
            ),
            35 => 
            array (
                'sc_id' => 2536,
                'date_enrolled' => '2022-06-05',
                'student_id' => 836,
                'class_id' => 54,
            ),
            36 => 
            array (
                'sc_id' => 2537,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1996,
                'class_id' => 372,
            ),
            37 => 
            array (
                'sc_id' => 2538,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1499,
                'class_id' => 239,
            ),
            38 => 
            array (
                'sc_id' => 2539,
                'date_enrolled' => '2022-08-09',
                'student_id' => 54,
                'class_id' => 83,
            ),
            39 => 
            array (
                'sc_id' => 2540,
                'date_enrolled' => '2022-08-26',
                'student_id' => 200,
                'class_id' => 481,
            ),
            40 => 
            array (
                'sc_id' => 2541,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1469,
                'class_id' => 245,
            ),
            41 => 
            array (
                'sc_id' => 2542,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1672,
                'class_id' => 492,
            ),
            42 => 
            array (
                'sc_id' => 2543,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1142,
                'class_id' => 253,
            ),
            43 => 
            array (
                'sc_id' => 2544,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1424,
                'class_id' => 244,
            ),
            44 => 
            array (
                'sc_id' => 2545,
                'date_enrolled' => '2022-07-30',
                'student_id' => 973,
                'class_id' => 316,
            ),
            45 => 
            array (
                'sc_id' => 2546,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1414,
                'class_id' => 343,
            ),
            46 => 
            array (
                'sc_id' => 2547,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1550,
                'class_id' => 47,
            ),
            47 => 
            array (
                'sc_id' => 2548,
                'date_enrolled' => '2022-06-28',
                'student_id' => 844,
                'class_id' => 432,
            ),
            48 => 
            array (
                'sc_id' => 2549,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1503,
                'class_id' => 172,
            ),
            49 => 
            array (
                'sc_id' => 2550,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1745,
                'class_id' => 485,
            ),
            50 => 
            array (
                'sc_id' => 2551,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1418,
                'class_id' => 388,
            ),
            51 => 
            array (
                'sc_id' => 2552,
                'date_enrolled' => '2022-08-13',
                'student_id' => 152,
                'class_id' => 224,
            ),
            52 => 
            array (
                'sc_id' => 2553,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1982,
                'class_id' => 197,
            ),
            53 => 
            array (
                'sc_id' => 2554,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1736,
                'class_id' => 121,
            ),
            54 => 
            array (
                'sc_id' => 2555,
                'date_enrolled' => '2022-08-09',
                'student_id' => 794,
                'class_id' => 172,
            ),
            55 => 
            array (
                'sc_id' => 2556,
                'date_enrolled' => '2022-06-23',
                'student_id' => 324,
                'class_id' => 284,
            ),
            56 => 
            array (
                'sc_id' => 2557,
                'date_enrolled' => '2022-06-23',
                'student_id' => 926,
                'class_id' => 328,
            ),
            57 => 
            array (
                'sc_id' => 2558,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1282,
                'class_id' => 118,
            ),
            58 => 
            array (
                'sc_id' => 2559,
                'date_enrolled' => '2022-08-29',
                'student_id' => 129,
                'class_id' => 186,
            ),
            59 => 
            array (
                'sc_id' => 2560,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1281,
                'class_id' => 20,
            ),
            60 => 
            array (
                'sc_id' => 2561,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1522,
                'class_id' => 79,
            ),
            61 => 
            array (
                'sc_id' => 2562,
                'date_enrolled' => '2022-08-27',
                'student_id' => 376,
                'class_id' => 357,
            ),
            62 => 
            array (
                'sc_id' => 2563,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1777,
                'class_id' => 407,
            ),
            63 => 
            array (
                'sc_id' => 2564,
                'date_enrolled' => '2022-06-16',
                'student_id' => 520,
                'class_id' => 310,
            ),
            64 => 
            array (
                'sc_id' => 2565,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1639,
                'class_id' => 25,
            ),
            65 => 
            array (
                'sc_id' => 2566,
                'date_enrolled' => '2022-06-07',
                'student_id' => 622,
                'class_id' => 145,
            ),
            66 => 
            array (
                'sc_id' => 2567,
                'date_enrolled' => '2022-08-27',
                'student_id' => 565,
                'class_id' => 292,
            ),
            67 => 
            array (
                'sc_id' => 2568,
                'date_enrolled' => '2022-07-26',
                'student_id' => 661,
                'class_id' => 302,
            ),
            68 => 
            array (
                'sc_id' => 2569,
                'date_enrolled' => '2022-06-27',
                'student_id' => 403,
                'class_id' => 251,
            ),
            69 => 
            array (
                'sc_id' => 2570,
                'date_enrolled' => '2022-07-15',
                'student_id' => 986,
                'class_id' => 71,
            ),
            70 => 
            array (
                'sc_id' => 2571,
                'date_enrolled' => '2022-07-06',
                'student_id' => 456,
                'class_id' => 56,
            ),
            71 => 
            array (
                'sc_id' => 2572,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1454,
                'class_id' => 14,
            ),
            72 => 
            array (
                'sc_id' => 2573,
                'date_enrolled' => '2022-07-10',
                'student_id' => 221,
                'class_id' => 8,
            ),
            73 => 
            array (
                'sc_id' => 2574,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1963,
                'class_id' => 64,
            ),
            74 => 
            array (
                'sc_id' => 2575,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1401,
                'class_id' => 77,
            ),
            75 => 
            array (
                'sc_id' => 2576,
                'date_enrolled' => '2022-06-08',
                'student_id' => 811,
                'class_id' => 77,
            ),
            76 => 
            array (
                'sc_id' => 2577,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1632,
                'class_id' => 385,
            ),
            77 => 
            array (
                'sc_id' => 2578,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1548,
                'class_id' => 139,
            ),
            78 => 
            array (
                'sc_id' => 2579,
                'date_enrolled' => '2022-07-10',
                'student_id' => 45,
                'class_id' => 271,
            ),
            79 => 
            array (
                'sc_id' => 2580,
                'date_enrolled' => '2022-07-02',
                'student_id' => 641,
                'class_id' => 253,
            ),
            80 => 
            array (
                'sc_id' => 2581,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1453,
                'class_id' => 186,
            ),
            81 => 
            array (
                'sc_id' => 2582,
                'date_enrolled' => '2022-08-15',
                'student_id' => 642,
                'class_id' => 141,
            ),
            82 => 
            array (
                'sc_id' => 2583,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1008,
                'class_id' => 254,
            ),
            83 => 
            array (
                'sc_id' => 2584,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1813,
                'class_id' => 27,
            ),
            84 => 
            array (
                'sc_id' => 2585,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1222,
                'class_id' => 149,
            ),
            85 => 
            array (
                'sc_id' => 2586,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1193,
                'class_id' => 422,
            ),
            86 => 
            array (
                'sc_id' => 2587,
                'date_enrolled' => '2022-08-18',
                'student_id' => 9,
                'class_id' => 436,
            ),
            87 => 
            array (
                'sc_id' => 2588,
                'date_enrolled' => '2022-07-30',
                'student_id' => 989,
                'class_id' => 108,
            ),
            88 => 
            array (
                'sc_id' => 2589,
                'date_enrolled' => '2022-06-08',
                'student_id' => 312,
                'class_id' => 99,
            ),
            89 => 
            array (
                'sc_id' => 2590,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1523,
                'class_id' => 321,
            ),
            90 => 
            array (
                'sc_id' => 2591,
                'date_enrolled' => '2022-07-02',
                'student_id' => 838,
                'class_id' => 11,
            ),
            91 => 
            array (
                'sc_id' => 2592,
                'date_enrolled' => '2022-06-02',
                'student_id' => 282,
                'class_id' => 225,
            ),
            92 => 
            array (
                'sc_id' => 2593,
                'date_enrolled' => '2022-07-17',
                'student_id' => 682,
                'class_id' => 203,
            ),
            93 => 
            array (
                'sc_id' => 2594,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1709,
                'class_id' => 219,
            ),
            94 => 
            array (
                'sc_id' => 2595,
                'date_enrolled' => '2022-07-03',
                'student_id' => 216,
                'class_id' => 367,
            ),
            95 => 
            array (
                'sc_id' => 2596,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1976,
                'class_id' => 437,
            ),
            96 => 
            array (
                'sc_id' => 2597,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1455,
                'class_id' => 240,
            ),
            97 => 
            array (
                'sc_id' => 2598,
                'date_enrolled' => '2022-08-16',
                'student_id' => 431,
                'class_id' => 364,
            ),
            98 => 
            array (
                'sc_id' => 2599,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1965,
                'class_id' => 273,
            ),
            99 => 
            array (
                'sc_id' => 2600,
                'date_enrolled' => '2022-06-06',
                'student_id' => 71,
                'class_id' => 181,
            ),
            100 => 
            array (
                'sc_id' => 2601,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1567,
                'class_id' => 76,
            ),
            101 => 
            array (
                'sc_id' => 2602,
                'date_enrolled' => '2022-06-23',
                'student_id' => 782,
                'class_id' => 265,
            ),
            102 => 
            array (
                'sc_id' => 2603,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1513,
                'class_id' => 152,
            ),
            103 => 
            array (
                'sc_id' => 2604,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1283,
                'class_id' => 98,
            ),
            104 => 
            array (
                'sc_id' => 2605,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1755,
                'class_id' => 343,
            ),
            105 => 
            array (
                'sc_id' => 2606,
                'date_enrolled' => '2022-07-29',
                'student_id' => 336,
                'class_id' => 380,
            ),
            106 => 
            array (
                'sc_id' => 2607,
                'date_enrolled' => '2022-07-17',
                'student_id' => 565,
                'class_id' => 38,
            ),
            107 => 
            array (
                'sc_id' => 2608,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1120,
                'class_id' => 426,
            ),
            108 => 
            array (
                'sc_id' => 2609,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1058,
                'class_id' => 68,
            ),
            109 => 
            array (
                'sc_id' => 2610,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1432,
                'class_id' => 17,
            ),
            110 => 
            array (
                'sc_id' => 2611,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1197,
                'class_id' => 336,
            ),
            111 => 
            array (
                'sc_id' => 2612,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1497,
                'class_id' => 307,
            ),
            112 => 
            array (
                'sc_id' => 2613,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1366,
                'class_id' => 34,
            ),
            113 => 
            array (
                'sc_id' => 2614,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1227,
                'class_id' => 347,
            ),
            114 => 
            array (
                'sc_id' => 2615,
                'date_enrolled' => '2022-06-15',
                'student_id' => 806,
                'class_id' => 30,
            ),
            115 => 
            array (
                'sc_id' => 2616,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1518,
                'class_id' => 168,
            ),
            116 => 
            array (
                'sc_id' => 2617,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1201,
                'class_id' => 68,
            ),
            117 => 
            array (
                'sc_id' => 2618,
                'date_enrolled' => '2022-08-25',
                'student_id' => 233,
                'class_id' => 18,
            ),
            118 => 
            array (
                'sc_id' => 2619,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1098,
                'class_id' => 342,
            ),
            119 => 
            array (
                'sc_id' => 2620,
                'date_enrolled' => '2022-07-07',
                'student_id' => 739,
                'class_id' => 389,
            ),
            120 => 
            array (
                'sc_id' => 2621,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1340,
                'class_id' => 148,
            ),
            121 => 
            array (
                'sc_id' => 2622,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1628,
                'class_id' => 325,
            ),
            122 => 
            array (
                'sc_id' => 2623,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1493,
                'class_id' => 445,
            ),
            123 => 
            array (
                'sc_id' => 2624,
                'date_enrolled' => '2022-08-25',
                'student_id' => 148,
                'class_id' => 492,
            ),
            124 => 
            array (
                'sc_id' => 2625,
                'date_enrolled' => '2022-06-23',
                'student_id' => 60,
                'class_id' => 215,
            ),
            125 => 
            array (
                'sc_id' => 2626,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1830,
                'class_id' => 331,
            ),
            126 => 
            array (
                'sc_id' => 2627,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1643,
                'class_id' => 167,
            ),
            127 => 
            array (
                'sc_id' => 2628,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1423,
                'class_id' => 449,
            ),
            128 => 
            array (
                'sc_id' => 2629,
                'date_enrolled' => '2022-07-04',
                'student_id' => 569,
                'class_id' => 300,
            ),
            129 => 
            array (
                'sc_id' => 2630,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1790,
                'class_id' => 158,
            ),
            130 => 
            array (
                'sc_id' => 2631,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1471,
                'class_id' => 170,
            ),
            131 => 
            array (
                'sc_id' => 2632,
                'date_enrolled' => '2022-06-21',
                'student_id' => 858,
                'class_id' => 100,
            ),
            132 => 
            array (
                'sc_id' => 2633,
                'date_enrolled' => '2022-07-27',
                'student_id' => 846,
                'class_id' => 402,
            ),
            133 => 
            array (
                'sc_id' => 2634,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1179,
                'class_id' => 251,
            ),
            134 => 
            array (
                'sc_id' => 2635,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1351,
                'class_id' => 329,
            ),
            135 => 
            array (
                'sc_id' => 2636,
                'date_enrolled' => '2022-08-12',
                'student_id' => 718,
                'class_id' => 488,
            ),
            136 => 
            array (
                'sc_id' => 2637,
                'date_enrolled' => '2022-06-18',
                'student_id' => 220,
                'class_id' => 13,
            ),
            137 => 
            array (
                'sc_id' => 2638,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1001,
                'class_id' => 478,
            ),
            138 => 
            array (
                'sc_id' => 2639,
                'date_enrolled' => '2022-08-06',
                'student_id' => 237,
                'class_id' => 163,
            ),
            139 => 
            array (
                'sc_id' => 2640,
                'date_enrolled' => '2022-07-09',
                'student_id' => 143,
                'class_id' => 66,
            ),
            140 => 
            array (
                'sc_id' => 2641,
                'date_enrolled' => '2022-07-25',
                'student_id' => 262,
                'class_id' => 390,
            ),
            141 => 
            array (
                'sc_id' => 2642,
                'date_enrolled' => '2022-06-04',
                'student_id' => 349,
                'class_id' => 138,
            ),
            142 => 
            array (
                'sc_id' => 2643,
                'date_enrolled' => '2022-06-17',
                'student_id' => 2,
                'class_id' => 431,
            ),
            143 => 
            array (
                'sc_id' => 2644,
                'date_enrolled' => '2022-07-21',
                'student_id' => 266,
                'class_id' => 100,
            ),
            144 => 
            array (
                'sc_id' => 2645,
                'date_enrolled' => '2022-07-08',
                'student_id' => 356,
                'class_id' => 274,
            ),
            145 => 
            array (
                'sc_id' => 2646,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1193,
                'class_id' => 242,
            ),
            146 => 
            array (
                'sc_id' => 2647,
                'date_enrolled' => '2022-08-08',
                'student_id' => 3,
                'class_id' => 404,
            ),
            147 => 
            array (
                'sc_id' => 2648,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1946,
                'class_id' => 184,
            ),
            148 => 
            array (
                'sc_id' => 2649,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1657,
                'class_id' => 146,
            ),
            149 => 
            array (
                'sc_id' => 2650,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1799,
                'class_id' => 329,
            ),
            150 => 
            array (
                'sc_id' => 2651,
                'date_enrolled' => '2022-07-17',
                'student_id' => 101,
                'class_id' => 304,
            ),
            151 => 
            array (
                'sc_id' => 2652,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1554,
                'class_id' => 204,
            ),
            152 => 
            array (
                'sc_id' => 2653,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1617,
                'class_id' => 477,
            ),
            153 => 
            array (
                'sc_id' => 2654,
                'date_enrolled' => '2022-08-16',
                'student_id' => 338,
                'class_id' => 47,
            ),
            154 => 
            array (
                'sc_id' => 2655,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1276,
                'class_id' => 215,
            ),
            155 => 
            array (
                'sc_id' => 2656,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1161,
                'class_id' => 409,
            ),
            156 => 
            array (
                'sc_id' => 2657,
                'date_enrolled' => '2022-07-27',
                'student_id' => 209,
                'class_id' => 457,
            ),
            157 => 
            array (
                'sc_id' => 2658,
                'date_enrolled' => '2022-08-24',
                'student_id' => 240,
                'class_id' => 307,
            ),
            158 => 
            array (
                'sc_id' => 2659,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1043,
                'class_id' => 103,
            ),
            159 => 
            array (
                'sc_id' => 2660,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1354,
                'class_id' => 97,
            ),
            160 => 
            array (
                'sc_id' => 2661,
                'date_enrolled' => '2022-07-27',
                'student_id' => 564,
                'class_id' => 207,
            ),
            161 => 
            array (
                'sc_id' => 2662,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1633,
                'class_id' => 257,
            ),
            162 => 
            array (
                'sc_id' => 2663,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1300,
                'class_id' => 288,
            ),
            163 => 
            array (
                'sc_id' => 2664,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1919,
                'class_id' => 262,
            ),
            164 => 
            array (
                'sc_id' => 2665,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1942,
                'class_id' => 357,
            ),
            165 => 
            array (
                'sc_id' => 2666,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1719,
                'class_id' => 71,
            ),
            166 => 
            array (
                'sc_id' => 2667,
                'date_enrolled' => '2022-08-09',
                'student_id' => 832,
                'class_id' => 144,
            ),
            167 => 
            array (
                'sc_id' => 2668,
                'date_enrolled' => '2022-06-02',
                'student_id' => 873,
                'class_id' => 430,
            ),
            168 => 
            array (
                'sc_id' => 2669,
                'date_enrolled' => '2022-07-23',
                'student_id' => 105,
                'class_id' => 80,
            ),
            169 => 
            array (
                'sc_id' => 2670,
                'date_enrolled' => '2022-08-20',
                'student_id' => 643,
                'class_id' => 37,
            ),
            170 => 
            array (
                'sc_id' => 2671,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1903,
                'class_id' => 16,
            ),
            171 => 
            array (
                'sc_id' => 2672,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1201,
                'class_id' => 311,
            ),
            172 => 
            array (
                'sc_id' => 2673,
                'date_enrolled' => '2022-06-14',
                'student_id' => 374,
                'class_id' => 24,
            ),
            173 => 
            array (
                'sc_id' => 2674,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1661,
                'class_id' => 366,
            ),
            174 => 
            array (
                'sc_id' => 2675,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1624,
                'class_id' => 203,
            ),
            175 => 
            array (
                'sc_id' => 2676,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1256,
                'class_id' => 105,
            ),
            176 => 
            array (
                'sc_id' => 2677,
                'date_enrolled' => '2022-06-10',
                'student_id' => 228,
                'class_id' => 348,
            ),
            177 => 
            array (
                'sc_id' => 2678,
                'date_enrolled' => '2022-06-26',
                'student_id' => 306,
                'class_id' => 146,
            ),
            178 => 
            array (
                'sc_id' => 2679,
                'date_enrolled' => '2022-08-19',
                'student_id' => 368,
                'class_id' => 25,
            ),
            179 => 
            array (
                'sc_id' => 2680,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1481,
                'class_id' => 80,
            ),
            180 => 
            array (
                'sc_id' => 2681,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1985,
                'class_id' => 57,
            ),
            181 => 
            array (
                'sc_id' => 2682,
                'date_enrolled' => '2022-07-09',
                'student_id' => 187,
                'class_id' => 125,
            ),
            182 => 
            array (
                'sc_id' => 2683,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1623,
                'class_id' => 70,
            ),
            183 => 
            array (
                'sc_id' => 2684,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1467,
                'class_id' => 242,
            ),
            184 => 
            array (
                'sc_id' => 2685,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1096,
                'class_id' => 456,
            ),
            185 => 
            array (
                'sc_id' => 2686,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1320,
                'class_id' => 444,
            ),
            186 => 
            array (
                'sc_id' => 2687,
                'date_enrolled' => '2022-08-20',
                'student_id' => 714,
                'class_id' => 197,
            ),
            187 => 
            array (
                'sc_id' => 2688,
                'date_enrolled' => '2022-07-04',
                'student_id' => 195,
                'class_id' => 492,
            ),
            188 => 
            array (
                'sc_id' => 2689,
                'date_enrolled' => '2022-06-09',
                'student_id' => 450,
                'class_id' => 207,
            ),
            189 => 
            array (
                'sc_id' => 2690,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1525,
                'class_id' => 55,
            ),
            190 => 
            array (
                'sc_id' => 2691,
                'date_enrolled' => '2022-06-11',
                'student_id' => 22,
                'class_id' => 339,
            ),
            191 => 
            array (
                'sc_id' => 2692,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1378,
                'class_id' => 475,
            ),
            192 => 
            array (
                'sc_id' => 2693,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1635,
                'class_id' => 40,
            ),
            193 => 
            array (
                'sc_id' => 2694,
                'date_enrolled' => '2022-08-03',
                'student_id' => 173,
                'class_id' => 233,
            ),
            194 => 
            array (
                'sc_id' => 2695,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1888,
                'class_id' => 62,
            ),
            195 => 
            array (
                'sc_id' => 2696,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1260,
                'class_id' => 45,
            ),
            196 => 
            array (
                'sc_id' => 2697,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1958,
                'class_id' => 427,
            ),
            197 => 
            array (
                'sc_id' => 2698,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1702,
                'class_id' => 255,
            ),
            198 => 
            array (
                'sc_id' => 2699,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1930,
                'class_id' => 136,
            ),
            199 => 
            array (
                'sc_id' => 2700,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1752,
                'class_id' => 220,
            ),
            200 => 
            array (
                'sc_id' => 2701,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1225,
                'class_id' => 468,
            ),
            201 => 
            array (
                'sc_id' => 2702,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1903,
                'class_id' => 30,
            ),
            202 => 
            array (
                'sc_id' => 2703,
                'date_enrolled' => '2022-07-27',
                'student_id' => 612,
                'class_id' => 116,
            ),
            203 => 
            array (
                'sc_id' => 2704,
                'date_enrolled' => '2022-07-23',
                'student_id' => 370,
                'class_id' => 322,
            ),
            204 => 
            array (
                'sc_id' => 2705,
                'date_enrolled' => '2022-06-19',
                'student_id' => 820,
                'class_id' => 111,
            ),
            205 => 
            array (
                'sc_id' => 2706,
                'date_enrolled' => '2022-07-19',
                'student_id' => 369,
                'class_id' => 239,
            ),
            206 => 
            array (
                'sc_id' => 2707,
                'date_enrolled' => '2022-07-28',
                'student_id' => 186,
                'class_id' => 312,
            ),
            207 => 
            array (
                'sc_id' => 2708,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1113,
                'class_id' => 336,
            ),
            208 => 
            array (
                'sc_id' => 2709,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1796,
                'class_id' => 232,
            ),
            209 => 
            array (
                'sc_id' => 2710,
                'date_enrolled' => '2022-08-07',
                'student_id' => 466,
                'class_id' => 328,
            ),
            210 => 
            array (
                'sc_id' => 2711,
                'date_enrolled' => '2022-08-27',
                'student_id' => 132,
                'class_id' => 63,
            ),
            211 => 
            array (
                'sc_id' => 2712,
                'date_enrolled' => '2022-06-16',
                'student_id' => 752,
                'class_id' => 136,
            ),
            212 => 
            array (
                'sc_id' => 2713,
                'date_enrolled' => '2022-06-05',
                'student_id' => 76,
                'class_id' => 451,
            ),
            213 => 
            array (
                'sc_id' => 2714,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1928,
                'class_id' => 390,
            ),
            214 => 
            array (
                'sc_id' => 2715,
                'date_enrolled' => '2022-08-14',
                'student_id' => 509,
                'class_id' => 481,
            ),
            215 => 
            array (
                'sc_id' => 2716,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1209,
                'class_id' => 1,
            ),
            216 => 
            array (
                'sc_id' => 2717,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1917,
                'class_id' => 168,
            ),
            217 => 
            array (
                'sc_id' => 2718,
                'date_enrolled' => '2022-08-17',
                'student_id' => 388,
                'class_id' => 269,
            ),
            218 => 
            array (
                'sc_id' => 2719,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1526,
                'class_id' => 142,
            ),
            219 => 
            array (
                'sc_id' => 2720,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1906,
                'class_id' => 192,
            ),
            220 => 
            array (
                'sc_id' => 2721,
                'date_enrolled' => '2022-08-19',
                'student_id' => 91,
                'class_id' => 81,
            ),
            221 => 
            array (
                'sc_id' => 2722,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1939,
                'class_id' => 150,
            ),
            222 => 
            array (
                'sc_id' => 2723,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1521,
                'class_id' => 141,
            ),
            223 => 
            array (
                'sc_id' => 2724,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1216,
                'class_id' => 154,
            ),
            224 => 
            array (
                'sc_id' => 2725,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1933,
                'class_id' => 101,
            ),
            225 => 
            array (
                'sc_id' => 2726,
                'date_enrolled' => '2022-08-13',
                'student_id' => 623,
                'class_id' => 110,
            ),
            226 => 
            array (
                'sc_id' => 2727,
                'date_enrolled' => '2022-06-08',
                'student_id' => 64,
                'class_id' => 391,
            ),
            227 => 
            array (
                'sc_id' => 2728,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1913,
                'class_id' => 56,
            ),
            228 => 
            array (
                'sc_id' => 2729,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1861,
                'class_id' => 357,
            ),
            229 => 
            array (
                'sc_id' => 2730,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1292,
                'class_id' => 190,
            ),
            230 => 
            array (
                'sc_id' => 2731,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1700,
                'class_id' => 329,
            ),
            231 => 
            array (
                'sc_id' => 2732,
                'date_enrolled' => '2022-08-16',
                'student_id' => 960,
                'class_id' => 215,
            ),
            232 => 
            array (
                'sc_id' => 2733,
                'date_enrolled' => '2022-08-14',
                'student_id' => 434,
                'class_id' => 210,
            ),
            233 => 
            array (
                'sc_id' => 2734,
                'date_enrolled' => '2022-07-15',
                'student_id' => 38,
                'class_id' => 149,
            ),
            234 => 
            array (
                'sc_id' => 2735,
                'date_enrolled' => '2022-07-31',
                'student_id' => 816,
                'class_id' => 383,
            ),
            235 => 
            array (
                'sc_id' => 2736,
                'date_enrolled' => '2022-06-20',
                'student_id' => 793,
                'class_id' => 21,
            ),
            236 => 
            array (
                'sc_id' => 2737,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1504,
                'class_id' => 257,
            ),
            237 => 
            array (
                'sc_id' => 2738,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1398,
                'class_id' => 474,
            ),
            238 => 
            array (
                'sc_id' => 2739,
                'date_enrolled' => '2022-07-19',
                'student_id' => 66,
                'class_id' => 417,
            ),
            239 => 
            array (
                'sc_id' => 2740,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1028,
                'class_id' => 181,
            ),
            240 => 
            array (
                'sc_id' => 2741,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1154,
                'class_id' => 465,
            ),
            241 => 
            array (
                'sc_id' => 2742,
                'date_enrolled' => '2022-07-24',
                'student_id' => 476,
                'class_id' => 346,
            ),
            242 => 
            array (
                'sc_id' => 2743,
                'date_enrolled' => '2022-08-13',
                'student_id' => 82,
                'class_id' => 460,
            ),
            243 => 
            array (
                'sc_id' => 2744,
                'date_enrolled' => '2022-08-18',
                'student_id' => 510,
                'class_id' => 363,
            ),
            244 => 
            array (
                'sc_id' => 2745,
                'date_enrolled' => '2022-07-16',
                'student_id' => 270,
                'class_id' => 256,
            ),
            245 => 
            array (
                'sc_id' => 2746,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1297,
                'class_id' => 33,
            ),
            246 => 
            array (
                'sc_id' => 2747,
                'date_enrolled' => '2022-08-25',
                'student_id' => 178,
                'class_id' => 466,
            ),
            247 => 
            array (
                'sc_id' => 2748,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1680,
                'class_id' => 12,
            ),
            248 => 
            array (
                'sc_id' => 2749,
                'date_enrolled' => '2022-07-25',
                'student_id' => 488,
                'class_id' => 181,
            ),
            249 => 
            array (
                'sc_id' => 2750,
                'date_enrolled' => '2022-07-24',
                'student_id' => 568,
                'class_id' => 194,
            ),
            250 => 
            array (
                'sc_id' => 2751,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1003,
                'class_id' => 145,
            ),
            251 => 
            array (
                'sc_id' => 2752,
                'date_enrolled' => '2022-07-21',
                'student_id' => 819,
                'class_id' => 207,
            ),
            252 => 
            array (
                'sc_id' => 2753,
                'date_enrolled' => '2022-08-19',
                'student_id' => 479,
                'class_id' => 55,
            ),
            253 => 
            array (
                'sc_id' => 2754,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1938,
                'class_id' => 491,
            ),
            254 => 
            array (
                'sc_id' => 2755,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1087,
                'class_id' => 417,
            ),
            255 => 
            array (
                'sc_id' => 2756,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1272,
                'class_id' => 81,
            ),
            256 => 
            array (
                'sc_id' => 2757,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1574,
                'class_id' => 330,
            ),
            257 => 
            array (
                'sc_id' => 2758,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1325,
                'class_id' => 291,
            ),
            258 => 
            array (
                'sc_id' => 2759,
                'date_enrolled' => '2022-08-28',
                'student_id' => 176,
                'class_id' => 396,
            ),
            259 => 
            array (
                'sc_id' => 2760,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1850,
                'class_id' => 499,
            ),
            260 => 
            array (
                'sc_id' => 2761,
                'date_enrolled' => '2022-07-05',
                'student_id' => 460,
                'class_id' => 408,
            ),
            261 => 
            array (
                'sc_id' => 2762,
                'date_enrolled' => '2022-06-19',
                'student_id' => 903,
                'class_id' => 108,
            ),
            262 => 
            array (
                'sc_id' => 2763,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1928,
                'class_id' => 463,
            ),
            263 => 
            array (
                'sc_id' => 2764,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1798,
                'class_id' => 352,
            ),
            264 => 
            array (
                'sc_id' => 2765,
                'date_enrolled' => '2022-06-23',
                'student_id' => 540,
                'class_id' => 479,
            ),
            265 => 
            array (
                'sc_id' => 2766,
                'date_enrolled' => '2022-07-12',
                'student_id' => 686,
                'class_id' => 317,
            ),
            266 => 
            array (
                'sc_id' => 2767,
                'date_enrolled' => '2022-08-20',
                'student_id' => 169,
                'class_id' => 309,
            ),
            267 => 
            array (
                'sc_id' => 2768,
                'date_enrolled' => '2022-06-02',
                'student_id' => 607,
                'class_id' => 55,
            ),
            268 => 
            array (
                'sc_id' => 2769,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1247,
                'class_id' => 118,
            ),
            269 => 
            array (
                'sc_id' => 2770,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1639,
                'class_id' => 263,
            ),
            270 => 
            array (
                'sc_id' => 2771,
                'date_enrolled' => '2022-07-14',
                'student_id' => 981,
                'class_id' => 216,
            ),
            271 => 
            array (
                'sc_id' => 2772,
                'date_enrolled' => '2022-08-24',
                'student_id' => 71,
                'class_id' => 436,
            ),
            272 => 
            array (
                'sc_id' => 2773,
                'date_enrolled' => '2022-06-17',
                'student_id' => 971,
                'class_id' => 394,
            ),
            273 => 
            array (
                'sc_id' => 2774,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1733,
                'class_id' => 478,
            ),
            274 => 
            array (
                'sc_id' => 2775,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1240,
                'class_id' => 279,
            ),
            275 => 
            array (
                'sc_id' => 2776,
                'date_enrolled' => '2022-06-12',
                'student_id' => 336,
                'class_id' => 273,
            ),
            276 => 
            array (
                'sc_id' => 2777,
                'date_enrolled' => '2022-08-10',
                'student_id' => 168,
                'class_id' => 252,
            ),
            277 => 
            array (
                'sc_id' => 2778,
                'date_enrolled' => '2022-07-09',
                'student_id' => 792,
                'class_id' => 32,
            ),
            278 => 
            array (
                'sc_id' => 2779,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1140,
                'class_id' => 461,
            ),
            279 => 
            array (
                'sc_id' => 2780,
                'date_enrolled' => '2022-08-23',
                'student_id' => 66,
                'class_id' => 299,
            ),
            280 => 
            array (
                'sc_id' => 2781,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1679,
                'class_id' => 431,
            ),
            281 => 
            array (
                'sc_id' => 2782,
                'date_enrolled' => '2022-08-21',
                'student_id' => 489,
                'class_id' => 455,
            ),
            282 => 
            array (
                'sc_id' => 2783,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1057,
                'class_id' => 425,
            ),
            283 => 
            array (
                'sc_id' => 2784,
                'date_enrolled' => '2022-07-31',
                'student_id' => 656,
                'class_id' => 364,
            ),
            284 => 
            array (
                'sc_id' => 2785,
                'date_enrolled' => '2022-06-12',
                'student_id' => 918,
                'class_id' => 155,
            ),
            285 => 
            array (
                'sc_id' => 2786,
                'date_enrolled' => '2022-06-27',
                'student_id' => 158,
                'class_id' => 266,
            ),
            286 => 
            array (
                'sc_id' => 2787,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1962,
                'class_id' => 463,
            ),
            287 => 
            array (
                'sc_id' => 2788,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1697,
                'class_id' => 132,
            ),
            288 => 
            array (
                'sc_id' => 2789,
                'date_enrolled' => '2022-07-26',
                'student_id' => 828,
                'class_id' => 494,
            ),
            289 => 
            array (
                'sc_id' => 2790,
                'date_enrolled' => '2022-07-18',
                'student_id' => 48,
                'class_id' => 104,
            ),
            290 => 
            array (
                'sc_id' => 2791,
                'date_enrolled' => '2022-07-03',
                'student_id' => 522,
                'class_id' => 384,
            ),
            291 => 
            array (
                'sc_id' => 2792,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1496,
                'class_id' => 32,
            ),
            292 => 
            array (
                'sc_id' => 2793,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1445,
                'class_id' => 197,
            ),
            293 => 
            array (
                'sc_id' => 2794,
                'date_enrolled' => '2022-08-26',
                'student_id' => 910,
                'class_id' => 341,
            ),
            294 => 
            array (
                'sc_id' => 2795,
                'date_enrolled' => '2022-08-05',
                'student_id' => 37,
                'class_id' => 194,
            ),
            295 => 
            array (
                'sc_id' => 2796,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1661,
                'class_id' => 7,
            ),
            296 => 
            array (
                'sc_id' => 2797,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1090,
                'class_id' => 382,
            ),
            297 => 
            array (
                'sc_id' => 2798,
                'date_enrolled' => '2022-06-24',
                'student_id' => 101,
                'class_id' => 405,
            ),
            298 => 
            array (
                'sc_id' => 2799,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1354,
                'class_id' => 7,
            ),
            299 => 
            array (
                'sc_id' => 2800,
                'date_enrolled' => '2022-06-09',
                'student_id' => 891,
                'class_id' => 46,
            ),
            300 => 
            array (
                'sc_id' => 2801,
                'date_enrolled' => '2022-06-20',
                'student_id' => 976,
                'class_id' => 65,
            ),
            301 => 
            array (
                'sc_id' => 2802,
                'date_enrolled' => '2022-08-30',
                'student_id' => 232,
                'class_id' => 421,
            ),
            302 => 
            array (
                'sc_id' => 2803,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1733,
                'class_id' => 34,
            ),
            303 => 
            array (
                'sc_id' => 2804,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1349,
                'class_id' => 74,
            ),
            304 => 
            array (
                'sc_id' => 2805,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1540,
                'class_id' => 396,
            ),
            305 => 
            array (
                'sc_id' => 2806,
                'date_enrolled' => '2022-06-23',
                'student_id' => 261,
                'class_id' => 216,
            ),
            306 => 
            array (
                'sc_id' => 2807,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1302,
                'class_id' => 497,
            ),
            307 => 
            array (
                'sc_id' => 2808,
                'date_enrolled' => '2022-07-16',
                'student_id' => 541,
                'class_id' => 288,
            ),
            308 => 
            array (
                'sc_id' => 2809,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1867,
                'class_id' => 311,
            ),
            309 => 
            array (
                'sc_id' => 2810,
                'date_enrolled' => '2022-08-08',
                'student_id' => 746,
                'class_id' => 152,
            ),
            310 => 
            array (
                'sc_id' => 2811,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1940,
                'class_id' => 116,
            ),
            311 => 
            array (
                'sc_id' => 2812,
                'date_enrolled' => '2022-06-14',
                'student_id' => 225,
                'class_id' => 321,
            ),
            312 => 
            array (
                'sc_id' => 2813,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1880,
                'class_id' => 58,
            ),
            313 => 
            array (
                'sc_id' => 2814,
                'date_enrolled' => '2022-07-25',
                'student_id' => 344,
                'class_id' => 246,
            ),
            314 => 
            array (
                'sc_id' => 2815,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1465,
                'class_id' => 458,
            ),
            315 => 
            array (
                'sc_id' => 2816,
                'date_enrolled' => '2022-08-05',
                'student_id' => 236,
                'class_id' => 389,
            ),
            316 => 
            array (
                'sc_id' => 2817,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1994,
                'class_id' => 108,
            ),
            317 => 
            array (
                'sc_id' => 2818,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1443,
                'class_id' => 23,
            ),
            318 => 
            array (
                'sc_id' => 2819,
                'date_enrolled' => '2022-06-23',
                'student_id' => 425,
                'class_id' => 452,
            ),
            319 => 
            array (
                'sc_id' => 2820,
                'date_enrolled' => '2022-07-25',
                'student_id' => 893,
                'class_id' => 171,
            ),
            320 => 
            array (
                'sc_id' => 2821,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1895,
                'class_id' => 244,
            ),
            321 => 
            array (
                'sc_id' => 2822,
                'date_enrolled' => '2022-07-10',
                'student_id' => 991,
                'class_id' => 135,
            ),
            322 => 
            array (
                'sc_id' => 2823,
                'date_enrolled' => '2022-06-14',
                'student_id' => 387,
                'class_id' => 196,
            ),
            323 => 
            array (
                'sc_id' => 2824,
                'date_enrolled' => '2022-06-04',
                'student_id' => 810,
                'class_id' => 128,
            ),
            324 => 
            array (
                'sc_id' => 2825,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1439,
                'class_id' => 128,
            ),
            325 => 
            array (
                'sc_id' => 2826,
                'date_enrolled' => '2022-06-27',
                'student_id' => 888,
                'class_id' => 456,
            ),
            326 => 
            array (
                'sc_id' => 2827,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1822,
                'class_id' => 431,
            ),
            327 => 
            array (
                'sc_id' => 2828,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1880,
                'class_id' => 168,
            ),
            328 => 
            array (
                'sc_id' => 2829,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1109,
                'class_id' => 464,
            ),
            329 => 
            array (
                'sc_id' => 2830,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1326,
                'class_id' => 294,
            ),
            330 => 
            array (
                'sc_id' => 2831,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1715,
                'class_id' => 314,
            ),
            331 => 
            array (
                'sc_id' => 2832,
                'date_enrolled' => '2022-07-23',
                'student_id' => 820,
                'class_id' => 92,
            ),
            332 => 
            array (
                'sc_id' => 2833,
                'date_enrolled' => '2022-07-15',
                'student_id' => 956,
                'class_id' => 404,
            ),
            333 => 
            array (
                'sc_id' => 2834,
                'date_enrolled' => '2022-06-13',
                'student_id' => 911,
                'class_id' => 352,
            ),
            334 => 
            array (
                'sc_id' => 2835,
                'date_enrolled' => '2022-07-18',
                'student_id' => 241,
                'class_id' => 326,
            ),
            335 => 
            array (
                'sc_id' => 2836,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1793,
                'class_id' => 87,
            ),
            336 => 
            array (
                'sc_id' => 2837,
                'date_enrolled' => '2022-06-28',
                'student_id' => 510,
                'class_id' => 485,
            ),
            337 => 
            array (
                'sc_id' => 2838,
                'date_enrolled' => '2022-07-19',
                'student_id' => 186,
                'class_id' => 51,
            ),
            338 => 
            array (
                'sc_id' => 2839,
                'date_enrolled' => '2022-07-10',
                'student_id' => 820,
                'class_id' => 101,
            ),
            339 => 
            array (
                'sc_id' => 2840,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1556,
                'class_id' => 194,
            ),
            340 => 
            array (
                'sc_id' => 2841,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1101,
                'class_id' => 127,
            ),
            341 => 
            array (
                'sc_id' => 2842,
                'date_enrolled' => '2022-06-08',
                'student_id' => 227,
                'class_id' => 375,
            ),
            342 => 
            array (
                'sc_id' => 2843,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1734,
                'class_id' => 221,
            ),
            343 => 
            array (
                'sc_id' => 2844,
                'date_enrolled' => '2022-08-21',
                'student_id' => 270,
                'class_id' => 426,
            ),
            344 => 
            array (
                'sc_id' => 2845,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1936,
                'class_id' => 493,
            ),
            345 => 
            array (
                'sc_id' => 2846,
                'date_enrolled' => '2022-07-25',
                'student_id' => 624,
                'class_id' => 483,
            ),
            346 => 
            array (
                'sc_id' => 2847,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1237,
                'class_id' => 330,
            ),
            347 => 
            array (
                'sc_id' => 2848,
                'date_enrolled' => '2022-08-25',
                'student_id' => 333,
                'class_id' => 368,
            ),
            348 => 
            array (
                'sc_id' => 2849,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1801,
                'class_id' => 91,
            ),
            349 => 
            array (
                'sc_id' => 2850,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1205,
                'class_id' => 375,
            ),
            350 => 
            array (
                'sc_id' => 2851,
                'date_enrolled' => '2022-07-15',
                'student_id' => 796,
                'class_id' => 272,
            ),
            351 => 
            array (
                'sc_id' => 2852,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1920,
                'class_id' => 408,
            ),
            352 => 
            array (
                'sc_id' => 2853,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1013,
                'class_id' => 402,
            ),
            353 => 
            array (
                'sc_id' => 2854,
                'date_enrolled' => '2022-08-18',
                'student_id' => 553,
                'class_id' => 203,
            ),
            354 => 
            array (
                'sc_id' => 2855,
                'date_enrolled' => '2022-06-06',
                'student_id' => 916,
                'class_id' => 219,
            ),
            355 => 
            array (
                'sc_id' => 2856,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1917,
                'class_id' => 443,
            ),
            356 => 
            array (
                'sc_id' => 2857,
                'date_enrolled' => '2022-08-09',
                'student_id' => 837,
                'class_id' => 468,
            ),
            357 => 
            array (
                'sc_id' => 2858,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1388,
                'class_id' => 376,
            ),
            358 => 
            array (
                'sc_id' => 2859,
                'date_enrolled' => '2022-07-24',
                'student_id' => 451,
                'class_id' => 277,
            ),
            359 => 
            array (
                'sc_id' => 2860,
                'date_enrolled' => '2022-06-16',
                'student_id' => 197,
                'class_id' => 299,
            ),
            360 => 
            array (
                'sc_id' => 2861,
                'date_enrolled' => '2022-08-27',
                'student_id' => 895,
                'class_id' => 268,
            ),
            361 => 
            array (
                'sc_id' => 2862,
                'date_enrolled' => '2022-06-05',
                'student_id' => 335,
                'class_id' => 221,
            ),
            362 => 
            array (
                'sc_id' => 2863,
                'date_enrolled' => '2022-07-18',
                'student_id' => 608,
                'class_id' => 220,
            ),
            363 => 
            array (
                'sc_id' => 2864,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1518,
                'class_id' => 265,
            ),
            364 => 
            array (
                'sc_id' => 2865,
                'date_enrolled' => '2022-08-06',
                'student_id' => 203,
                'class_id' => 53,
            ),
            365 => 
            array (
                'sc_id' => 2866,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1304,
                'class_id' => 460,
            ),
            366 => 
            array (
                'sc_id' => 2867,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1093,
                'class_id' => 461,
            ),
            367 => 
            array (
                'sc_id' => 2868,
                'date_enrolled' => '2022-07-25',
                'student_id' => 753,
                'class_id' => 343,
            ),
            368 => 
            array (
                'sc_id' => 2869,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1979,
                'class_id' => 88,
            ),
            369 => 
            array (
                'sc_id' => 2870,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1080,
                'class_id' => 333,
            ),
            370 => 
            array (
                'sc_id' => 2871,
                'date_enrolled' => '2022-06-04',
                'student_id' => 979,
                'class_id' => 121,
            ),
            371 => 
            array (
                'sc_id' => 2872,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1108,
                'class_id' => 374,
            ),
            372 => 
            array (
                'sc_id' => 2873,
                'date_enrolled' => '2022-08-28',
                'student_id' => 922,
                'class_id' => 114,
            ),
            373 => 
            array (
                'sc_id' => 2874,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1721,
                'class_id' => 28,
            ),
            374 => 
            array (
                'sc_id' => 2875,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1827,
                'class_id' => 92,
            ),
            375 => 
            array (
                'sc_id' => 2876,
                'date_enrolled' => '2022-07-15',
                'student_id' => 410,
                'class_id' => 69,
            ),
            376 => 
            array (
                'sc_id' => 2877,
                'date_enrolled' => '2022-07-07',
                'student_id' => 108,
                'class_id' => 72,
            ),
            377 => 
            array (
                'sc_id' => 2878,
                'date_enrolled' => '2022-08-23',
                'student_id' => 989,
                'class_id' => 386,
            ),
            378 => 
            array (
                'sc_id' => 2879,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1046,
                'class_id' => 148,
            ),
            379 => 
            array (
                'sc_id' => 2880,
                'date_enrolled' => '2022-08-03',
                'student_id' => 64,
                'class_id' => 104,
            ),
            380 => 
            array (
                'sc_id' => 2881,
                'date_enrolled' => '2022-08-24',
                'student_id' => 409,
                'class_id' => 414,
            ),
            381 => 
            array (
                'sc_id' => 2882,
                'date_enrolled' => '2022-06-18',
                'student_id' => 465,
                'class_id' => 317,
            ),
            382 => 
            array (
                'sc_id' => 2883,
                'date_enrolled' => '2022-07-07',
                'student_id' => 657,
                'class_id' => 254,
            ),
            383 => 
            array (
                'sc_id' => 2884,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1173,
                'class_id' => 225,
            ),
            384 => 
            array (
                'sc_id' => 2885,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1281,
                'class_id' => 295,
            ),
            385 => 
            array (
                'sc_id' => 2886,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1684,
                'class_id' => 440,
            ),
            386 => 
            array (
                'sc_id' => 2887,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1835,
                'class_id' => 23,
            ),
            387 => 
            array (
                'sc_id' => 2888,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1282,
                'class_id' => 321,
            ),
            388 => 
            array (
                'sc_id' => 2889,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1230,
                'class_id' => 154,
            ),
            389 => 
            array (
                'sc_id' => 2890,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1204,
                'class_id' => 185,
            ),
            390 => 
            array (
                'sc_id' => 2891,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1054,
                'class_id' => 20,
            ),
            391 => 
            array (
                'sc_id' => 2892,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1769,
                'class_id' => 177,
            ),
            392 => 
            array (
                'sc_id' => 2893,
                'date_enrolled' => '2022-07-23',
                'student_id' => 933,
                'class_id' => 330,
            ),
            393 => 
            array (
                'sc_id' => 2894,
                'date_enrolled' => '2022-08-08',
                'student_id' => 586,
                'class_id' => 377,
            ),
            394 => 
            array (
                'sc_id' => 2895,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1005,
                'class_id' => 220,
            ),
            395 => 
            array (
                'sc_id' => 2896,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1208,
                'class_id' => 141,
            ),
            396 => 
            array (
                'sc_id' => 2897,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1827,
                'class_id' => 468,
            ),
            397 => 
            array (
                'sc_id' => 2898,
                'date_enrolled' => '2022-08-09',
                'student_id' => 890,
                'class_id' => 386,
            ),
            398 => 
            array (
                'sc_id' => 2899,
                'date_enrolled' => '2022-06-06',
                'student_id' => 264,
                'class_id' => 329,
            ),
            399 => 
            array (
                'sc_id' => 2900,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1948,
                'class_id' => 44,
            ),
            400 => 
            array (
                'sc_id' => 2901,
                'date_enrolled' => '2022-07-16',
                'student_id' => 761,
                'class_id' => 34,
            ),
            401 => 
            array (
                'sc_id' => 2902,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1964,
                'class_id' => 389,
            ),
            402 => 
            array (
                'sc_id' => 2903,
                'date_enrolled' => '2022-07-14',
                'student_id' => 398,
                'class_id' => 405,
            ),
            403 => 
            array (
                'sc_id' => 2904,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1176,
                'class_id' => 62,
            ),
            404 => 
            array (
                'sc_id' => 2905,
                'date_enrolled' => '2022-06-23',
                'student_id' => 59,
                'class_id' => 313,
            ),
            405 => 
            array (
                'sc_id' => 2906,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1954,
                'class_id' => 259,
            ),
            406 => 
            array (
                'sc_id' => 2907,
                'date_enrolled' => '2022-08-12',
                'student_id' => 506,
                'class_id' => 266,
            ),
            407 => 
            array (
                'sc_id' => 2908,
                'date_enrolled' => '2022-08-21',
                'student_id' => 894,
                'class_id' => 56,
            ),
            408 => 
            array (
                'sc_id' => 2909,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1557,
                'class_id' => 235,
            ),
            409 => 
            array (
                'sc_id' => 2910,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1602,
                'class_id' => 226,
            ),
            410 => 
            array (
                'sc_id' => 2911,
                'date_enrolled' => '2022-07-01',
                'student_id' => 232,
                'class_id' => 278,
            ),
            411 => 
            array (
                'sc_id' => 2912,
                'date_enrolled' => '2022-07-03',
                'student_id' => 637,
                'class_id' => 254,
            ),
            412 => 
            array (
                'sc_id' => 2913,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1157,
                'class_id' => 279,
            ),
            413 => 
            array (
                'sc_id' => 2914,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1977,
                'class_id' => 362,
            ),
            414 => 
            array (
                'sc_id' => 2915,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1845,
                'class_id' => 299,
            ),
            415 => 
            array (
                'sc_id' => 2916,
                'date_enrolled' => '2022-06-28',
                'student_id' => 570,
                'class_id' => 163,
            ),
            416 => 
            array (
                'sc_id' => 2917,
                'date_enrolled' => '2022-06-15',
                'student_id' => 541,
                'class_id' => 57,
            ),
            417 => 
            array (
                'sc_id' => 2918,
                'date_enrolled' => '2022-08-31',
                'student_id' => 242,
                'class_id' => 196,
            ),
            418 => 
            array (
                'sc_id' => 2919,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1530,
                'class_id' => 93,
            ),
            419 => 
            array (
                'sc_id' => 2920,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1133,
                'class_id' => 97,
            ),
            420 => 
            array (
                'sc_id' => 2921,
                'date_enrolled' => '2022-08-10',
                'student_id' => 911,
                'class_id' => 364,
            ),
            421 => 
            array (
                'sc_id' => 2922,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1872,
                'class_id' => 293,
            ),
            422 => 
            array (
                'sc_id' => 2923,
                'date_enrolled' => '2022-06-03',
                'student_id' => 359,
                'class_id' => 55,
            ),
            423 => 
            array (
                'sc_id' => 2924,
                'date_enrolled' => '2022-07-11',
                'student_id' => 524,
                'class_id' => 467,
            ),
            424 => 
            array (
                'sc_id' => 2925,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1200,
                'class_id' => 84,
            ),
            425 => 
            array (
                'sc_id' => 2926,
                'date_enrolled' => '2022-08-28',
                'student_id' => 47,
                'class_id' => 262,
            ),
            426 => 
            array (
                'sc_id' => 2927,
                'date_enrolled' => '2022-06-11',
                'student_id' => 262,
                'class_id' => 471,
            ),
            427 => 
            array (
                'sc_id' => 2928,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1072,
                'class_id' => 77,
            ),
            428 => 
            array (
                'sc_id' => 2929,
                'date_enrolled' => '2022-07-26',
                'student_id' => 374,
                'class_id' => 218,
            ),
            429 => 
            array (
                'sc_id' => 2930,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1480,
                'class_id' => 105,
            ),
            430 => 
            array (
                'sc_id' => 2931,
                'date_enrolled' => '2022-07-08',
                'student_id' => 400,
                'class_id' => 113,
            ),
            431 => 
            array (
                'sc_id' => 2932,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1510,
                'class_id' => 258,
            ),
            432 => 
            array (
                'sc_id' => 2933,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1016,
                'class_id' => 308,
            ),
            433 => 
            array (
                'sc_id' => 2934,
                'date_enrolled' => '2022-08-04',
                'student_id' => 554,
                'class_id' => 90,
            ),
            434 => 
            array (
                'sc_id' => 2935,
                'date_enrolled' => '2022-08-07',
                'student_id' => 456,
                'class_id' => 156,
            ),
            435 => 
            array (
                'sc_id' => 2936,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1425,
                'class_id' => 88,
            ),
            436 => 
            array (
                'sc_id' => 2937,
                'date_enrolled' => '2022-07-03',
                'student_id' => 72,
                'class_id' => 193,
            ),
            437 => 
            array (
                'sc_id' => 2938,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1678,
                'class_id' => 377,
            ),
            438 => 
            array (
                'sc_id' => 2939,
                'date_enrolled' => '2022-06-24',
                'student_id' => 580,
                'class_id' => 33,
            ),
            439 => 
            array (
                'sc_id' => 2940,
                'date_enrolled' => '2022-06-15',
                'student_id' => 117,
                'class_id' => 393,
            ),
            440 => 
            array (
                'sc_id' => 2941,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1341,
                'class_id' => 260,
            ),
            441 => 
            array (
                'sc_id' => 2942,
                'date_enrolled' => '2022-08-12',
                'student_id' => 764,
                'class_id' => 50,
            ),
            442 => 
            array (
                'sc_id' => 2943,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1492,
                'class_id' => 163,
            ),
            443 => 
            array (
                'sc_id' => 2944,
                'date_enrolled' => '2022-06-12',
                'student_id' => 226,
                'class_id' => 283,
            ),
            444 => 
            array (
                'sc_id' => 2945,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1213,
                'class_id' => 128,
            ),
            445 => 
            array (
                'sc_id' => 2946,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1694,
                'class_id' => 166,
            ),
            446 => 
            array (
                'sc_id' => 2947,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1591,
                'class_id' => 286,
            ),
            447 => 
            array (
                'sc_id' => 2948,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1875,
                'class_id' => 229,
            ),
            448 => 
            array (
                'sc_id' => 2949,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1780,
                'class_id' => 5,
            ),
            449 => 
            array (
                'sc_id' => 2950,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1764,
                'class_id' => 39,
            ),
            450 => 
            array (
                'sc_id' => 2951,
                'date_enrolled' => '2022-07-04',
                'student_id' => 735,
                'class_id' => 154,
            ),
            451 => 
            array (
                'sc_id' => 2952,
                'date_enrolled' => '2022-06-15',
                'student_id' => 27,
                'class_id' => 62,
            ),
            452 => 
            array (
                'sc_id' => 2953,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1113,
                'class_id' => 35,
            ),
            453 => 
            array (
                'sc_id' => 2954,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1210,
                'class_id' => 325,
            ),
            454 => 
            array (
                'sc_id' => 2955,
                'date_enrolled' => '2022-06-05',
                'student_id' => 887,
                'class_id' => 115,
            ),
            455 => 
            array (
                'sc_id' => 2956,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1252,
                'class_id' => 426,
            ),
            456 => 
            array (
                'sc_id' => 2957,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1372,
                'class_id' => 160,
            ),
            457 => 
            array (
                'sc_id' => 2958,
                'date_enrolled' => '2022-08-09',
                'student_id' => 337,
                'class_id' => 118,
            ),
            458 => 
            array (
                'sc_id' => 2959,
                'date_enrolled' => '2022-07-22',
                'student_id' => 382,
                'class_id' => 231,
            ),
            459 => 
            array (
                'sc_id' => 2960,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1644,
                'class_id' => 4,
            ),
            460 => 
            array (
                'sc_id' => 2961,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1421,
                'class_id' => 273,
            ),
            461 => 
            array (
                'sc_id' => 2962,
                'date_enrolled' => '2022-07-28',
                'student_id' => 946,
                'class_id' => 328,
            ),
            462 => 
            array (
                'sc_id' => 2963,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1412,
                'class_id' => 414,
            ),
            463 => 
            array (
                'sc_id' => 2964,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1831,
                'class_id' => 176,
            ),
            464 => 
            array (
                'sc_id' => 2965,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1224,
                'class_id' => 84,
            ),
            465 => 
            array (
                'sc_id' => 2966,
                'date_enrolled' => '2022-08-01',
                'student_id' => 603,
                'class_id' => 322,
            ),
            466 => 
            array (
                'sc_id' => 2967,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1073,
                'class_id' => 375,
            ),
            467 => 
            array (
                'sc_id' => 2968,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1861,
                'class_id' => 6,
            ),
            468 => 
            array (
                'sc_id' => 2969,
                'date_enrolled' => '2022-07-18',
                'student_id' => 547,
                'class_id' => 263,
            ),
            469 => 
            array (
                'sc_id' => 2970,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1630,
                'class_id' => 147,
            ),
            470 => 
            array (
                'sc_id' => 2971,
                'date_enrolled' => '2022-08-15',
                'student_id' => 183,
                'class_id' => 273,
            ),
            471 => 
            array (
                'sc_id' => 2972,
                'date_enrolled' => '2022-06-19',
                'student_id' => 292,
                'class_id' => 403,
            ),
            472 => 
            array (
                'sc_id' => 2973,
                'date_enrolled' => '2022-06-30',
                'student_id' => 945,
                'class_id' => 309,
            ),
            473 => 
            array (
                'sc_id' => 2974,
                'date_enrolled' => '2022-08-22',
                'student_id' => 855,
                'class_id' => 409,
            ),
            474 => 
            array (
                'sc_id' => 2975,
                'date_enrolled' => '2022-07-28',
                'student_id' => 46,
                'class_id' => 90,
            ),
            475 => 
            array (
                'sc_id' => 2976,
                'date_enrolled' => '2022-07-20',
                'student_id' => 889,
                'class_id' => 50,
            ),
            476 => 
            array (
                'sc_id' => 2977,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1035,
                'class_id' => 350,
            ),
            477 => 
            array (
                'sc_id' => 2978,
                'date_enrolled' => '2022-07-31',
                'student_id' => 183,
                'class_id' => 94,
            ),
            478 => 
            array (
                'sc_id' => 2979,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1208,
                'class_id' => 484,
            ),
            479 => 
            array (
                'sc_id' => 2980,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1804,
                'class_id' => 386,
            ),
            480 => 
            array (
                'sc_id' => 2981,
                'date_enrolled' => '2022-06-01',
                'student_id' => 533,
                'class_id' => 36,
            ),
            481 => 
            array (
                'sc_id' => 2982,
                'date_enrolled' => '2022-06-16',
                'student_id' => 561,
                'class_id' => 125,
            ),
            482 => 
            array (
                'sc_id' => 2983,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1630,
                'class_id' => 441,
            ),
            483 => 
            array (
                'sc_id' => 2984,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1357,
                'class_id' => 479,
            ),
            484 => 
            array (
                'sc_id' => 2985,
                'date_enrolled' => '2022-08-12',
                'student_id' => 358,
                'class_id' => 407,
            ),
            485 => 
            array (
                'sc_id' => 2986,
                'date_enrolled' => '2022-08-23',
                'student_id' => 663,
                'class_id' => 450,
            ),
            486 => 
            array (
                'sc_id' => 2987,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1676,
                'class_id' => 352,
            ),
            487 => 
            array (
                'sc_id' => 2988,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1134,
                'class_id' => 36,
            ),
            488 => 
            array (
                'sc_id' => 2989,
                'date_enrolled' => '2022-07-18',
                'student_id' => 697,
                'class_id' => 390,
            ),
            489 => 
            array (
                'sc_id' => 2990,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1032,
                'class_id' => 28,
            ),
            490 => 
            array (
                'sc_id' => 2991,
                'date_enrolled' => '2022-07-28',
                'student_id' => 879,
                'class_id' => 244,
            ),
            491 => 
            array (
                'sc_id' => 2992,
                'date_enrolled' => '2022-06-19',
                'student_id' => 120,
                'class_id' => 343,
            ),
            492 => 
            array (
                'sc_id' => 2993,
                'date_enrolled' => '2022-07-24',
                'student_id' => 948,
                'class_id' => 45,
            ),
            493 => 
            array (
                'sc_id' => 2994,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1189,
                'class_id' => 255,
            ),
            494 => 
            array (
                'sc_id' => 2995,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1019,
                'class_id' => 482,
            ),
            495 => 
            array (
                'sc_id' => 2996,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1300,
                'class_id' => 251,
            ),
            496 => 
            array (
                'sc_id' => 2997,
                'date_enrolled' => '2022-06-17',
                'student_id' => 517,
                'class_id' => 453,
            ),
            497 => 
            array (
                'sc_id' => 2998,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1350,
                'class_id' => 82,
            ),
            498 => 
            array (
                'sc_id' => 2999,
                'date_enrolled' => '2022-08-19',
                'student_id' => 191,
                'class_id' => 277,
            ),
            499 => 
            array (
                'sc_id' => 3000,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1308,
                'class_id' => 347,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 3001,
                'date_enrolled' => '2022-07-03',
                'student_id' => 759,
                'class_id' => 9,
            ),
            1 => 
            array (
                'sc_id' => 3002,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1057,
                'class_id' => 286,
            ),
            2 => 
            array (
                'sc_id' => 3003,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1702,
                'class_id' => 263,
            ),
            3 => 
            array (
                'sc_id' => 3004,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1533,
                'class_id' => 230,
            ),
            4 => 
            array (
                'sc_id' => 3005,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1374,
                'class_id' => 80,
            ),
            5 => 
            array (
                'sc_id' => 3006,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1350,
                'class_id' => 484,
            ),
            6 => 
            array (
                'sc_id' => 3007,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1216,
                'class_id' => 135,
            ),
            7 => 
            array (
                'sc_id' => 3008,
                'date_enrolled' => '2022-06-28',
                'student_id' => 832,
                'class_id' => 132,
            ),
            8 => 
            array (
                'sc_id' => 3009,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1480,
                'class_id' => 429,
            ),
            9 => 
            array (
                'sc_id' => 3010,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1914,
                'class_id' => 178,
            ),
            10 => 
            array (
                'sc_id' => 3011,
                'date_enrolled' => '2022-08-26',
                'student_id' => 642,
                'class_id' => 169,
            ),
            11 => 
            array (
                'sc_id' => 3012,
                'date_enrolled' => '2022-07-10',
                'student_id' => 381,
                'class_id' => 356,
            ),
            12 => 
            array (
                'sc_id' => 3013,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1040,
                'class_id' => 345,
            ),
            13 => 
            array (
                'sc_id' => 3014,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1558,
                'class_id' => 352,
            ),
            14 => 
            array (
                'sc_id' => 3015,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1693,
                'class_id' => 277,
            ),
            15 => 
            array (
                'sc_id' => 3016,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1465,
                'class_id' => 459,
            ),
            16 => 
            array (
                'sc_id' => 3017,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1892,
                'class_id' => 165,
            ),
            17 => 
            array (
                'sc_id' => 3018,
                'date_enrolled' => '2022-08-10',
                'student_id' => 663,
                'class_id' => 471,
            ),
            18 => 
            array (
                'sc_id' => 3019,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1121,
                'class_id' => 398,
            ),
            19 => 
            array (
                'sc_id' => 3020,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1479,
                'class_id' => 442,
            ),
            20 => 
            array (
                'sc_id' => 3021,
                'date_enrolled' => '2022-08-13',
                'student_id' => 783,
                'class_id' => 331,
            ),
            21 => 
            array (
                'sc_id' => 3022,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1110,
                'class_id' => 412,
            ),
            22 => 
            array (
                'sc_id' => 3023,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1982,
                'class_id' => 293,
            ),
            23 => 
            array (
                'sc_id' => 3024,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1931,
                'class_id' => 259,
            ),
            24 => 
            array (
                'sc_id' => 3025,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1008,
                'class_id' => 483,
            ),
            25 => 
            array (
                'sc_id' => 3026,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1814,
                'class_id' => 263,
            ),
            26 => 
            array (
                'sc_id' => 3027,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1185,
                'class_id' => 363,
            ),
            27 => 
            array (
                'sc_id' => 3028,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1611,
                'class_id' => 281,
            ),
            28 => 
            array (
                'sc_id' => 3029,
                'date_enrolled' => '2022-08-23',
                'student_id' => 401,
                'class_id' => 13,
            ),
            29 => 
            array (
                'sc_id' => 3030,
                'date_enrolled' => '2022-08-26',
                'student_id' => 83,
                'class_id' => 59,
            ),
            30 => 
            array (
                'sc_id' => 3031,
                'date_enrolled' => '2022-08-19',
                'student_id' => 206,
                'class_id' => 496,
            ),
            31 => 
            array (
                'sc_id' => 3032,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1182,
                'class_id' => 463,
            ),
            32 => 
            array (
                'sc_id' => 3033,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1089,
                'class_id' => 479,
            ),
            33 => 
            array (
                'sc_id' => 3034,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1097,
                'class_id' => 446,
            ),
            34 => 
            array (
                'sc_id' => 3035,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1018,
                'class_id' => 231,
            ),
            35 => 
            array (
                'sc_id' => 3036,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1434,
                'class_id' => 401,
            ),
            36 => 
            array (
                'sc_id' => 3037,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1446,
                'class_id' => 253,
            ),
            37 => 
            array (
                'sc_id' => 3038,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1890,
                'class_id' => 70,
            ),
            38 => 
            array (
                'sc_id' => 3039,
                'date_enrolled' => '2022-08-28',
                'student_id' => 916,
                'class_id' => 89,
            ),
            39 => 
            array (
                'sc_id' => 3040,
                'date_enrolled' => '2022-06-01',
                'student_id' => 743,
                'class_id' => 160,
            ),
            40 => 
            array (
                'sc_id' => 3041,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1544,
                'class_id' => 169,
            ),
            41 => 
            array (
                'sc_id' => 3042,
                'date_enrolled' => '2022-08-21',
                'student_id' => 665,
                'class_id' => 354,
            ),
            42 => 
            array (
                'sc_id' => 3043,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1375,
                'class_id' => 448,
            ),
            43 => 
            array (
                'sc_id' => 3044,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1786,
                'class_id' => 322,
            ),
            44 => 
            array (
                'sc_id' => 3045,
                'date_enrolled' => '2022-07-17',
                'student_id' => 505,
                'class_id' => 323,
            ),
            45 => 
            array (
                'sc_id' => 3046,
                'date_enrolled' => '2022-07-01',
                'student_id' => 115,
                'class_id' => 356,
            ),
            46 => 
            array (
                'sc_id' => 3047,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1392,
                'class_id' => 114,
            ),
            47 => 
            array (
                'sc_id' => 3048,
                'date_enrolled' => '2022-08-28',
                'student_id' => 556,
                'class_id' => 50,
            ),
            48 => 
            array (
                'sc_id' => 3049,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1323,
                'class_id' => 459,
            ),
            49 => 
            array (
                'sc_id' => 3050,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1550,
                'class_id' => 74,
            ),
            50 => 
            array (
                'sc_id' => 3051,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1969,
                'class_id' => 28,
            ),
            51 => 
            array (
                'sc_id' => 3052,
                'date_enrolled' => '2022-07-05',
                'student_id' => 900,
                'class_id' => 354,
            ),
            52 => 
            array (
                'sc_id' => 3053,
                'date_enrolled' => '2022-07-13',
                'student_id' => 961,
                'class_id' => 254,
            ),
            53 => 
            array (
                'sc_id' => 3054,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1964,
                'class_id' => 16,
            ),
            54 => 
            array (
                'sc_id' => 3055,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1690,
                'class_id' => 63,
            ),
            55 => 
            array (
                'sc_id' => 3056,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1211,
                'class_id' => 187,
            ),
            56 => 
            array (
                'sc_id' => 3057,
                'date_enrolled' => '2022-07-08',
                'student_id' => 978,
                'class_id' => 150,
            ),
            57 => 
            array (
                'sc_id' => 3058,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1916,
                'class_id' => 9,
            ),
            58 => 
            array (
                'sc_id' => 3059,
                'date_enrolled' => '2022-07-31',
                'student_id' => 574,
                'class_id' => 454,
            ),
            59 => 
            array (
                'sc_id' => 3060,
                'date_enrolled' => '2022-07-11',
                'student_id' => 202,
                'class_id' => 485,
            ),
            60 => 
            array (
                'sc_id' => 3061,
                'date_enrolled' => '2022-08-21',
                'student_id' => 842,
                'class_id' => 322,
            ),
            61 => 
            array (
                'sc_id' => 3062,
                'date_enrolled' => '2022-08-04',
                'student_id' => 378,
                'class_id' => 295,
            ),
            62 => 
            array (
                'sc_id' => 3063,
                'date_enrolled' => '2022-06-12',
                'student_id' => 810,
                'class_id' => 63,
            ),
            63 => 
            array (
                'sc_id' => 3064,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1751,
                'class_id' => 295,
            ),
            64 => 
            array (
                'sc_id' => 3065,
                'date_enrolled' => '2022-08-31',
                'student_id' => 801,
                'class_id' => 472,
            ),
            65 => 
            array (
                'sc_id' => 3066,
                'date_enrolled' => '2022-08-25',
                'student_id' => 761,
                'class_id' => 56,
            ),
            66 => 
            array (
                'sc_id' => 3067,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1285,
                'class_id' => 261,
            ),
            67 => 
            array (
                'sc_id' => 3068,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1680,
                'class_id' => 408,
            ),
            68 => 
            array (
                'sc_id' => 3069,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1817,
                'class_id' => 491,
            ),
            69 => 
            array (
                'sc_id' => 3070,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1187,
                'class_id' => 477,
            ),
            70 => 
            array (
                'sc_id' => 3071,
                'date_enrolled' => '2022-08-21',
                'student_id' => 924,
                'class_id' => 169,
            ),
            71 => 
            array (
                'sc_id' => 3072,
                'date_enrolled' => '2022-07-14',
                'student_id' => 889,
                'class_id' => 257,
            ),
            72 => 
            array (
                'sc_id' => 3073,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1883,
                'class_id' => 369,
            ),
            73 => 
            array (
                'sc_id' => 3074,
                'date_enrolled' => '2022-07-06',
                'student_id' => 140,
                'class_id' => 331,
            ),
            74 => 
            array (
                'sc_id' => 3075,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1079,
                'class_id' => 228,
            ),
            75 => 
            array (
                'sc_id' => 3076,
                'date_enrolled' => '2022-07-17',
                'student_id' => 727,
                'class_id' => 213,
            ),
            76 => 
            array (
                'sc_id' => 3077,
                'date_enrolled' => '2022-07-30',
                'student_id' => 738,
                'class_id' => 456,
            ),
            77 => 
            array (
                'sc_id' => 3078,
                'date_enrolled' => '2022-08-19',
                'student_id' => 262,
                'class_id' => 204,
            ),
            78 => 
            array (
                'sc_id' => 3079,
                'date_enrolled' => '2022-06-12',
                'student_id' => 756,
                'class_id' => 67,
            ),
            79 => 
            array (
                'sc_id' => 3080,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1246,
                'class_id' => 190,
            ),
            80 => 
            array (
                'sc_id' => 3081,
                'date_enrolled' => '2022-06-28',
                'student_id' => 699,
                'class_id' => 254,
            ),
            81 => 
            array (
                'sc_id' => 3082,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1093,
                'class_id' => 214,
            ),
            82 => 
            array (
                'sc_id' => 3083,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1028,
                'class_id' => 64,
            ),
            83 => 
            array (
                'sc_id' => 3084,
                'date_enrolled' => '2022-07-18',
                'student_id' => 72,
                'class_id' => 166,
            ),
            84 => 
            array (
                'sc_id' => 3085,
                'date_enrolled' => '2022-06-21',
                'student_id' => 217,
                'class_id' => 87,
            ),
            85 => 
            array (
                'sc_id' => 3086,
                'date_enrolled' => '2022-07-04',
                'student_id' => 35,
                'class_id' => 434,
            ),
            86 => 
            array (
                'sc_id' => 3087,
                'date_enrolled' => '2022-07-31',
                'student_id' => 194,
                'class_id' => 262,
            ),
            87 => 
            array (
                'sc_id' => 3088,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1054,
                'class_id' => 196,
            ),
            88 => 
            array (
                'sc_id' => 3089,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1893,
                'class_id' => 265,
            ),
            89 => 
            array (
                'sc_id' => 3090,
                'date_enrolled' => '2022-06-17',
                'student_id' => 956,
                'class_id' => 369,
            ),
            90 => 
            array (
                'sc_id' => 3091,
                'date_enrolled' => '2022-08-11',
                'student_id' => 747,
                'class_id' => 36,
            ),
            91 => 
            array (
                'sc_id' => 3092,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1213,
                'class_id' => 458,
            ),
            92 => 
            array (
                'sc_id' => 3093,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1011,
                'class_id' => 272,
            ),
            93 => 
            array (
                'sc_id' => 3094,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1202,
                'class_id' => 312,
            ),
            94 => 
            array (
                'sc_id' => 3095,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1265,
                'class_id' => 31,
            ),
            95 => 
            array (
                'sc_id' => 3096,
                'date_enrolled' => '2022-06-30',
                'student_id' => 390,
                'class_id' => 431,
            ),
            96 => 
            array (
                'sc_id' => 3097,
                'date_enrolled' => '2022-07-11',
                'student_id' => 533,
                'class_id' => 344,
            ),
            97 => 
            array (
                'sc_id' => 3098,
                'date_enrolled' => '2022-06-10',
                'student_id' => 855,
                'class_id' => 120,
            ),
            98 => 
            array (
                'sc_id' => 3099,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1854,
                'class_id' => 301,
            ),
            99 => 
            array (
                'sc_id' => 3100,
                'date_enrolled' => '2022-08-31',
                'student_id' => 735,
                'class_id' => 22,
            ),
            100 => 
            array (
                'sc_id' => 3101,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1607,
                'class_id' => 193,
            ),
            101 => 
            array (
                'sc_id' => 3102,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1106,
                'class_id' => 402,
            ),
            102 => 
            array (
                'sc_id' => 3103,
                'date_enrolled' => '2022-06-18',
                'student_id' => 894,
                'class_id' => 199,
            ),
            103 => 
            array (
                'sc_id' => 3104,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1162,
                'class_id' => 276,
            ),
            104 => 
            array (
                'sc_id' => 3105,
                'date_enrolled' => '2022-08-03',
                'student_id' => 67,
                'class_id' => 108,
            ),
            105 => 
            array (
                'sc_id' => 3106,
                'date_enrolled' => '2022-08-15',
                'student_id' => 222,
                'class_id' => 177,
            ),
            106 => 
            array (
                'sc_id' => 3107,
                'date_enrolled' => '2022-08-02',
                'student_id' => 682,
                'class_id' => 62,
            ),
            107 => 
            array (
                'sc_id' => 3108,
                'date_enrolled' => '2022-06-22',
                'student_id' => 496,
                'class_id' => 99,
            ),
            108 => 
            array (
                'sc_id' => 3109,
                'date_enrolled' => '2022-08-06',
                'student_id' => 273,
                'class_id' => 232,
            ),
            109 => 
            array (
                'sc_id' => 3110,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1521,
                'class_id' => 283,
            ),
            110 => 
            array (
                'sc_id' => 3111,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1670,
                'class_id' => 271,
            ),
            111 => 
            array (
                'sc_id' => 3112,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1733,
                'class_id' => 427,
            ),
            112 => 
            array (
                'sc_id' => 3113,
                'date_enrolled' => '2022-07-24',
                'student_id' => 793,
                'class_id' => 285,
            ),
            113 => 
            array (
                'sc_id' => 3114,
                'date_enrolled' => '2022-06-12',
                'student_id' => 990,
                'class_id' => 390,
            ),
            114 => 
            array (
                'sc_id' => 3115,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1431,
                'class_id' => 403,
            ),
            115 => 
            array (
                'sc_id' => 3116,
                'date_enrolled' => '2022-08-31',
                'student_id' => 592,
                'class_id' => 184,
            ),
            116 => 
            array (
                'sc_id' => 3117,
                'date_enrolled' => '2022-06-16',
                'student_id' => 293,
                'class_id' => 199,
            ),
            117 => 
            array (
                'sc_id' => 3118,
                'date_enrolled' => '2022-07-22',
                'student_id' => 3,
                'class_id' => 100,
            ),
            118 => 
            array (
                'sc_id' => 3119,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1033,
                'class_id' => 421,
            ),
            119 => 
            array (
                'sc_id' => 3120,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1035,
                'class_id' => 255,
            ),
            120 => 
            array (
                'sc_id' => 3121,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1115,
                'class_id' => 422,
            ),
            121 => 
            array (
                'sc_id' => 3122,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1235,
                'class_id' => 29,
            ),
            122 => 
            array (
                'sc_id' => 3123,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1311,
                'class_id' => 235,
            ),
            123 => 
            array (
                'sc_id' => 3124,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1619,
                'class_id' => 309,
            ),
            124 => 
            array (
                'sc_id' => 3125,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1964,
                'class_id' => 84,
            ),
            125 => 
            array (
                'sc_id' => 3126,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1758,
                'class_id' => 424,
            ),
            126 => 
            array (
                'sc_id' => 3127,
                'date_enrolled' => '2022-06-08',
                'student_id' => 148,
                'class_id' => 463,
            ),
            127 => 
            array (
                'sc_id' => 3128,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1250,
                'class_id' => 169,
            ),
            128 => 
            array (
                'sc_id' => 3129,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1364,
                'class_id' => 404,
            ),
            129 => 
            array (
                'sc_id' => 3130,
                'date_enrolled' => '2022-07-20',
                'student_id' => 639,
                'class_id' => 192,
            ),
            130 => 
            array (
                'sc_id' => 3131,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1974,
                'class_id' => 402,
            ),
            131 => 
            array (
                'sc_id' => 3132,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1281,
                'class_id' => 492,
            ),
            132 => 
            array (
                'sc_id' => 3133,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1717,
                'class_id' => 430,
            ),
            133 => 
            array (
                'sc_id' => 3134,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1302,
                'class_id' => 167,
            ),
            134 => 
            array (
                'sc_id' => 3135,
                'date_enrolled' => '2022-06-07',
                'student_id' => 101,
                'class_id' => 467,
            ),
            135 => 
            array (
                'sc_id' => 3136,
                'date_enrolled' => '2022-07-18',
                'student_id' => 58,
                'class_id' => 307,
            ),
            136 => 
            array (
                'sc_id' => 3137,
                'date_enrolled' => '2022-07-22',
                'student_id' => 799,
                'class_id' => 374,
            ),
            137 => 
            array (
                'sc_id' => 3138,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1776,
                'class_id' => 168,
            ),
            138 => 
            array (
                'sc_id' => 3139,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1601,
                'class_id' => 286,
            ),
            139 => 
            array (
                'sc_id' => 3140,
                'date_enrolled' => '2022-08-29',
                'student_id' => 370,
                'class_id' => 133,
            ),
            140 => 
            array (
                'sc_id' => 3141,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1331,
                'class_id' => 474,
            ),
            141 => 
            array (
                'sc_id' => 3142,
                'date_enrolled' => '2022-06-30',
                'student_id' => 533,
                'class_id' => 42,
            ),
            142 => 
            array (
                'sc_id' => 3143,
                'date_enrolled' => '2022-07-05',
                'student_id' => 741,
                'class_id' => 152,
            ),
            143 => 
            array (
                'sc_id' => 3144,
                'date_enrolled' => '2022-07-20',
                'student_id' => 563,
                'class_id' => 311,
            ),
            144 => 
            array (
                'sc_id' => 3145,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1438,
                'class_id' => 187,
            ),
            145 => 
            array (
                'sc_id' => 3146,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1692,
                'class_id' => 216,
            ),
            146 => 
            array (
                'sc_id' => 3147,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1669,
                'class_id' => 261,
            ),
            147 => 
            array (
                'sc_id' => 3148,
                'date_enrolled' => '2022-06-10',
                'student_id' => 779,
                'class_id' => 57,
            ),
            148 => 
            array (
                'sc_id' => 3149,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1822,
                'class_id' => 478,
            ),
            149 => 
            array (
                'sc_id' => 3150,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1980,
                'class_id' => 395,
            ),
            150 => 
            array (
                'sc_id' => 3151,
                'date_enrolled' => '2022-07-22',
                'student_id' => 876,
                'class_id' => 213,
            ),
            151 => 
            array (
                'sc_id' => 3152,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1808,
                'class_id' => 219,
            ),
            152 => 
            array (
                'sc_id' => 3153,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1956,
                'class_id' => 25,
            ),
            153 => 
            array (
                'sc_id' => 3154,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1681,
                'class_id' => 473,
            ),
            154 => 
            array (
                'sc_id' => 3155,
                'date_enrolled' => '2022-07-24',
                'student_id' => 154,
                'class_id' => 16,
            ),
            155 => 
            array (
                'sc_id' => 3156,
                'date_enrolled' => '2022-08-14',
                'student_id' => 15,
                'class_id' => 338,
            ),
            156 => 
            array (
                'sc_id' => 3157,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1114,
                'class_id' => 138,
            ),
            157 => 
            array (
                'sc_id' => 3158,
                'date_enrolled' => '2022-07-09',
                'student_id' => 539,
                'class_id' => 199,
            ),
            158 => 
            array (
                'sc_id' => 3159,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1933,
                'class_id' => 108,
            ),
            159 => 
            array (
                'sc_id' => 3160,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1330,
                'class_id' => 194,
            ),
            160 => 
            array (
                'sc_id' => 3161,
                'date_enrolled' => '2022-08-07',
                'student_id' => 42,
                'class_id' => 391,
            ),
            161 => 
            array (
                'sc_id' => 3162,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1483,
                'class_id' => 325,
            ),
            162 => 
            array (
                'sc_id' => 3163,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1469,
                'class_id' => 116,
            ),
            163 => 
            array (
                'sc_id' => 3164,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1698,
                'class_id' => 46,
            ),
            164 => 
            array (
                'sc_id' => 3165,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1903,
                'class_id' => 361,
            ),
            165 => 
            array (
                'sc_id' => 3166,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1628,
                'class_id' => 404,
            ),
            166 => 
            array (
                'sc_id' => 3167,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1080,
                'class_id' => 124,
            ),
            167 => 
            array (
                'sc_id' => 3168,
                'date_enrolled' => '2022-07-20',
                'student_id' => 336,
                'class_id' => 413,
            ),
            168 => 
            array (
                'sc_id' => 3169,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1171,
                'class_id' => 216,
            ),
            169 => 
            array (
                'sc_id' => 3170,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1743,
                'class_id' => 440,
            ),
            170 => 
            array (
                'sc_id' => 3171,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1374,
                'class_id' => 70,
            ),
            171 => 
            array (
                'sc_id' => 3172,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1134,
                'class_id' => 205,
            ),
            172 => 
            array (
                'sc_id' => 3173,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1456,
                'class_id' => 149,
            ),
            173 => 
            array (
                'sc_id' => 3174,
                'date_enrolled' => '2022-06-02',
                'student_id' => 267,
                'class_id' => 420,
            ),
            174 => 
            array (
                'sc_id' => 3175,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1533,
                'class_id' => 427,
            ),
            175 => 
            array (
                'sc_id' => 3176,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1780,
                'class_id' => 135,
            ),
            176 => 
            array (
                'sc_id' => 3177,
                'date_enrolled' => '2022-06-27',
                'student_id' => 748,
                'class_id' => 18,
            ),
            177 => 
            array (
                'sc_id' => 3178,
                'date_enrolled' => '2022-07-04',
                'student_id' => 261,
                'class_id' => 418,
            ),
            178 => 
            array (
                'sc_id' => 3179,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1585,
                'class_id' => 336,
            ),
            179 => 
            array (
                'sc_id' => 3180,
                'date_enrolled' => '2022-08-11',
                'student_id' => 81,
                'class_id' => 247,
            ),
            180 => 
            array (
                'sc_id' => 3181,
                'date_enrolled' => '2022-07-04',
                'student_id' => 39,
                'class_id' => 395,
            ),
            181 => 
            array (
                'sc_id' => 3182,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1011,
                'class_id' => 194,
            ),
            182 => 
            array (
                'sc_id' => 3183,
                'date_enrolled' => '2022-06-09',
                'student_id' => 180,
                'class_id' => 406,
            ),
            183 => 
            array (
                'sc_id' => 3184,
                'date_enrolled' => '2022-06-10',
                'student_id' => 43,
                'class_id' => 410,
            ),
            184 => 
            array (
                'sc_id' => 3185,
                'date_enrolled' => '2022-08-09',
                'student_id' => 711,
                'class_id' => 391,
            ),
            185 => 
            array (
                'sc_id' => 3186,
                'date_enrolled' => '2022-08-01',
                'student_id' => 640,
                'class_id' => 3,
            ),
            186 => 
            array (
                'sc_id' => 3187,
                'date_enrolled' => '2022-06-19',
                'student_id' => 473,
                'class_id' => 202,
            ),
            187 => 
            array (
                'sc_id' => 3188,
                'date_enrolled' => '2022-06-05',
                'student_id' => 249,
                'class_id' => 90,
            ),
            188 => 
            array (
                'sc_id' => 3189,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1105,
                'class_id' => 28,
            ),
            189 => 
            array (
                'sc_id' => 3190,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1226,
                'class_id' => 143,
            ),
            190 => 
            array (
                'sc_id' => 3191,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1669,
                'class_id' => 464,
            ),
            191 => 
            array (
                'sc_id' => 3192,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1130,
                'class_id' => 125,
            ),
            192 => 
            array (
                'sc_id' => 3193,
                'date_enrolled' => '2022-08-27',
                'student_id' => 7,
                'class_id' => 178,
            ),
            193 => 
            array (
                'sc_id' => 3194,
                'date_enrolled' => '2022-06-01',
                'student_id' => 369,
                'class_id' => 144,
            ),
            194 => 
            array (
                'sc_id' => 3195,
                'date_enrolled' => '2022-07-14',
                'student_id' => 210,
                'class_id' => 314,
            ),
            195 => 
            array (
                'sc_id' => 3196,
                'date_enrolled' => '2022-07-22',
                'student_id' => 156,
                'class_id' => 496,
            ),
            196 => 
            array (
                'sc_id' => 3197,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1585,
                'class_id' => 409,
            ),
            197 => 
            array (
                'sc_id' => 3198,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1047,
                'class_id' => 27,
            ),
            198 => 
            array (
                'sc_id' => 3199,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1545,
                'class_id' => 60,
            ),
            199 => 
            array (
                'sc_id' => 3200,
                'date_enrolled' => '2022-08-01',
                'student_id' => 106,
                'class_id' => 213,
            ),
            200 => 
            array (
                'sc_id' => 3201,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1542,
                'class_id' => 448,
            ),
            201 => 
            array (
                'sc_id' => 3202,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1788,
                'class_id' => 126,
            ),
            202 => 
            array (
                'sc_id' => 3203,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1412,
                'class_id' => 86,
            ),
            203 => 
            array (
                'sc_id' => 3204,
                'date_enrolled' => '2022-08-26',
                'student_id' => 901,
                'class_id' => 424,
            ),
            204 => 
            array (
                'sc_id' => 3205,
                'date_enrolled' => '2022-07-10',
                'student_id' => 857,
                'class_id' => 492,
            ),
            205 => 
            array (
                'sc_id' => 3206,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1316,
                'class_id' => 158,
            ),
            206 => 
            array (
                'sc_id' => 3207,
                'date_enrolled' => '2022-06-15',
                'student_id' => 375,
                'class_id' => 268,
            ),
            207 => 
            array (
                'sc_id' => 3208,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1763,
                'class_id' => 119,
            ),
            208 => 
            array (
                'sc_id' => 3209,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1819,
                'class_id' => 127,
            ),
            209 => 
            array (
                'sc_id' => 3210,
                'date_enrolled' => '2022-06-28',
                'student_id' => 877,
                'class_id' => 245,
            ),
            210 => 
            array (
                'sc_id' => 3211,
                'date_enrolled' => '2022-06-10',
                'student_id' => 395,
                'class_id' => 471,
            ),
            211 => 
            array (
                'sc_id' => 3212,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1940,
                'class_id' => 110,
            ),
            212 => 
            array (
                'sc_id' => 3213,
                'date_enrolled' => '2022-06-02',
                'student_id' => 572,
                'class_id' => 195,
            ),
            213 => 
            array (
                'sc_id' => 3214,
                'date_enrolled' => '2022-06-17',
                'student_id' => 587,
                'class_id' => 319,
            ),
            214 => 
            array (
                'sc_id' => 3215,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1279,
                'class_id' => 88,
            ),
            215 => 
            array (
                'sc_id' => 3216,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1855,
                'class_id' => 135,
            ),
            216 => 
            array (
                'sc_id' => 3217,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1979,
                'class_id' => 437,
            ),
            217 => 
            array (
                'sc_id' => 3218,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1642,
                'class_id' => 337,
            ),
            218 => 
            array (
                'sc_id' => 3219,
                'date_enrolled' => '2022-06-23',
                'student_id' => 179,
                'class_id' => 42,
            ),
            219 => 
            array (
                'sc_id' => 3220,
                'date_enrolled' => '2022-07-30',
                'student_id' => 402,
                'class_id' => 259,
            ),
            220 => 
            array (
                'sc_id' => 3221,
                'date_enrolled' => '2022-07-02',
                'student_id' => 311,
                'class_id' => 370,
            ),
            221 => 
            array (
                'sc_id' => 3222,
                'date_enrolled' => '2022-06-02',
                'student_id' => 678,
                'class_id' => 346,
            ),
            222 => 
            array (
                'sc_id' => 3223,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1323,
                'class_id' => 490,
            ),
            223 => 
            array (
                'sc_id' => 3224,
                'date_enrolled' => '2022-07-14',
                'student_id' => 212,
                'class_id' => 335,
            ),
            224 => 
            array (
                'sc_id' => 3225,
                'date_enrolled' => '2022-07-20',
                'student_id' => 181,
                'class_id' => 145,
            ),
            225 => 
            array (
                'sc_id' => 3226,
                'date_enrolled' => '2022-07-09',
                'student_id' => 418,
                'class_id' => 226,
            ),
            226 => 
            array (
                'sc_id' => 3227,
                'date_enrolled' => '2022-07-11',
                'student_id' => 578,
                'class_id' => 344,
            ),
            227 => 
            array (
                'sc_id' => 3228,
                'date_enrolled' => '2022-08-03',
                'student_id' => 272,
                'class_id' => 175,
            ),
            228 => 
            array (
                'sc_id' => 3229,
                'date_enrolled' => '2022-06-21',
                'student_id' => 198,
                'class_id' => 320,
            ),
            229 => 
            array (
                'sc_id' => 3230,
                'date_enrolled' => '2022-07-18',
                'student_id' => 27,
                'class_id' => 269,
            ),
            230 => 
            array (
                'sc_id' => 3231,
                'date_enrolled' => '2022-07-13',
                'student_id' => 544,
                'class_id' => 416,
            ),
            231 => 
            array (
                'sc_id' => 3232,
                'date_enrolled' => '2022-08-23',
                'student_id' => 438,
                'class_id' => 213,
            ),
            232 => 
            array (
                'sc_id' => 3233,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1893,
                'class_id' => 404,
            ),
            233 => 
            array (
                'sc_id' => 3234,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1058,
                'class_id' => 25,
            ),
            234 => 
            array (
                'sc_id' => 3235,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1130,
                'class_id' => 341,
            ),
            235 => 
            array (
                'sc_id' => 3236,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1981,
                'class_id' => 176,
            ),
            236 => 
            array (
                'sc_id' => 3237,
                'date_enrolled' => '2022-08-19',
                'student_id' => 219,
                'class_id' => 294,
            ),
            237 => 
            array (
                'sc_id' => 3238,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1455,
                'class_id' => 290,
            ),
            238 => 
            array (
                'sc_id' => 3239,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1937,
                'class_id' => 405,
            ),
            239 => 
            array (
                'sc_id' => 3240,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1889,
                'class_id' => 63,
            ),
            240 => 
            array (
                'sc_id' => 3241,
                'date_enrolled' => '2022-08-04',
                'student_id' => 40,
                'class_id' => 10,
            ),
            241 => 
            array (
                'sc_id' => 3242,
                'date_enrolled' => '2022-08-19',
                'student_id' => 950,
                'class_id' => 206,
            ),
            242 => 
            array (
                'sc_id' => 3243,
                'date_enrolled' => '2022-07-29',
                'student_id' => 651,
                'class_id' => 179,
            ),
            243 => 
            array (
                'sc_id' => 3244,
                'date_enrolled' => '2022-07-29',
                'student_id' => 593,
                'class_id' => 103,
            ),
            244 => 
            array (
                'sc_id' => 3245,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1835,
                'class_id' => 333,
            ),
            245 => 
            array (
                'sc_id' => 3246,
                'date_enrolled' => '2022-06-19',
                'student_id' => 352,
                'class_id' => 42,
            ),
            246 => 
            array (
                'sc_id' => 3247,
                'date_enrolled' => '2022-08-22',
                'student_id' => 230,
                'class_id' => 159,
            ),
            247 => 
            array (
                'sc_id' => 3248,
                'date_enrolled' => '2022-07-08',
                'student_id' => 844,
                'class_id' => 387,
            ),
            248 => 
            array (
                'sc_id' => 3249,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1868,
                'class_id' => 439,
            ),
            249 => 
            array (
                'sc_id' => 3250,
                'date_enrolled' => '2022-06-18',
                'student_id' => 1593,
                'class_id' => 322,
            ),
            250 => 
            array (
                'sc_id' => 3251,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1750,
                'class_id' => 240,
            ),
            251 => 
            array (
                'sc_id' => 3252,
                'date_enrolled' => '2022-07-16',
                'student_id' => 572,
                'class_id' => 420,
            ),
            252 => 
            array (
                'sc_id' => 3253,
                'date_enrolled' => '2022-07-12',
                'student_id' => 850,
                'class_id' => 282,
            ),
            253 => 
            array (
                'sc_id' => 3254,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1868,
                'class_id' => 366,
            ),
            254 => 
            array (
                'sc_id' => 3255,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1278,
                'class_id' => 171,
            ),
            255 => 
            array (
                'sc_id' => 3256,
                'date_enrolled' => '2022-07-27',
                'student_id' => 516,
                'class_id' => 49,
            ),
            256 => 
            array (
                'sc_id' => 3257,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1733,
                'class_id' => 237,
            ),
            257 => 
            array (
                'sc_id' => 3258,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1021,
                'class_id' => 258,
            ),
            258 => 
            array (
                'sc_id' => 3259,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1151,
                'class_id' => 413,
            ),
            259 => 
            array (
                'sc_id' => 3260,
                'date_enrolled' => '2022-08-10',
                'student_id' => 747,
                'class_id' => 316,
            ),
            260 => 
            array (
                'sc_id' => 3261,
                'date_enrolled' => '2022-06-23',
                'student_id' => 220,
                'class_id' => 360,
            ),
            261 => 
            array (
                'sc_id' => 3262,
                'date_enrolled' => '2022-08-19',
                'student_id' => 760,
                'class_id' => 412,
            ),
            262 => 
            array (
                'sc_id' => 3263,
                'date_enrolled' => '2022-07-23',
                'student_id' => 275,
                'class_id' => 244,
            ),
            263 => 
            array (
                'sc_id' => 3264,
                'date_enrolled' => '2022-06-25',
                'student_id' => 864,
                'class_id' => 115,
            ),
            264 => 
            array (
                'sc_id' => 3265,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1243,
                'class_id' => 205,
            ),
            265 => 
            array (
                'sc_id' => 3266,
                'date_enrolled' => '2022-08-14',
                'student_id' => 795,
                'class_id' => 457,
            ),
            266 => 
            array (
                'sc_id' => 3267,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1213,
                'class_id' => 100,
            ),
            267 => 
            array (
                'sc_id' => 3268,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1244,
                'class_id' => 144,
            ),
            268 => 
            array (
                'sc_id' => 3269,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1008,
                'class_id' => 386,
            ),
            269 => 
            array (
                'sc_id' => 3270,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1258,
                'class_id' => 36,
            ),
            270 => 
            array (
                'sc_id' => 3271,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1589,
                'class_id' => 22,
            ),
            271 => 
            array (
                'sc_id' => 3272,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1235,
                'class_id' => 209,
            ),
            272 => 
            array (
                'sc_id' => 3273,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1123,
                'class_id' => 206,
            ),
            273 => 
            array (
                'sc_id' => 3274,
                'date_enrolled' => '2022-08-14',
                'student_id' => 390,
                'class_id' => 225,
            ),
            274 => 
            array (
                'sc_id' => 3275,
                'date_enrolled' => '2022-07-29',
                'student_id' => 213,
                'class_id' => 227,
            ),
            275 => 
            array (
                'sc_id' => 3276,
                'date_enrolled' => '2022-06-28',
                'student_id' => 384,
                'class_id' => 280,
            ),
            276 => 
            array (
                'sc_id' => 3277,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1340,
                'class_id' => 238,
            ),
            277 => 
            array (
                'sc_id' => 3278,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1413,
                'class_id' => 144,
            ),
            278 => 
            array (
                'sc_id' => 3279,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1210,
                'class_id' => 85,
            ),
            279 => 
            array (
                'sc_id' => 3280,
                'date_enrolled' => '2022-08-20',
                'student_id' => 120,
                'class_id' => 373,
            ),
            280 => 
            array (
                'sc_id' => 3281,
                'date_enrolled' => '2022-07-18',
                'student_id' => 15,
                'class_id' => 85,
            ),
            281 => 
            array (
                'sc_id' => 3282,
                'date_enrolled' => '2022-07-07',
                'student_id' => 107,
                'class_id' => 235,
            ),
            282 => 
            array (
                'sc_id' => 3283,
                'date_enrolled' => '2022-07-26',
                'student_id' => 499,
                'class_id' => 431,
            ),
            283 => 
            array (
                'sc_id' => 3284,
                'date_enrolled' => '2022-06-26',
                'student_id' => 164,
                'class_id' => 399,
            ),
            284 => 
            array (
                'sc_id' => 3285,
                'date_enrolled' => '2022-06-06',
                'student_id' => 789,
                'class_id' => 116,
            ),
            285 => 
            array (
                'sc_id' => 3286,
                'date_enrolled' => '2022-07-07',
                'student_id' => 329,
                'class_id' => 256,
            ),
            286 => 
            array (
                'sc_id' => 3287,
                'date_enrolled' => '2022-06-06',
                'student_id' => 90,
                'class_id' => 424,
            ),
            287 => 
            array (
                'sc_id' => 3288,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1830,
                'class_id' => 3,
            ),
            288 => 
            array (
                'sc_id' => 3289,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1939,
                'class_id' => 413,
            ),
            289 => 
            array (
                'sc_id' => 3290,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1490,
                'class_id' => 265,
            ),
            290 => 
            array (
                'sc_id' => 3291,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1206,
                'class_id' => 423,
            ),
            291 => 
            array (
                'sc_id' => 3292,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1751,
                'class_id' => 67,
            ),
            292 => 
            array (
                'sc_id' => 3293,
                'date_enrolled' => '2022-06-28',
                'student_id' => 495,
                'class_id' => 50,
            ),
            293 => 
            array (
                'sc_id' => 3294,
                'date_enrolled' => '2022-08-13',
                'student_id' => 294,
                'class_id' => 347,
            ),
            294 => 
            array (
                'sc_id' => 3295,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1005,
                'class_id' => 229,
            ),
            295 => 
            array (
                'sc_id' => 3296,
                'date_enrolled' => '2022-08-07',
                'student_id' => 189,
                'class_id' => 16,
            ),
            296 => 
            array (
                'sc_id' => 3297,
                'date_enrolled' => '2022-07-19',
                'student_id' => 888,
                'class_id' => 226,
            ),
            297 => 
            array (
                'sc_id' => 3298,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1521,
                'class_id' => 284,
            ),
            298 => 
            array (
                'sc_id' => 3299,
                'date_enrolled' => '2022-06-04',
                'student_id' => 742,
                'class_id' => 422,
            ),
            299 => 
            array (
                'sc_id' => 3300,
                'date_enrolled' => '2022-07-04',
                'student_id' => 282,
                'class_id' => 135,
            ),
            300 => 
            array (
                'sc_id' => 3301,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1890,
                'class_id' => 169,
            ),
            301 => 
            array (
                'sc_id' => 3302,
                'date_enrolled' => '2022-07-15',
                'student_id' => 992,
                'class_id' => 371,
            ),
            302 => 
            array (
                'sc_id' => 3303,
                'date_enrolled' => '2022-08-28',
                'student_id' => 402,
                'class_id' => 98,
            ),
            303 => 
            array (
                'sc_id' => 3304,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1406,
                'class_id' => 12,
            ),
            304 => 
            array (
                'sc_id' => 3305,
                'date_enrolled' => '2022-08-16',
                'student_id' => 268,
                'class_id' => 408,
            ),
            305 => 
            array (
                'sc_id' => 3306,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1546,
                'class_id' => 286,
            ),
            306 => 
            array (
                'sc_id' => 3307,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1915,
                'class_id' => 221,
            ),
            307 => 
            array (
                'sc_id' => 3308,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1361,
                'class_id' => 67,
            ),
            308 => 
            array (
                'sc_id' => 3309,
                'date_enrolled' => '2022-07-31',
                'student_id' => 565,
                'class_id' => 21,
            ),
            309 => 
            array (
                'sc_id' => 3310,
                'date_enrolled' => '2022-06-14',
                'student_id' => 917,
                'class_id' => 372,
            ),
            310 => 
            array (
                'sc_id' => 3311,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1562,
                'class_id' => 281,
            ),
            311 => 
            array (
                'sc_id' => 3312,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1352,
                'class_id' => 16,
            ),
            312 => 
            array (
                'sc_id' => 3313,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1103,
                'class_id' => 138,
            ),
            313 => 
            array (
                'sc_id' => 3314,
                'date_enrolled' => '2022-07-23',
                'student_id' => 769,
                'class_id' => 314,
            ),
            314 => 
            array (
                'sc_id' => 3315,
                'date_enrolled' => '2022-08-03',
                'student_id' => 7,
                'class_id' => 206,
            ),
            315 => 
            array (
                'sc_id' => 3316,
                'date_enrolled' => '2022-06-01',
                'student_id' => 389,
                'class_id' => 93,
            ),
            316 => 
            array (
                'sc_id' => 3317,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1448,
                'class_id' => 93,
            ),
            317 => 
            array (
                'sc_id' => 3318,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1050,
                'class_id' => 220,
            ),
            318 => 
            array (
                'sc_id' => 3319,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1864,
                'class_id' => 196,
            ),
            319 => 
            array (
                'sc_id' => 3320,
                'date_enrolled' => '2022-08-22',
                'student_id' => 209,
                'class_id' => 1,
            ),
            320 => 
            array (
                'sc_id' => 3321,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1381,
                'class_id' => 388,
            ),
            321 => 
            array (
                'sc_id' => 3322,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1294,
                'class_id' => 62,
            ),
            322 => 
            array (
                'sc_id' => 3323,
                'date_enrolled' => '2022-08-09',
                'student_id' => 789,
                'class_id' => 319,
            ),
            323 => 
            array (
                'sc_id' => 3324,
                'date_enrolled' => '2022-06-23',
                'student_id' => 160,
                'class_id' => 55,
            ),
            324 => 
            array (
                'sc_id' => 3325,
                'date_enrolled' => '2022-07-14',
                'student_id' => 831,
                'class_id' => 445,
            ),
            325 => 
            array (
                'sc_id' => 3326,
                'date_enrolled' => '2022-06-21',
                'student_id' => 32,
                'class_id' => 187,
            ),
            326 => 
            array (
                'sc_id' => 3327,
                'date_enrolled' => '2022-07-18',
                'student_id' => 815,
                'class_id' => 50,
            ),
            327 => 
            array (
                'sc_id' => 3328,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1769,
                'class_id' => 171,
            ),
            328 => 
            array (
                'sc_id' => 3329,
                'date_enrolled' => '2022-06-30',
                'student_id' => 680,
                'class_id' => 14,
            ),
            329 => 
            array (
                'sc_id' => 3330,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1515,
                'class_id' => 361,
            ),
            330 => 
            array (
                'sc_id' => 3331,
                'date_enrolled' => '2022-06-30',
                'student_id' => 318,
                'class_id' => 403,
            ),
            331 => 
            array (
                'sc_id' => 3332,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1148,
                'class_id' => 59,
            ),
            332 => 
            array (
                'sc_id' => 3333,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1193,
                'class_id' => 210,
            ),
            333 => 
            array (
                'sc_id' => 3334,
                'date_enrolled' => '2022-06-03',
                'student_id' => 1607,
                'class_id' => 299,
            ),
            334 => 
            array (
                'sc_id' => 3335,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1211,
                'class_id' => 396,
            ),
            335 => 
            array (
                'sc_id' => 3336,
                'date_enrolled' => '2022-08-14',
                'student_id' => 311,
                'class_id' => 181,
            ),
            336 => 
            array (
                'sc_id' => 3337,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1702,
                'class_id' => 143,
            ),
            337 => 
            array (
                'sc_id' => 3338,
                'date_enrolled' => '2022-06-27',
                'student_id' => 724,
                'class_id' => 219,
            ),
            338 => 
            array (
                'sc_id' => 3339,
                'date_enrolled' => '2022-06-20',
                'student_id' => 219,
                'class_id' => 159,
            ),
            339 => 
            array (
                'sc_id' => 3340,
                'date_enrolled' => '2022-07-14',
                'student_id' => 422,
                'class_id' => 27,
            ),
            340 => 
            array (
                'sc_id' => 3341,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1326,
                'class_id' => 442,
            ),
            341 => 
            array (
                'sc_id' => 3342,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1208,
                'class_id' => 417,
            ),
            342 => 
            array (
                'sc_id' => 3343,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1094,
                'class_id' => 460,
            ),
            343 => 
            array (
                'sc_id' => 3344,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1719,
                'class_id' => 315,
            ),
            344 => 
            array (
                'sc_id' => 3345,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1166,
                'class_id' => 38,
            ),
            345 => 
            array (
                'sc_id' => 3346,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1204,
                'class_id' => 360,
            ),
            346 => 
            array (
                'sc_id' => 3347,
                'date_enrolled' => '2022-08-18',
                'student_id' => 76,
                'class_id' => 307,
            ),
            347 => 
            array (
                'sc_id' => 3348,
                'date_enrolled' => '2022-07-16',
                'student_id' => 520,
                'class_id' => 104,
            ),
            348 => 
            array (
                'sc_id' => 3349,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1653,
                'class_id' => 349,
            ),
            349 => 
            array (
                'sc_id' => 3350,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1884,
                'class_id' => 330,
            ),
            350 => 
            array (
                'sc_id' => 3351,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1984,
                'class_id' => 258,
            ),
            351 => 
            array (
                'sc_id' => 3352,
                'date_enrolled' => '2022-07-31',
                'student_id' => 278,
                'class_id' => 164,
            ),
            352 => 
            array (
                'sc_id' => 3353,
                'date_enrolled' => '2022-08-23',
                'student_id' => 197,
                'class_id' => 407,
            ),
            353 => 
            array (
                'sc_id' => 3354,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1489,
                'class_id' => 459,
            ),
            354 => 
            array (
                'sc_id' => 3355,
                'date_enrolled' => '2022-07-26',
                'student_id' => 122,
                'class_id' => 447,
            ),
            355 => 
            array (
                'sc_id' => 3356,
                'date_enrolled' => '2022-08-23',
                'student_id' => 821,
                'class_id' => 402,
            ),
            356 => 
            array (
                'sc_id' => 3357,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1114,
                'class_id' => 98,
            ),
            357 => 
            array (
                'sc_id' => 3358,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1583,
                'class_id' => 117,
            ),
            358 => 
            array (
                'sc_id' => 3359,
                'date_enrolled' => '2022-07-26',
                'student_id' => 740,
                'class_id' => 424,
            ),
            359 => 
            array (
                'sc_id' => 3360,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1489,
                'class_id' => 140,
            ),
            360 => 
            array (
                'sc_id' => 3361,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1463,
                'class_id' => 366,
            ),
            361 => 
            array (
                'sc_id' => 3362,
                'date_enrolled' => '2022-08-12',
                'student_id' => 407,
                'class_id' => 444,
            ),
            362 => 
            array (
                'sc_id' => 3363,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1145,
                'class_id' => 426,
            ),
            363 => 
            array (
                'sc_id' => 3364,
                'date_enrolled' => '2022-07-16',
                'student_id' => 422,
                'class_id' => 426,
            ),
            364 => 
            array (
                'sc_id' => 3365,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1886,
                'class_id' => 120,
            ),
            365 => 
            array (
                'sc_id' => 3366,
                'date_enrolled' => '2022-08-02',
                'student_id' => 888,
                'class_id' => 341,
            ),
            366 => 
            array (
                'sc_id' => 3367,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1456,
                'class_id' => 262,
            ),
            367 => 
            array (
                'sc_id' => 3368,
                'date_enrolled' => '2022-08-21',
                'student_id' => 235,
                'class_id' => 408,
            ),
            368 => 
            array (
                'sc_id' => 3369,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1985,
                'class_id' => 477,
            ),
            369 => 
            array (
                'sc_id' => 3370,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1614,
                'class_id' => 122,
            ),
            370 => 
            array (
                'sc_id' => 3371,
                'date_enrolled' => '2022-06-26',
                'student_id' => 831,
                'class_id' => 115,
            ),
            371 => 
            array (
                'sc_id' => 3372,
                'date_enrolled' => '2022-06-10',
                'student_id' => 269,
                'class_id' => 404,
            ),
            372 => 
            array (
                'sc_id' => 3373,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1070,
                'class_id' => 276,
            ),
            373 => 
            array (
                'sc_id' => 3374,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1685,
                'class_id' => 310,
            ),
            374 => 
            array (
                'sc_id' => 3375,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1735,
                'class_id' => 223,
            ),
            375 => 
            array (
                'sc_id' => 3376,
                'date_enrolled' => '2022-07-02',
                'student_id' => 300,
                'class_id' => 428,
            ),
            376 => 
            array (
                'sc_id' => 3377,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1244,
                'class_id' => 429,
            ),
            377 => 
            array (
                'sc_id' => 3378,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1232,
                'class_id' => 112,
            ),
            378 => 
            array (
                'sc_id' => 3379,
                'date_enrolled' => '2022-06-15',
                'student_id' => 175,
                'class_id' => 166,
            ),
            379 => 
            array (
                'sc_id' => 3380,
                'date_enrolled' => '2022-06-06',
                'student_id' => 107,
                'class_id' => 421,
            ),
            380 => 
            array (
                'sc_id' => 3381,
                'date_enrolled' => '2022-06-23',
                'student_id' => 235,
                'class_id' => 153,
            ),
            381 => 
            array (
                'sc_id' => 3382,
                'date_enrolled' => '2022-06-01',
                'student_id' => 539,
                'class_id' => 101,
            ),
            382 => 
            array (
                'sc_id' => 3383,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1659,
                'class_id' => 330,
            ),
            383 => 
            array (
                'sc_id' => 3384,
                'date_enrolled' => '2022-07-04',
                'student_id' => 175,
                'class_id' => 158,
            ),
            384 => 
            array (
                'sc_id' => 3385,
                'date_enrolled' => '2022-06-03',
                'student_id' => 356,
                'class_id' => 138,
            ),
            385 => 
            array (
                'sc_id' => 3386,
                'date_enrolled' => '2022-08-03',
                'student_id' => 764,
                'class_id' => 322,
            ),
            386 => 
            array (
                'sc_id' => 3387,
                'date_enrolled' => '2022-07-16',
                'student_id' => 580,
                'class_id' => 349,
            ),
            387 => 
            array (
                'sc_id' => 3388,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1541,
                'class_id' => 445,
            ),
            388 => 
            array (
                'sc_id' => 3389,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1880,
                'class_id' => 51,
            ),
            389 => 
            array (
                'sc_id' => 3390,
                'date_enrolled' => '2022-07-23',
                'student_id' => 692,
                'class_id' => 312,
            ),
            390 => 
            array (
                'sc_id' => 3391,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1828,
                'class_id' => 399,
            ),
            391 => 
            array (
                'sc_id' => 3392,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1983,
                'class_id' => 372,
            ),
            392 => 
            array (
                'sc_id' => 3393,
                'date_enrolled' => '2022-06-24',
                'student_id' => 98,
                'class_id' => 201,
            ),
            393 => 
            array (
                'sc_id' => 3394,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1862,
                'class_id' => 7,
            ),
            394 => 
            array (
                'sc_id' => 3395,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1120,
                'class_id' => 98,
            ),
            395 => 
            array (
                'sc_id' => 3396,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1249,
                'class_id' => 8,
            ),
            396 => 
            array (
                'sc_id' => 3397,
                'date_enrolled' => '2022-07-13',
                'student_id' => 642,
                'class_id' => 414,
            ),
            397 => 
            array (
                'sc_id' => 3398,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1198,
                'class_id' => 137,
            ),
            398 => 
            array (
                'sc_id' => 3399,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1119,
                'class_id' => 454,
            ),
            399 => 
            array (
                'sc_id' => 3400,
                'date_enrolled' => '2022-06-26',
                'student_id' => 564,
                'class_id' => 143,
            ),
            400 => 
            array (
                'sc_id' => 3401,
                'date_enrolled' => '2022-08-06',
                'student_id' => 704,
                'class_id' => 283,
            ),
            401 => 
            array (
                'sc_id' => 3402,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1249,
                'class_id' => 197,
            ),
            402 => 
            array (
                'sc_id' => 3403,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1086,
                'class_id' => 116,
            ),
            403 => 
            array (
                'sc_id' => 3404,
                'date_enrolled' => '2022-06-08',
                'student_id' => 57,
                'class_id' => 304,
            ),
            404 => 
            array (
                'sc_id' => 3405,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1997,
                'class_id' => 243,
            ),
            405 => 
            array (
                'sc_id' => 3406,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1219,
                'class_id' => 404,
            ),
            406 => 
            array (
                'sc_id' => 3407,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1525,
                'class_id' => 444,
            ),
            407 => 
            array (
                'sc_id' => 3408,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1567,
                'class_id' => 437,
            ),
            408 => 
            array (
                'sc_id' => 3409,
                'date_enrolled' => '2022-07-29',
                'student_id' => 1426,
                'class_id' => 292,
            ),
            409 => 
            array (
                'sc_id' => 3410,
                'date_enrolled' => '2022-07-30',
                'student_id' => 931,
                'class_id' => 273,
            ),
            410 => 
            array (
                'sc_id' => 3411,
                'date_enrolled' => '2022-06-26',
                'student_id' => 987,
                'class_id' => 98,
            ),
            411 => 
            array (
                'sc_id' => 3412,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1431,
                'class_id' => 404,
            ),
            412 => 
            array (
                'sc_id' => 3413,
                'date_enrolled' => '2022-07-07',
                'student_id' => 964,
                'class_id' => 45,
            ),
            413 => 
            array (
                'sc_id' => 3414,
                'date_enrolled' => '2022-08-22',
                'student_id' => 20,
                'class_id' => 407,
            ),
            414 => 
            array (
                'sc_id' => 3415,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1681,
                'class_id' => 472,
            ),
            415 => 
            array (
                'sc_id' => 3416,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1129,
                'class_id' => 68,
            ),
            416 => 
            array (
                'sc_id' => 3417,
                'date_enrolled' => '2022-08-27',
                'student_id' => 919,
                'class_id' => 29,
            ),
            417 => 
            array (
                'sc_id' => 3418,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1572,
                'class_id' => 8,
            ),
            418 => 
            array (
                'sc_id' => 3419,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1509,
                'class_id' => 499,
            ),
            419 => 
            array (
                'sc_id' => 3420,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1803,
                'class_id' => 482,
            ),
            420 => 
            array (
                'sc_id' => 3421,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1509,
                'class_id' => 88,
            ),
            421 => 
            array (
                'sc_id' => 3422,
                'date_enrolled' => '2022-08-20',
                'student_id' => 184,
                'class_id' => 274,
            ),
            422 => 
            array (
                'sc_id' => 3423,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1789,
                'class_id' => 132,
            ),
            423 => 
            array (
                'sc_id' => 3424,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1099,
                'class_id' => 427,
            ),
            424 => 
            array (
                'sc_id' => 3425,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1233,
                'class_id' => 369,
            ),
            425 => 
            array (
                'sc_id' => 3426,
                'date_enrolled' => '2022-07-10',
                'student_id' => 51,
                'class_id' => 188,
            ),
            426 => 
            array (
                'sc_id' => 3427,
                'date_enrolled' => '2022-07-10',
                'student_id' => 772,
                'class_id' => 119,
            ),
            427 => 
            array (
                'sc_id' => 3428,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1350,
                'class_id' => 144,
            ),
            428 => 
            array (
                'sc_id' => 3429,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1519,
                'class_id' => 476,
            ),
            429 => 
            array (
                'sc_id' => 3430,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1484,
                'class_id' => 248,
            ),
            430 => 
            array (
                'sc_id' => 3431,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1831,
                'class_id' => 239,
            ),
            431 => 
            array (
                'sc_id' => 3432,
                'date_enrolled' => '2022-07-06',
                'student_id' => 418,
                'class_id' => 452,
            ),
            432 => 
            array (
                'sc_id' => 3433,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1064,
                'class_id' => 359,
            ),
            433 => 
            array (
                'sc_id' => 3434,
                'date_enrolled' => '2022-08-25',
                'student_id' => 67,
                'class_id' => 445,
            ),
            434 => 
            array (
                'sc_id' => 3435,
                'date_enrolled' => '2022-08-19',
                'student_id' => 733,
                'class_id' => 277,
            ),
            435 => 
            array (
                'sc_id' => 3436,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1336,
                'class_id' => 366,
            ),
            436 => 
            array (
                'sc_id' => 3437,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1775,
                'class_id' => 127,
            ),
            437 => 
            array (
                'sc_id' => 3438,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1244,
                'class_id' => 467,
            ),
            438 => 
            array (
                'sc_id' => 3439,
                'date_enrolled' => '2022-06-11',
                'student_id' => 470,
                'class_id' => 83,
            ),
            439 => 
            array (
                'sc_id' => 3440,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1772,
                'class_id' => 330,
            ),
            440 => 
            array (
                'sc_id' => 3441,
                'date_enrolled' => '2022-06-25',
                'student_id' => 722,
                'class_id' => 169,
            ),
            441 => 
            array (
                'sc_id' => 3442,
                'date_enrolled' => '2022-07-22',
                'student_id' => 566,
                'class_id' => 130,
            ),
            442 => 
            array (
                'sc_id' => 3443,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1596,
                'class_id' => 492,
            ),
            443 => 
            array (
                'sc_id' => 3444,
                'date_enrolled' => '2022-07-03',
                'student_id' => 719,
                'class_id' => 193,
            ),
            444 => 
            array (
                'sc_id' => 3445,
                'date_enrolled' => '2022-08-17',
                'student_id' => 819,
                'class_id' => 33,
            ),
            445 => 
            array (
                'sc_id' => 3446,
                'date_enrolled' => '2022-06-11',
                'student_id' => 310,
                'class_id' => 490,
            ),
            446 => 
            array (
                'sc_id' => 3447,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1622,
                'class_id' => 360,
            ),
            447 => 
            array (
                'sc_id' => 3448,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1196,
                'class_id' => 78,
            ),
            448 => 
            array (
                'sc_id' => 3449,
                'date_enrolled' => '2022-08-28',
                'student_id' => 1298,
                'class_id' => 361,
            ),
            449 => 
            array (
                'sc_id' => 3450,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1295,
                'class_id' => 96,
            ),
            450 => 
            array (
                'sc_id' => 3451,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1720,
                'class_id' => 386,
            ),
            451 => 
            array (
                'sc_id' => 3452,
                'date_enrolled' => '2022-08-21',
                'student_id' => 134,
                'class_id' => 361,
            ),
            452 => 
            array (
                'sc_id' => 3453,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1574,
                'class_id' => 309,
            ),
            453 => 
            array (
                'sc_id' => 3454,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1469,
                'class_id' => 31,
            ),
            454 => 
            array (
                'sc_id' => 3455,
                'date_enrolled' => '2022-08-13',
                'student_id' => 439,
                'class_id' => 428,
            ),
            455 => 
            array (
                'sc_id' => 3456,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1272,
                'class_id' => 338,
            ),
            456 => 
            array (
                'sc_id' => 3457,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1910,
                'class_id' => 413,
            ),
            457 => 
            array (
                'sc_id' => 3458,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1385,
                'class_id' => 258,
            ),
            458 => 
            array (
                'sc_id' => 3459,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1715,
                'class_id' => 44,
            ),
            459 => 
            array (
                'sc_id' => 3460,
                'date_enrolled' => '2022-06-01',
                'student_id' => 811,
                'class_id' => 94,
            ),
            460 => 
            array (
                'sc_id' => 3461,
                'date_enrolled' => '2022-08-08',
                'student_id' => 357,
                'class_id' => 49,
            ),
            461 => 
            array (
                'sc_id' => 3462,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1168,
                'class_id' => 155,
            ),
            462 => 
            array (
                'sc_id' => 3463,
                'date_enrolled' => '2022-08-10',
                'student_id' => 220,
                'class_id' => 357,
            ),
            463 => 
            array (
                'sc_id' => 3464,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1319,
                'class_id' => 285,
            ),
            464 => 
            array (
                'sc_id' => 3465,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1409,
                'class_id' => 354,
            ),
            465 => 
            array (
                'sc_id' => 3466,
                'date_enrolled' => '2022-07-16',
                'student_id' => 614,
                'class_id' => 183,
            ),
            466 => 
            array (
                'sc_id' => 3467,
                'date_enrolled' => '2022-07-08',
                'student_id' => 532,
                'class_id' => 269,
            ),
            467 => 
            array (
                'sc_id' => 3468,
                'date_enrolled' => '2022-07-24',
                'student_id' => 286,
                'class_id' => 46,
            ),
            468 => 
            array (
                'sc_id' => 3469,
                'date_enrolled' => '2022-08-09',
                'student_id' => 280,
                'class_id' => 365,
            ),
            469 => 
            array (
                'sc_id' => 3470,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1859,
                'class_id' => 142,
            ),
            470 => 
            array (
                'sc_id' => 3471,
                'date_enrolled' => '2022-07-21',
                'student_id' => 419,
                'class_id' => 328,
            ),
            471 => 
            array (
                'sc_id' => 3472,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1876,
                'class_id' => 336,
            ),
            472 => 
            array (
                'sc_id' => 3473,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1504,
                'class_id' => 60,
            ),
            473 => 
            array (
                'sc_id' => 3474,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1144,
                'class_id' => 283,
            ),
            474 => 
            array (
                'sc_id' => 3475,
                'date_enrolled' => '2022-08-11',
                'student_id' => 938,
                'class_id' => 218,
            ),
            475 => 
            array (
                'sc_id' => 3476,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1518,
                'class_id' => 114,
            ),
            476 => 
            array (
                'sc_id' => 3477,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1905,
                'class_id' => 82,
            ),
            477 => 
            array (
                'sc_id' => 3478,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1322,
                'class_id' => 350,
            ),
            478 => 
            array (
                'sc_id' => 3479,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1861,
                'class_id' => 152,
            ),
            479 => 
            array (
                'sc_id' => 3480,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1257,
                'class_id' => 166,
            ),
            480 => 
            array (
                'sc_id' => 3481,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1636,
                'class_id' => 441,
            ),
            481 => 
            array (
                'sc_id' => 3482,
                'date_enrolled' => '2022-07-10',
                'student_id' => 783,
                'class_id' => 362,
            ),
            482 => 
            array (
                'sc_id' => 3483,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1129,
                'class_id' => 418,
            ),
            483 => 
            array (
                'sc_id' => 3484,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1780,
                'class_id' => 481,
            ),
            484 => 
            array (
                'sc_id' => 3485,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1512,
                'class_id' => 151,
            ),
            485 => 
            array (
                'sc_id' => 3486,
                'date_enrolled' => '2022-08-17',
                'student_id' => 190,
                'class_id' => 327,
            ),
            486 => 
            array (
                'sc_id' => 3487,
                'date_enrolled' => '2022-07-15',
                'student_id' => 945,
                'class_id' => 81,
            ),
            487 => 
            array (
                'sc_id' => 3488,
                'date_enrolled' => '2022-07-04',
                'student_id' => 862,
                'class_id' => 349,
            ),
            488 => 
            array (
                'sc_id' => 3489,
                'date_enrolled' => '2022-06-27',
                'student_id' => 980,
                'class_id' => 302,
            ),
            489 => 
            array (
                'sc_id' => 3490,
                'date_enrolled' => '2022-06-08',
                'student_id' => 647,
                'class_id' => 431,
            ),
            490 => 
            array (
                'sc_id' => 3491,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1644,
                'class_id' => 3,
            ),
            491 => 
            array (
                'sc_id' => 3492,
                'date_enrolled' => '2022-08-03',
                'student_id' => 1132,
                'class_id' => 44,
            ),
            492 => 
            array (
                'sc_id' => 3493,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1732,
                'class_id' => 52,
            ),
            493 => 
            array (
                'sc_id' => 3494,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1612,
                'class_id' => 394,
            ),
            494 => 
            array (
                'sc_id' => 3495,
                'date_enrolled' => '2022-07-18',
                'student_id' => 265,
                'class_id' => 39,
            ),
            495 => 
            array (
                'sc_id' => 3496,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1200,
                'class_id' => 492,
            ),
            496 => 
            array (
                'sc_id' => 3497,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1709,
                'class_id' => 152,
            ),
            497 => 
            array (
                'sc_id' => 3498,
                'date_enrolled' => '2022-06-27',
                'student_id' => 6,
                'class_id' => 421,
            ),
            498 => 
            array (
                'sc_id' => 3499,
                'date_enrolled' => '2022-07-17',
                'student_id' => 1483,
                'class_id' => 125,
            ),
            499 => 
            array (
                'sc_id' => 3500,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1565,
                'class_id' => 37,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 3501,
                'date_enrolled' => '2022-08-16',
                'student_id' => 740,
                'class_id' => 63,
            ),
            1 => 
            array (
                'sc_id' => 3502,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1487,
                'class_id' => 474,
            ),
            2 => 
            array (
                'sc_id' => 3503,
                'date_enrolled' => '2022-08-23',
                'student_id' => 105,
                'class_id' => 282,
            ),
            3 => 
            array (
                'sc_id' => 3504,
                'date_enrolled' => '2022-07-30',
                'student_id' => 430,
                'class_id' => 180,
            ),
            4 => 
            array (
                'sc_id' => 3505,
                'date_enrolled' => '2022-06-05',
                'student_id' => 1835,
                'class_id' => 225,
            ),
            5 => 
            array (
                'sc_id' => 3506,
                'date_enrolled' => '2022-06-16',
                'student_id' => 378,
                'class_id' => 248,
            ),
            6 => 
            array (
                'sc_id' => 3507,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1861,
                'class_id' => 458,
            ),
            7 => 
            array (
                'sc_id' => 3508,
                'date_enrolled' => '2022-06-20',
                'student_id' => 935,
                'class_id' => 258,
            ),
            8 => 
            array (
                'sc_id' => 3509,
                'date_enrolled' => '2022-08-03',
                'student_id' => 852,
                'class_id' => 244,
            ),
            9 => 
            array (
                'sc_id' => 3510,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1778,
                'class_id' => 25,
            ),
            10 => 
            array (
                'sc_id' => 3511,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1930,
                'class_id' => 101,
            ),
            11 => 
            array (
                'sc_id' => 3512,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1676,
                'class_id' => 41,
            ),
            12 => 
            array (
                'sc_id' => 3513,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1274,
                'class_id' => 346,
            ),
            13 => 
            array (
                'sc_id' => 3514,
                'date_enrolled' => '2022-07-28',
                'student_id' => 467,
                'class_id' => 395,
            ),
            14 => 
            array (
                'sc_id' => 3515,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1624,
                'class_id' => 121,
            ),
            15 => 
            array (
                'sc_id' => 3516,
                'date_enrolled' => '2022-08-04',
                'student_id' => 909,
                'class_id' => 392,
            ),
            16 => 
            array (
                'sc_id' => 3517,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1605,
                'class_id' => 167,
            ),
            17 => 
            array (
                'sc_id' => 3518,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1356,
                'class_id' => 65,
            ),
            18 => 
            array (
                'sc_id' => 3519,
                'date_enrolled' => '2022-07-14',
                'student_id' => 640,
                'class_id' => 498,
            ),
            19 => 
            array (
                'sc_id' => 3520,
                'date_enrolled' => '2022-08-16',
                'student_id' => 504,
                'class_id' => 48,
            ),
            20 => 
            array (
                'sc_id' => 3521,
                'date_enrolled' => '2022-07-21',
                'student_id' => 940,
                'class_id' => 352,
            ),
            21 => 
            array (
                'sc_id' => 3522,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1557,
                'class_id' => 102,
            ),
            22 => 
            array (
                'sc_id' => 3523,
                'date_enrolled' => '2022-07-12',
                'student_id' => 66,
                'class_id' => 275,
            ),
            23 => 
            array (
                'sc_id' => 3524,
                'date_enrolled' => '2022-08-04',
                'student_id' => 409,
                'class_id' => 398,
            ),
            24 => 
            array (
                'sc_id' => 3525,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1548,
                'class_id' => 400,
            ),
            25 => 
            array (
                'sc_id' => 3526,
                'date_enrolled' => '2022-07-16',
                'student_id' => 851,
                'class_id' => 98,
            ),
            26 => 
            array (
                'sc_id' => 3527,
                'date_enrolled' => '2022-08-08',
                'student_id' => 187,
                'class_id' => 92,
            ),
            27 => 
            array (
                'sc_id' => 3528,
                'date_enrolled' => '2022-08-31',
                'student_id' => 527,
                'class_id' => 229,
            ),
            28 => 
            array (
                'sc_id' => 3529,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1790,
                'class_id' => 308,
            ),
            29 => 
            array (
                'sc_id' => 3530,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1402,
                'class_id' => 429,
            ),
            30 => 
            array (
                'sc_id' => 3531,
                'date_enrolled' => '2022-07-22',
                'student_id' => 41,
                'class_id' => 481,
            ),
            31 => 
            array (
                'sc_id' => 3532,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1072,
                'class_id' => 140,
            ),
            32 => 
            array (
                'sc_id' => 3533,
                'date_enrolled' => '2022-07-20',
                'student_id' => 237,
                'class_id' => 0,
            ),
            33 => 
            array (
                'sc_id' => 3534,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1641,
                'class_id' => 429,
            ),
            34 => 
            array (
                'sc_id' => 3535,
                'date_enrolled' => '2022-08-20',
                'student_id' => 38,
                'class_id' => 211,
            ),
            35 => 
            array (
                'sc_id' => 3536,
                'date_enrolled' => '2022-08-14',
                'student_id' => 420,
                'class_id' => 358,
            ),
            36 => 
            array (
                'sc_id' => 3537,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1370,
                'class_id' => 29,
            ),
            37 => 
            array (
                'sc_id' => 3538,
                'date_enrolled' => '2022-07-25',
                'student_id' => 236,
                'class_id' => 219,
            ),
            38 => 
            array (
                'sc_id' => 3539,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1528,
                'class_id' => 120,
            ),
            39 => 
            array (
                'sc_id' => 3540,
                'date_enrolled' => '2022-07-11',
                'student_id' => 539,
                'class_id' => 26,
            ),
            40 => 
            array (
                'sc_id' => 3541,
                'date_enrolled' => '2022-08-19',
                'student_id' => 906,
                'class_id' => 320,
            ),
            41 => 
            array (
                'sc_id' => 3542,
                'date_enrolled' => '2022-08-04',
                'student_id' => 594,
                'class_id' => 255,
            ),
            42 => 
            array (
                'sc_id' => 3543,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1176,
                'class_id' => 216,
            ),
            43 => 
            array (
                'sc_id' => 3544,
                'date_enrolled' => '2022-08-15',
                'student_id' => 206,
                'class_id' => 417,
            ),
            44 => 
            array (
                'sc_id' => 3545,
                'date_enrolled' => '2022-06-02',
                'student_id' => 367,
                'class_id' => 371,
            ),
            45 => 
            array (
                'sc_id' => 3546,
                'date_enrolled' => '2022-07-29',
                'student_id' => 318,
                'class_id' => 268,
            ),
            46 => 
            array (
                'sc_id' => 3547,
                'date_enrolled' => '2022-06-06',
                'student_id' => 133,
                'class_id' => 458,
            ),
            47 => 
            array (
                'sc_id' => 3548,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1864,
                'class_id' => 350,
            ),
            48 => 
            array (
                'sc_id' => 3549,
                'date_enrolled' => '2022-06-28',
                'student_id' => 582,
                'class_id' => 326,
            ),
            49 => 
            array (
                'sc_id' => 3550,
                'date_enrolled' => '2022-06-13',
                'student_id' => 318,
                'class_id' => 121,
            ),
            50 => 
            array (
                'sc_id' => 3551,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1142,
                'class_id' => 328,
            ),
            51 => 
            array (
                'sc_id' => 3552,
                'date_enrolled' => '2022-07-14',
                'student_id' => 962,
                'class_id' => 133,
            ),
            52 => 
            array (
                'sc_id' => 3553,
                'date_enrolled' => '2022-06-17',
                'student_id' => 492,
                'class_id' => 14,
            ),
            53 => 
            array (
                'sc_id' => 3554,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1931,
                'class_id' => 342,
            ),
            54 => 
            array (
                'sc_id' => 3555,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1215,
                'class_id' => 236,
            ),
            55 => 
            array (
                'sc_id' => 3556,
                'date_enrolled' => '2022-06-09',
                'student_id' => 1743,
                'class_id' => 58,
            ),
            56 => 
            array (
                'sc_id' => 3557,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1173,
                'class_id' => 242,
            ),
            57 => 
            array (
                'sc_id' => 3558,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1879,
                'class_id' => 93,
            ),
            58 => 
            array (
                'sc_id' => 3559,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1256,
                'class_id' => 217,
            ),
            59 => 
            array (
                'sc_id' => 3560,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1806,
                'class_id' => 100,
            ),
            60 => 
            array (
                'sc_id' => 3561,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1914,
                'class_id' => 312,
            ),
            61 => 
            array (
                'sc_id' => 3562,
                'date_enrolled' => '2022-08-03',
                'student_id' => 274,
                'class_id' => 181,
            ),
            62 => 
            array (
                'sc_id' => 3563,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1277,
                'class_id' => 479,
            ),
            63 => 
            array (
                'sc_id' => 3564,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1738,
                'class_id' => 339,
            ),
            64 => 
            array (
                'sc_id' => 3565,
                'date_enrolled' => '2022-08-22',
                'student_id' => 760,
                'class_id' => 99,
            ),
            65 => 
            array (
                'sc_id' => 3566,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1543,
                'class_id' => 440,
            ),
            66 => 
            array (
                'sc_id' => 3567,
                'date_enrolled' => '2022-08-24',
                'student_id' => 732,
                'class_id' => 202,
            ),
            67 => 
            array (
                'sc_id' => 3568,
                'date_enrolled' => '2022-07-31',
                'student_id' => 556,
                'class_id' => 143,
            ),
            68 => 
            array (
                'sc_id' => 3569,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1530,
                'class_id' => 424,
            ),
            69 => 
            array (
                'sc_id' => 3570,
                'date_enrolled' => '2022-07-30',
                'student_id' => 489,
                'class_id' => 136,
            ),
            70 => 
            array (
                'sc_id' => 3571,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1468,
                'class_id' => 321,
            ),
            71 => 
            array (
                'sc_id' => 3572,
                'date_enrolled' => '2022-08-31',
                'student_id' => 1985,
                'class_id' => 242,
            ),
            72 => 
            array (
                'sc_id' => 3573,
                'date_enrolled' => '2022-07-02',
                'student_id' => 811,
                'class_id' => 282,
            ),
            73 => 
            array (
                'sc_id' => 3574,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1813,
                'class_id' => 334,
            ),
            74 => 
            array (
                'sc_id' => 3575,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1722,
                'class_id' => 310,
            ),
            75 => 
            array (
                'sc_id' => 3576,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1467,
                'class_id' => 228,
            ),
            76 => 
            array (
                'sc_id' => 3577,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1009,
                'class_id' => 7,
            ),
            77 => 
            array (
                'sc_id' => 3578,
                'date_enrolled' => '2022-07-27',
                'student_id' => 525,
                'class_id' => 494,
            ),
            78 => 
            array (
                'sc_id' => 3579,
                'date_enrolled' => '2022-07-08',
                'student_id' => 1781,
                'class_id' => 367,
            ),
            79 => 
            array (
                'sc_id' => 3580,
                'date_enrolled' => '2022-08-09',
                'student_id' => 860,
                'class_id' => 177,
            ),
            80 => 
            array (
                'sc_id' => 3581,
                'date_enrolled' => '2022-07-20',
                'student_id' => 508,
                'class_id' => 357,
            ),
            81 => 
            array (
                'sc_id' => 3582,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1767,
                'class_id' => 388,
            ),
            82 => 
            array (
                'sc_id' => 3583,
                'date_enrolled' => '2022-07-11',
                'student_id' => 412,
                'class_id' => 116,
            ),
            83 => 
            array (
                'sc_id' => 3584,
                'date_enrolled' => '2022-08-01',
                'student_id' => 544,
                'class_id' => 297,
            ),
            84 => 
            array (
                'sc_id' => 3585,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1443,
                'class_id' => 317,
            ),
            85 => 
            array (
                'sc_id' => 3586,
                'date_enrolled' => '2022-07-16',
                'student_id' => 398,
                'class_id' => 177,
            ),
            86 => 
            array (
                'sc_id' => 3587,
                'date_enrolled' => '2022-08-31',
                'student_id' => 856,
                'class_id' => 97,
            ),
            87 => 
            array (
                'sc_id' => 3588,
                'date_enrolled' => '2022-07-08',
                'student_id' => 269,
                'class_id' => 162,
            ),
            88 => 
            array (
                'sc_id' => 3589,
                'date_enrolled' => '2022-07-16',
                'student_id' => 760,
                'class_id' => 125,
            ),
            89 => 
            array (
                'sc_id' => 3590,
                'date_enrolled' => '2022-08-01',
                'student_id' => 840,
                'class_id' => 329,
            ),
            90 => 
            array (
                'sc_id' => 3591,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1130,
                'class_id' => 187,
            ),
            91 => 
            array (
                'sc_id' => 3592,
                'date_enrolled' => '2022-08-19',
                'student_id' => 847,
                'class_id' => 440,
            ),
            92 => 
            array (
                'sc_id' => 3593,
                'date_enrolled' => '2022-07-22',
                'student_id' => 493,
                'class_id' => 99,
            ),
            93 => 
            array (
                'sc_id' => 3594,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1333,
                'class_id' => 162,
            ),
            94 => 
            array (
                'sc_id' => 3595,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1347,
                'class_id' => 211,
            ),
            95 => 
            array (
                'sc_id' => 3596,
                'date_enrolled' => '2022-06-29',
                'student_id' => 553,
                'class_id' => 205,
            ),
            96 => 
            array (
                'sc_id' => 3597,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1922,
                'class_id' => 31,
            ),
            97 => 
            array (
                'sc_id' => 3598,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1971,
                'class_id' => 134,
            ),
            98 => 
            array (
                'sc_id' => 3599,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1088,
                'class_id' => 313,
            ),
            99 => 
            array (
                'sc_id' => 3600,
                'date_enrolled' => '2022-06-14',
                'student_id' => 592,
                'class_id' => 378,
            ),
            100 => 
            array (
                'sc_id' => 3601,
                'date_enrolled' => '2022-06-21',
                'student_id' => 908,
                'class_id' => 301,
            ),
            101 => 
            array (
                'sc_id' => 3602,
                'date_enrolled' => '2022-08-24',
                'student_id' => 589,
                'class_id' => 470,
            ),
            102 => 
            array (
                'sc_id' => 3603,
                'date_enrolled' => '2022-07-18',
                'student_id' => 606,
                'class_id' => 177,
            ),
            103 => 
            array (
                'sc_id' => 3604,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1922,
                'class_id' => 157,
            ),
            104 => 
            array (
                'sc_id' => 3605,
                'date_enrolled' => '2022-07-25',
                'student_id' => 797,
                'class_id' => 436,
            ),
            105 => 
            array (
                'sc_id' => 3606,
                'date_enrolled' => '2022-08-28',
                'student_id' => 761,
                'class_id' => 187,
            ),
            106 => 
            array (
                'sc_id' => 3607,
                'date_enrolled' => '2022-06-18',
                'student_id' => 640,
                'class_id' => 368,
            ),
            107 => 
            array (
                'sc_id' => 3608,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1095,
                'class_id' => 249,
            ),
            108 => 
            array (
                'sc_id' => 3609,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1748,
                'class_id' => 147,
            ),
            109 => 
            array (
                'sc_id' => 3610,
                'date_enrolled' => '2022-07-07',
                'student_id' => 341,
                'class_id' => 391,
            ),
            110 => 
            array (
                'sc_id' => 3611,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1111,
                'class_id' => 13,
            ),
            111 => 
            array (
                'sc_id' => 3612,
                'date_enrolled' => '2022-08-01',
                'student_id' => 981,
                'class_id' => 372,
            ),
            112 => 
            array (
                'sc_id' => 3613,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1193,
                'class_id' => 273,
            ),
            113 => 
            array (
                'sc_id' => 3614,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1695,
                'class_id' => 461,
            ),
            114 => 
            array (
                'sc_id' => 3615,
                'date_enrolled' => '2022-08-31',
                'student_id' => 533,
                'class_id' => 439,
            ),
            115 => 
            array (
                'sc_id' => 3616,
                'date_enrolled' => '2022-07-25',
                'student_id' => 831,
                'class_id' => 475,
            ),
            116 => 
            array (
                'sc_id' => 3617,
                'date_enrolled' => '2022-07-06',
                'student_id' => 312,
                'class_id' => 484,
            ),
            117 => 
            array (
                'sc_id' => 3618,
                'date_enrolled' => '2022-08-18',
                'student_id' => 650,
                'class_id' => 209,
            ),
            118 => 
            array (
                'sc_id' => 3619,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1095,
                'class_id' => 338,
            ),
            119 => 
            array (
                'sc_id' => 3620,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1921,
                'class_id' => 428,
            ),
            120 => 
            array (
                'sc_id' => 3621,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1008,
                'class_id' => 41,
            ),
            121 => 
            array (
                'sc_id' => 3622,
                'date_enrolled' => '2022-08-14',
                'student_id' => 734,
                'class_id' => 296,
            ),
            122 => 
            array (
                'sc_id' => 3623,
                'date_enrolled' => '2022-07-15',
                'student_id' => 265,
                'class_id' => 174,
            ),
            123 => 
            array (
                'sc_id' => 3624,
                'date_enrolled' => '2022-07-10',
                'student_id' => 381,
                'class_id' => 41,
            ),
            124 => 
            array (
                'sc_id' => 3625,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1815,
                'class_id' => 320,
            ),
            125 => 
            array (
                'sc_id' => 3626,
                'date_enrolled' => '2022-06-04',
                'student_id' => 156,
                'class_id' => 327,
            ),
            126 => 
            array (
                'sc_id' => 3627,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1224,
                'class_id' => 201,
            ),
            127 => 
            array (
                'sc_id' => 3628,
                'date_enrolled' => '2022-06-27',
                'student_id' => 386,
                'class_id' => 246,
            ),
            128 => 
            array (
                'sc_id' => 3629,
                'date_enrolled' => '2022-06-25',
                'student_id' => 602,
                'class_id' => 123,
            ),
            129 => 
            array (
                'sc_id' => 3630,
                'date_enrolled' => '2022-08-07',
                'student_id' => 575,
                'class_id' => 407,
            ),
            130 => 
            array (
                'sc_id' => 3631,
                'date_enrolled' => '2022-07-16',
                'student_id' => 560,
                'class_id' => 293,
            ),
            131 => 
            array (
                'sc_id' => 3632,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1621,
                'class_id' => 347,
            ),
            132 => 
            array (
                'sc_id' => 3633,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1979,
                'class_id' => 65,
            ),
            133 => 
            array (
                'sc_id' => 3634,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1156,
                'class_id' => 208,
            ),
            134 => 
            array (
                'sc_id' => 3635,
                'date_enrolled' => '2022-07-07',
                'student_id' => 1547,
                'class_id' => 170,
            ),
            135 => 
            array (
                'sc_id' => 3636,
                'date_enrolled' => '2022-07-26',
                'student_id' => 390,
                'class_id' => 60,
            ),
            136 => 
            array (
                'sc_id' => 3637,
                'date_enrolled' => '2022-06-17',
                'student_id' => 332,
                'class_id' => 467,
            ),
            137 => 
            array (
                'sc_id' => 3638,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1428,
                'class_id' => 81,
            ),
            138 => 
            array (
                'sc_id' => 3639,
                'date_enrolled' => '2022-08-27',
                'student_id' => 67,
                'class_id' => 12,
            ),
            139 => 
            array (
                'sc_id' => 3640,
                'date_enrolled' => '2022-06-21',
                'student_id' => 327,
                'class_id' => 483,
            ),
            140 => 
            array (
                'sc_id' => 3641,
                'date_enrolled' => '2022-08-21',
                'student_id' => 995,
                'class_id' => 182,
            ),
            141 => 
            array (
                'sc_id' => 3642,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1340,
                'class_id' => 16,
            ),
            142 => 
            array (
                'sc_id' => 3643,
                'date_enrolled' => '2022-08-18',
                'student_id' => 71,
                'class_id' => 390,
            ),
            143 => 
            array (
                'sc_id' => 3644,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1377,
                'class_id' => 89,
            ),
            144 => 
            array (
                'sc_id' => 3645,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1911,
                'class_id' => 108,
            ),
            145 => 
            array (
                'sc_id' => 3646,
                'date_enrolled' => '2022-06-07',
                'student_id' => 443,
                'class_id' => 422,
            ),
            146 => 
            array (
                'sc_id' => 3647,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1097,
                'class_id' => 370,
            ),
            147 => 
            array (
                'sc_id' => 3648,
                'date_enrolled' => '2022-07-15',
                'student_id' => 1167,
                'class_id' => 55,
            ),
            148 => 
            array (
                'sc_id' => 3649,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1525,
                'class_id' => 281,
            ),
            149 => 
            array (
                'sc_id' => 3650,
                'date_enrolled' => '2022-06-21',
                'student_id' => 876,
                'class_id' => 217,
            ),
            150 => 
            array (
                'sc_id' => 3651,
                'date_enrolled' => '2022-08-15',
                'student_id' => 862,
                'class_id' => 455,
            ),
            151 => 
            array (
                'sc_id' => 3652,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1848,
                'class_id' => 296,
            ),
            152 => 
            array (
                'sc_id' => 3653,
                'date_enrolled' => '2022-06-01',
                'student_id' => 192,
                'class_id' => 19,
            ),
            153 => 
            array (
                'sc_id' => 3654,
                'date_enrolled' => '2022-07-30',
                'student_id' => 17,
                'class_id' => 129,
            ),
            154 => 
            array (
                'sc_id' => 3655,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1546,
                'class_id' => 162,
            ),
            155 => 
            array (
                'sc_id' => 3656,
                'date_enrolled' => '2022-06-24',
                'student_id' => 616,
                'class_id' => 461,
            ),
            156 => 
            array (
                'sc_id' => 3657,
                'date_enrolled' => '2022-06-03',
                'student_id' => 947,
                'class_id' => 68,
            ),
            157 => 
            array (
                'sc_id' => 3658,
                'date_enrolled' => '2022-08-20',
                'student_id' => 1899,
                'class_id' => 19,
            ),
            158 => 
            array (
                'sc_id' => 3659,
                'date_enrolled' => '2022-06-20',
                'student_id' => 746,
                'class_id' => 107,
            ),
            159 => 
            array (
                'sc_id' => 3660,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1685,
                'class_id' => 450,
            ),
            160 => 
            array (
                'sc_id' => 3661,
                'date_enrolled' => '2022-08-18',
                'student_id' => 764,
                'class_id' => 243,
            ),
            161 => 
            array (
                'sc_id' => 3662,
                'date_enrolled' => '2022-06-28',
                'student_id' => 1885,
                'class_id' => 253,
            ),
            162 => 
            array (
                'sc_id' => 3663,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1826,
                'class_id' => 327,
            ),
            163 => 
            array (
                'sc_id' => 3664,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1025,
                'class_id' => 218,
            ),
            164 => 
            array (
                'sc_id' => 3665,
                'date_enrolled' => '2022-06-25',
                'student_id' => 552,
                'class_id' => 476,
            ),
            165 => 
            array (
                'sc_id' => 3666,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1443,
                'class_id' => 450,
            ),
            166 => 
            array (
                'sc_id' => 3667,
                'date_enrolled' => '2022-08-11',
                'student_id' => 818,
                'class_id' => 1,
            ),
            167 => 
            array (
                'sc_id' => 3668,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1169,
                'class_id' => 393,
            ),
            168 => 
            array (
                'sc_id' => 3669,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1761,
                'class_id' => 63,
            ),
            169 => 
            array (
                'sc_id' => 3670,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1661,
                'class_id' => 493,
            ),
            170 => 
            array (
                'sc_id' => 3671,
                'date_enrolled' => '2022-08-14',
                'student_id' => 43,
                'class_id' => 123,
            ),
            171 => 
            array (
                'sc_id' => 3672,
                'date_enrolled' => '2022-08-14',
                'student_id' => 751,
                'class_id' => 488,
            ),
            172 => 
            array (
                'sc_id' => 3673,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1025,
                'class_id' => 489,
            ),
            173 => 
            array (
                'sc_id' => 3674,
                'date_enrolled' => '2022-07-30',
                'student_id' => 234,
                'class_id' => 316,
            ),
            174 => 
            array (
                'sc_id' => 3675,
                'date_enrolled' => '2022-06-26',
                'student_id' => 343,
                'class_id' => 425,
            ),
            175 => 
            array (
                'sc_id' => 3676,
                'date_enrolled' => '2022-08-06',
                'student_id' => 1728,
                'class_id' => 405,
            ),
            176 => 
            array (
                'sc_id' => 3677,
                'date_enrolled' => '2022-07-29',
                'student_id' => 416,
                'class_id' => 13,
            ),
            177 => 
            array (
                'sc_id' => 3678,
                'date_enrolled' => '2022-07-25',
                'student_id' => 1223,
                'class_id' => 377,
            ),
            178 => 
            array (
                'sc_id' => 3679,
                'date_enrolled' => '2022-08-29',
                'student_id' => 457,
                'class_id' => 171,
            ),
            179 => 
            array (
                'sc_id' => 3680,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1720,
                'class_id' => 179,
            ),
            180 => 
            array (
                'sc_id' => 3681,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1378,
                'class_id' => 348,
            ),
            181 => 
            array (
                'sc_id' => 3682,
                'date_enrolled' => '2022-07-30',
                'student_id' => 1167,
                'class_id' => 309,
            ),
            182 => 
            array (
                'sc_id' => 3683,
                'date_enrolled' => '2022-07-01',
                'student_id' => 756,
                'class_id' => 349,
            ),
            183 => 
            array (
                'sc_id' => 3684,
                'date_enrolled' => '2022-08-11',
                'student_id' => 636,
                'class_id' => 90,
            ),
            184 => 
            array (
                'sc_id' => 3685,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1176,
                'class_id' => 5,
            ),
            185 => 
            array (
                'sc_id' => 3686,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1650,
                'class_id' => 161,
            ),
            186 => 
            array (
                'sc_id' => 3687,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1371,
                'class_id' => 297,
            ),
            187 => 
            array (
                'sc_id' => 3688,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1823,
                'class_id' => 462,
            ),
            188 => 
            array (
                'sc_id' => 3689,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1726,
                'class_id' => 407,
            ),
            189 => 
            array (
                'sc_id' => 3690,
                'date_enrolled' => '2022-06-26',
                'student_id' => 587,
                'class_id' => 350,
            ),
            190 => 
            array (
                'sc_id' => 3691,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1465,
                'class_id' => 49,
            ),
            191 => 
            array (
                'sc_id' => 3692,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1798,
                'class_id' => 417,
            ),
            192 => 
            array (
                'sc_id' => 3693,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1844,
                'class_id' => 240,
            ),
            193 => 
            array (
                'sc_id' => 3694,
                'date_enrolled' => '2022-06-07',
                'student_id' => 870,
                'class_id' => 161,
            ),
            194 => 
            array (
                'sc_id' => 3695,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1781,
                'class_id' => 272,
            ),
            195 => 
            array (
                'sc_id' => 3696,
                'date_enrolled' => '2022-08-30',
                'student_id' => 105,
                'class_id' => 341,
            ),
            196 => 
            array (
                'sc_id' => 3697,
                'date_enrolled' => '2022-07-02',
                'student_id' => 67,
                'class_id' => 335,
            ),
            197 => 
            array (
                'sc_id' => 3698,
                'date_enrolled' => '2022-06-15',
                'student_id' => 180,
                'class_id' => 143,
            ),
            198 => 
            array (
                'sc_id' => 3699,
                'date_enrolled' => '2022-07-30',
                'student_id' => 840,
                'class_id' => 351,
            ),
            199 => 
            array (
                'sc_id' => 3700,
                'date_enrolled' => '2022-07-29',
                'student_id' => 67,
                'class_id' => 61,
            ),
            200 => 
            array (
                'sc_id' => 3701,
                'date_enrolled' => '2022-07-17',
                'student_id' => 305,
                'class_id' => 129,
            ),
            201 => 
            array (
                'sc_id' => 3702,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1094,
                'class_id' => 230,
            ),
            202 => 
            array (
                'sc_id' => 3703,
                'date_enrolled' => '2022-08-02',
                'student_id' => 962,
                'class_id' => 237,
            ),
            203 => 
            array (
                'sc_id' => 3704,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1916,
                'class_id' => 435,
            ),
            204 => 
            array (
                'sc_id' => 3705,
                'date_enrolled' => '2022-07-10',
                'student_id' => 105,
                'class_id' => 336,
            ),
            205 => 
            array (
                'sc_id' => 3706,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1757,
                'class_id' => 161,
            ),
            206 => 
            array (
                'sc_id' => 3707,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1740,
                'class_id' => 426,
            ),
            207 => 
            array (
                'sc_id' => 3708,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1967,
                'class_id' => 52,
            ),
            208 => 
            array (
                'sc_id' => 3709,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1320,
                'class_id' => 135,
            ),
            209 => 
            array (
                'sc_id' => 3710,
                'date_enrolled' => '2022-06-17',
                'student_id' => 1456,
                'class_id' => 392,
            ),
            210 => 
            array (
                'sc_id' => 3711,
                'date_enrolled' => '2022-06-16',
                'student_id' => 533,
                'class_id' => 302,
            ),
            211 => 
            array (
                'sc_id' => 3712,
                'date_enrolled' => '2022-06-16',
                'student_id' => 781,
                'class_id' => 29,
            ),
            212 => 
            array (
                'sc_id' => 3713,
                'date_enrolled' => '2022-08-29',
                'student_id' => 957,
                'class_id' => 347,
            ),
            213 => 
            array (
                'sc_id' => 3714,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1798,
                'class_id' => 188,
            ),
            214 => 
            array (
                'sc_id' => 3715,
                'date_enrolled' => '2022-08-24',
                'student_id' => 243,
                'class_id' => 41,
            ),
            215 => 
            array (
                'sc_id' => 3716,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1399,
                'class_id' => 455,
            ),
            216 => 
            array (
                'sc_id' => 3717,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1096,
                'class_id' => 422,
            ),
            217 => 
            array (
                'sc_id' => 3718,
                'date_enrolled' => '2022-07-31',
                'student_id' => 829,
                'class_id' => 224,
            ),
            218 => 
            array (
                'sc_id' => 3719,
                'date_enrolled' => '2022-06-01',
                'student_id' => 935,
                'class_id' => 208,
            ),
            219 => 
            array (
                'sc_id' => 3720,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1983,
                'class_id' => 337,
            ),
            220 => 
            array (
                'sc_id' => 3721,
                'date_enrolled' => '2022-06-18',
                'student_id' => 923,
                'class_id' => 115,
            ),
            221 => 
            array (
                'sc_id' => 3722,
                'date_enrolled' => '2022-07-05',
                'student_id' => 1621,
                'class_id' => 427,
            ),
            222 => 
            array (
                'sc_id' => 3723,
                'date_enrolled' => '2022-06-03',
                'student_id' => 903,
                'class_id' => 445,
            ),
            223 => 
            array (
                'sc_id' => 3724,
                'date_enrolled' => '2022-07-12',
                'student_id' => 1113,
                'class_id' => 499,
            ),
            224 => 
            array (
                'sc_id' => 3725,
                'date_enrolled' => '2022-08-01',
                'student_id' => 23,
                'class_id' => 28,
            ),
            225 => 
            array (
                'sc_id' => 3726,
                'date_enrolled' => '2022-08-11',
                'student_id' => 155,
                'class_id' => 245,
            ),
            226 => 
            array (
                'sc_id' => 3727,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1806,
                'class_id' => 333,
            ),
            227 => 
            array (
                'sc_id' => 3728,
                'date_enrolled' => '2022-07-02',
                'student_id' => 630,
                'class_id' => 37,
            ),
            228 => 
            array (
                'sc_id' => 3729,
                'date_enrolled' => '2022-07-19',
                'student_id' => 404,
                'class_id' => 230,
            ),
            229 => 
            array (
                'sc_id' => 3730,
                'date_enrolled' => '2022-08-01',
                'student_id' => 337,
                'class_id' => 29,
            ),
            230 => 
            array (
                'sc_id' => 3731,
                'date_enrolled' => '2022-07-08',
                'student_id' => 502,
                'class_id' => 370,
            ),
            231 => 
            array (
                'sc_id' => 3732,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1029,
                'class_id' => 363,
            ),
            232 => 
            array (
                'sc_id' => 3733,
                'date_enrolled' => '2022-07-06',
                'student_id' => 814,
                'class_id' => 453,
            ),
            233 => 
            array (
                'sc_id' => 3734,
                'date_enrolled' => '2022-08-25',
                'student_id' => 288,
                'class_id' => 64,
            ),
            234 => 
            array (
                'sc_id' => 3735,
                'date_enrolled' => '2022-06-25',
                'student_id' => 424,
                'class_id' => 12,
            ),
            235 => 
            array (
                'sc_id' => 3736,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1068,
                'class_id' => 476,
            ),
            236 => 
            array (
                'sc_id' => 3737,
                'date_enrolled' => '2022-08-16',
                'student_id' => 724,
                'class_id' => 142,
            ),
            237 => 
            array (
                'sc_id' => 3738,
                'date_enrolled' => '2022-07-22',
                'student_id' => 1084,
                'class_id' => 238,
            ),
            238 => 
            array (
                'sc_id' => 3739,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1603,
                'class_id' => 382,
            ),
            239 => 
            array (
                'sc_id' => 3740,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1761,
                'class_id' => 165,
            ),
            240 => 
            array (
                'sc_id' => 3741,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1869,
                'class_id' => 345,
            ),
            241 => 
            array (
                'sc_id' => 3742,
                'date_enrolled' => '2022-06-05',
                'student_id' => 550,
                'class_id' => 398,
            ),
            242 => 
            array (
                'sc_id' => 3743,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1637,
                'class_id' => 184,
            ),
            243 => 
            array (
                'sc_id' => 3744,
                'date_enrolled' => '2022-08-02',
                'student_id' => 572,
                'class_id' => 433,
            ),
            244 => 
            array (
                'sc_id' => 3745,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1775,
                'class_id' => 6,
            ),
            245 => 
            array (
                'sc_id' => 3746,
                'date_enrolled' => '2022-07-21',
                'student_id' => 293,
                'class_id' => 215,
            ),
            246 => 
            array (
                'sc_id' => 3747,
                'date_enrolled' => '2022-06-07',
                'student_id' => 1390,
                'class_id' => 130,
            ),
            247 => 
            array (
                'sc_id' => 3748,
                'date_enrolled' => '2022-08-17',
                'student_id' => 40,
                'class_id' => 88,
            ),
            248 => 
            array (
                'sc_id' => 3749,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1733,
                'class_id' => 476,
            ),
            249 => 
            array (
                'sc_id' => 3750,
                'date_enrolled' => '2022-08-30',
                'student_id' => 109,
                'class_id' => 255,
            ),
            250 => 
            array (
                'sc_id' => 3751,
                'date_enrolled' => '2022-06-19',
                'student_id' => 38,
                'class_id' => 399,
            ),
            251 => 
            array (
                'sc_id' => 3752,
                'date_enrolled' => '2022-08-22',
                'student_id' => 764,
                'class_id' => 315,
            ),
            252 => 
            array (
                'sc_id' => 3753,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1081,
                'class_id' => 5,
            ),
            253 => 
            array (
                'sc_id' => 3754,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1560,
                'class_id' => 265,
            ),
            254 => 
            array (
                'sc_id' => 3755,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1391,
                'class_id' => 112,
            ),
            255 => 
            array (
                'sc_id' => 3756,
                'date_enrolled' => '2022-08-28',
                'student_id' => 962,
                'class_id' => 211,
            ),
            256 => 
            array (
                'sc_id' => 3757,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1493,
                'class_id' => 161,
            ),
            257 => 
            array (
                'sc_id' => 3758,
                'date_enrolled' => '2022-07-20',
                'student_id' => 1953,
                'class_id' => 325,
            ),
            258 => 
            array (
                'sc_id' => 3759,
                'date_enrolled' => '2022-06-22',
                'student_id' => 1671,
                'class_id' => 220,
            ),
            259 => 
            array (
                'sc_id' => 3760,
                'date_enrolled' => '2022-06-24',
                'student_id' => 1327,
                'class_id' => 481,
            ),
            260 => 
            array (
                'sc_id' => 3761,
                'date_enrolled' => '2022-06-05',
                'student_id' => 710,
                'class_id' => 335,
            ),
            261 => 
            array (
                'sc_id' => 3762,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1125,
                'class_id' => 266,
            ),
            262 => 
            array (
                'sc_id' => 3763,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1743,
                'class_id' => 299,
            ),
            263 => 
            array (
                'sc_id' => 3764,
                'date_enrolled' => '2022-08-07',
                'student_id' => 156,
                'class_id' => 384,
            ),
            264 => 
            array (
                'sc_id' => 3765,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1347,
                'class_id' => 453,
            ),
            265 => 
            array (
                'sc_id' => 3766,
                'date_enrolled' => '2022-08-14',
                'student_id' => 1353,
                'class_id' => 484,
            ),
            266 => 
            array (
                'sc_id' => 3767,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1680,
                'class_id' => 112,
            ),
            267 => 
            array (
                'sc_id' => 3768,
                'date_enrolled' => '2022-07-21',
                'student_id' => 866,
                'class_id' => 365,
            ),
            268 => 
            array (
                'sc_id' => 3769,
                'date_enrolled' => '2022-06-25',
                'student_id' => 1199,
                'class_id' => 94,
            ),
            269 => 
            array (
                'sc_id' => 3770,
                'date_enrolled' => '2022-06-08',
                'student_id' => 853,
                'class_id' => 168,
            ),
            270 => 
            array (
                'sc_id' => 3771,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1941,
                'class_id' => 180,
            ),
            271 => 
            array (
                'sc_id' => 3772,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1760,
                'class_id' => 339,
            ),
            272 => 
            array (
                'sc_id' => 3773,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1553,
                'class_id' => 211,
            ),
            273 => 
            array (
                'sc_id' => 3774,
                'date_enrolled' => '2022-08-20',
                'student_id' => 946,
                'class_id' => 11,
            ),
            274 => 
            array (
                'sc_id' => 3775,
                'date_enrolled' => '2022-08-12',
                'student_id' => 348,
                'class_id' => 37,
            ),
            275 => 
            array (
                'sc_id' => 3776,
                'date_enrolled' => '2022-08-17',
                'student_id' => 916,
                'class_id' => 267,
            ),
            276 => 
            array (
                'sc_id' => 3777,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1829,
                'class_id' => 245,
            ),
            277 => 
            array (
                'sc_id' => 3778,
                'date_enrolled' => '2022-07-16',
                'student_id' => 13,
                'class_id' => 240,
            ),
            278 => 
            array (
                'sc_id' => 3779,
                'date_enrolled' => '2022-06-21',
                'student_id' => 324,
                'class_id' => 169,
            ),
            279 => 
            array (
                'sc_id' => 3780,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1294,
                'class_id' => 255,
            ),
            280 => 
            array (
                'sc_id' => 3781,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1289,
                'class_id' => 0,
            ),
            281 => 
            array (
                'sc_id' => 3782,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1264,
                'class_id' => 183,
            ),
            282 => 
            array (
                'sc_id' => 3783,
                'date_enrolled' => '2022-06-02',
                'student_id' => 585,
                'class_id' => 171,
            ),
            283 => 
            array (
                'sc_id' => 3784,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1303,
                'class_id' => 162,
            ),
            284 => 
            array (
                'sc_id' => 3785,
                'date_enrolled' => '2022-07-06',
                'student_id' => 323,
                'class_id' => 89,
            ),
            285 => 
            array (
                'sc_id' => 3786,
                'date_enrolled' => '2022-08-24',
                'student_id' => 579,
                'class_id' => 277,
            ),
            286 => 
            array (
                'sc_id' => 3787,
                'date_enrolled' => '2022-07-12',
                'student_id' => 986,
                'class_id' => 291,
            ),
            287 => 
            array (
                'sc_id' => 3788,
                'date_enrolled' => '2022-07-03',
                'student_id' => 747,
                'class_id' => 430,
            ),
            288 => 
            array (
                'sc_id' => 3789,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1374,
                'class_id' => 3,
            ),
            289 => 
            array (
                'sc_id' => 3790,
                'date_enrolled' => '2022-08-28',
                'student_id' => 431,
                'class_id' => 135,
            ),
            290 => 
            array (
                'sc_id' => 3791,
                'date_enrolled' => '2022-06-20',
                'student_id' => 888,
                'class_id' => 231,
            ),
            291 => 
            array (
                'sc_id' => 3792,
                'date_enrolled' => '2022-07-09',
                'student_id' => 386,
                'class_id' => 204,
            ),
            292 => 
            array (
                'sc_id' => 3793,
                'date_enrolled' => '2022-07-27',
                'student_id' => 117,
                'class_id' => 90,
            ),
            293 => 
            array (
                'sc_id' => 3794,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1515,
                'class_id' => 148,
            ),
            294 => 
            array (
                'sc_id' => 3795,
                'date_enrolled' => '2022-07-10',
                'student_id' => 581,
                'class_id' => 483,
            ),
            295 => 
            array (
                'sc_id' => 3796,
                'date_enrolled' => '2022-08-27',
                'student_id' => 1529,
                'class_id' => 160,
            ),
            296 => 
            array (
                'sc_id' => 3797,
                'date_enrolled' => '2022-06-27',
                'student_id' => 1740,
                'class_id' => 157,
            ),
            297 => 
            array (
                'sc_id' => 3798,
                'date_enrolled' => '2022-08-13',
                'student_id' => 1099,
                'class_id' => 395,
            ),
            298 => 
            array (
                'sc_id' => 3799,
                'date_enrolled' => '2022-08-30',
                'student_id' => 1438,
                'class_id' => 277,
            ),
            299 => 
            array (
                'sc_id' => 3800,
                'date_enrolled' => '2022-06-13',
                'student_id' => 400,
                'class_id' => 9,
            ),
            300 => 
            array (
                'sc_id' => 3801,
                'date_enrolled' => '2022-07-08',
                'student_id' => 775,
                'class_id' => 285,
            ),
            301 => 
            array (
                'sc_id' => 3802,
                'date_enrolled' => '2022-08-17',
                'student_id' => 672,
                'class_id' => 256,
            ),
            302 => 
            array (
                'sc_id' => 3803,
                'date_enrolled' => '2022-07-13',
                'student_id' => 1445,
                'class_id' => 313,
            ),
            303 => 
            array (
                'sc_id' => 3804,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1642,
                'class_id' => 415,
            ),
            304 => 
            array (
                'sc_id' => 3805,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1038,
                'class_id' => 20,
            ),
            305 => 
            array (
                'sc_id' => 3806,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1371,
                'class_id' => 199,
            ),
            306 => 
            array (
                'sc_id' => 3807,
                'date_enrolled' => '2022-06-16',
                'student_id' => 1592,
                'class_id' => 33,
            ),
            307 => 
            array (
                'sc_id' => 3808,
                'date_enrolled' => '2022-07-11',
                'student_id' => 1905,
                'class_id' => 221,
            ),
            308 => 
            array (
                'sc_id' => 3809,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1333,
                'class_id' => 61,
            ),
            309 => 
            array (
                'sc_id' => 3810,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1223,
                'class_id' => 120,
            ),
            310 => 
            array (
                'sc_id' => 3811,
                'date_enrolled' => '2022-07-06',
                'student_id' => 444,
                'class_id' => 133,
            ),
            311 => 
            array (
                'sc_id' => 3812,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1380,
                'class_id' => 79,
            ),
            312 => 
            array (
                'sc_id' => 3813,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1632,
                'class_id' => 465,
            ),
            313 => 
            array (
                'sc_id' => 3814,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1197,
                'class_id' => 341,
            ),
            314 => 
            array (
                'sc_id' => 3815,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1014,
                'class_id' => 467,
            ),
            315 => 
            array (
                'sc_id' => 3816,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1996,
                'class_id' => 36,
            ),
            316 => 
            array (
                'sc_id' => 3817,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1099,
                'class_id' => 468,
            ),
            317 => 
            array (
                'sc_id' => 3818,
                'date_enrolled' => '2022-08-01',
                'student_id' => 1774,
                'class_id' => 136,
            ),
            318 => 
            array (
                'sc_id' => 3819,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1431,
                'class_id' => 435,
            ),
            319 => 
            array (
                'sc_id' => 3820,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1247,
                'class_id' => 68,
            ),
            320 => 
            array (
                'sc_id' => 3821,
                'date_enrolled' => '2022-08-16',
                'student_id' => 561,
                'class_id' => 65,
            ),
            321 => 
            array (
                'sc_id' => 3822,
                'date_enrolled' => '2022-08-09',
                'student_id' => 1662,
                'class_id' => 48,
            ),
            322 => 
            array (
                'sc_id' => 3823,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1966,
                'class_id' => 410,
            ),
            323 => 
            array (
                'sc_id' => 3824,
                'date_enrolled' => '2022-07-17',
                'student_id' => 140,
                'class_id' => 382,
            ),
            324 => 
            array (
                'sc_id' => 3825,
                'date_enrolled' => '2022-06-29',
                'student_id' => 11,
                'class_id' => 141,
            ),
            325 => 
            array (
                'sc_id' => 3826,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1131,
                'class_id' => 127,
            ),
            326 => 
            array (
                'sc_id' => 3827,
                'date_enrolled' => '2022-07-31',
                'student_id' => 204,
                'class_id' => 112,
            ),
            327 => 
            array (
                'sc_id' => 3828,
                'date_enrolled' => '2022-06-26',
                'student_id' => 1994,
                'class_id' => 252,
            ),
            328 => 
            array (
                'sc_id' => 3829,
                'date_enrolled' => '2022-07-15',
                'student_id' => 677,
                'class_id' => 434,
            ),
            329 => 
            array (
                'sc_id' => 3830,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1491,
                'class_id' => 355,
            ),
            330 => 
            array (
                'sc_id' => 3831,
                'date_enrolled' => '2022-08-02',
                'student_id' => 1466,
                'class_id' => 419,
            ),
            331 => 
            array (
                'sc_id' => 3832,
                'date_enrolled' => '2022-07-01',
                'student_id' => 707,
                'class_id' => 108,
            ),
            332 => 
            array (
                'sc_id' => 3833,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1471,
                'class_id' => 107,
            ),
            333 => 
            array (
                'sc_id' => 3834,
                'date_enrolled' => '2022-07-15',
                'student_id' => 128,
                'class_id' => 312,
            ),
            334 => 
            array (
                'sc_id' => 3835,
                'date_enrolled' => '2022-08-04',
                'student_id' => 1630,
                'class_id' => 114,
            ),
            335 => 
            array (
                'sc_id' => 3836,
                'date_enrolled' => '2022-07-30',
                'student_id' => 120,
                'class_id' => 467,
            ),
            336 => 
            array (
                'sc_id' => 3837,
                'date_enrolled' => '2022-07-06',
                'student_id' => 1214,
                'class_id' => 94,
            ),
            337 => 
            array (
                'sc_id' => 3838,
                'date_enrolled' => '2022-06-19',
                'student_id' => 1136,
                'class_id' => 57,
            ),
            338 => 
            array (
                'sc_id' => 3839,
                'date_enrolled' => '2022-08-13',
                'student_id' => 238,
                'class_id' => 64,
            ),
            339 => 
            array (
                'sc_id' => 3840,
                'date_enrolled' => '2022-08-12',
                'student_id' => 737,
                'class_id' => 57,
            ),
            340 => 
            array (
                'sc_id' => 3841,
                'date_enrolled' => '2022-07-08',
                'student_id' => 350,
                'class_id' => 439,
            ),
            341 => 
            array (
                'sc_id' => 3842,
                'date_enrolled' => '2022-08-31',
                'student_id' => 729,
                'class_id' => 300,
            ),
            342 => 
            array (
                'sc_id' => 3843,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1938,
                'class_id' => 440,
            ),
            343 => 
            array (
                'sc_id' => 3844,
                'date_enrolled' => '2022-08-23',
                'student_id' => 1062,
                'class_id' => 457,
            ),
            344 => 
            array (
                'sc_id' => 3845,
                'date_enrolled' => '2022-07-12',
                'student_id' => 650,
                'class_id' => 108,
            ),
            345 => 
            array (
                'sc_id' => 3846,
                'date_enrolled' => '2022-06-30',
                'student_id' => 1916,
                'class_id' => 157,
            ),
            346 => 
            array (
                'sc_id' => 3847,
                'date_enrolled' => '2022-06-07',
                'student_id' => 184,
                'class_id' => 229,
            ),
            347 => 
            array (
                'sc_id' => 3848,
                'date_enrolled' => '2022-08-30',
                'student_id' => 232,
                'class_id' => 448,
            ),
            348 => 
            array (
                'sc_id' => 3849,
                'date_enrolled' => '2022-06-14',
                'student_id' => 533,
                'class_id' => 491,
            ),
            349 => 
            array (
                'sc_id' => 3850,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1784,
                'class_id' => 231,
            ),
            350 => 
            array (
                'sc_id' => 3851,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1265,
                'class_id' => 333,
            ),
            351 => 
            array (
                'sc_id' => 3852,
                'date_enrolled' => '2022-08-10',
                'student_id' => 17,
                'class_id' => 492,
            ),
            352 => 
            array (
                'sc_id' => 3853,
                'date_enrolled' => '2022-06-22',
                'student_id' => 630,
                'class_id' => 302,
            ),
            353 => 
            array (
                'sc_id' => 3854,
                'date_enrolled' => '2022-08-18',
                'student_id' => 1045,
                'class_id' => 479,
            ),
            354 => 
            array (
                'sc_id' => 3855,
                'date_enrolled' => '2022-07-03',
                'student_id' => 1575,
                'class_id' => 196,
            ),
            355 => 
            array (
                'sc_id' => 3856,
                'date_enrolled' => '2022-07-21',
                'student_id' => 1503,
                'class_id' => 463,
            ),
            356 => 
            array (
                'sc_id' => 3857,
                'date_enrolled' => '2022-07-19',
                'student_id' => 1763,
                'class_id' => 233,
            ),
            357 => 
            array (
                'sc_id' => 3858,
                'date_enrolled' => '2022-06-14',
                'student_id' => 1943,
                'class_id' => 479,
            ),
            358 => 
            array (
                'sc_id' => 3859,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1819,
                'class_id' => 334,
            ),
            359 => 
            array (
                'sc_id' => 3860,
                'date_enrolled' => '2022-07-28',
                'student_id' => 51,
                'class_id' => 118,
            ),
            360 => 
            array (
                'sc_id' => 3861,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1833,
                'class_id' => 116,
            ),
            361 => 
            array (
                'sc_id' => 3862,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1143,
                'class_id' => 140,
            ),
            362 => 
            array (
                'sc_id' => 3863,
                'date_enrolled' => '2022-07-05',
                'student_id' => 790,
                'class_id' => 276,
            ),
            363 => 
            array (
                'sc_id' => 3864,
                'date_enrolled' => '2022-07-29',
                'student_id' => 466,
                'class_id' => 208,
            ),
            364 => 
            array (
                'sc_id' => 3865,
                'date_enrolled' => '2022-07-16',
                'student_id' => 514,
                'class_id' => 199,
            ),
            365 => 
            array (
                'sc_id' => 3866,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1950,
                'class_id' => 79,
            ),
            366 => 
            array (
                'sc_id' => 3867,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1455,
                'class_id' => 454,
            ),
            367 => 
            array (
                'sc_id' => 3868,
                'date_enrolled' => '2022-07-28',
                'student_id' => 1412,
                'class_id' => 400,
            ),
            368 => 
            array (
                'sc_id' => 3869,
                'date_enrolled' => '2022-07-29',
                'student_id' => 763,
                'class_id' => 179,
            ),
            369 => 
            array (
                'sc_id' => 3870,
                'date_enrolled' => '2022-08-07',
                'student_id' => 1219,
                'class_id' => 191,
            ),
            370 => 
            array (
                'sc_id' => 3871,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1159,
                'class_id' => 39,
            ),
            371 => 
            array (
                'sc_id' => 3872,
                'date_enrolled' => '2022-08-10',
                'student_id' => 1747,
                'class_id' => 355,
            ),
            372 => 
            array (
                'sc_id' => 3873,
                'date_enrolled' => '2022-06-21',
                'student_id' => 1777,
                'class_id' => 260,
            ),
            373 => 
            array (
                'sc_id' => 3874,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1443,
                'class_id' => 334,
            ),
            374 => 
            array (
                'sc_id' => 3875,
                'date_enrolled' => '2022-08-22',
                'student_id' => 150,
                'class_id' => 136,
            ),
            375 => 
            array (
                'sc_id' => 3876,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1925,
                'class_id' => 311,
            ),
            376 => 
            array (
                'sc_id' => 3877,
                'date_enrolled' => '2022-06-10',
                'student_id' => 44,
                'class_id' => 165,
            ),
            377 => 
            array (
                'sc_id' => 3878,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1415,
                'class_id' => 497,
            ),
            378 => 
            array (
                'sc_id' => 3879,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1627,
                'class_id' => 287,
            ),
            379 => 
            array (
                'sc_id' => 3880,
                'date_enrolled' => '2022-08-22',
                'student_id' => 1335,
                'class_id' => 363,
            ),
            380 => 
            array (
                'sc_id' => 3881,
                'date_enrolled' => '2022-07-01',
                'student_id' => 1285,
                'class_id' => 188,
            ),
            381 => 
            array (
                'sc_id' => 3882,
                'date_enrolled' => '2022-06-26',
                'student_id' => 976,
                'class_id' => 477,
            ),
            382 => 
            array (
                'sc_id' => 3883,
                'date_enrolled' => '2022-07-17',
                'student_id' => 486,
                'class_id' => 95,
            ),
            383 => 
            array (
                'sc_id' => 3884,
                'date_enrolled' => '2022-07-06',
                'student_id' => 23,
                'class_id' => 107,
            ),
            384 => 
            array (
                'sc_id' => 3885,
                'date_enrolled' => '2022-06-03',
                'student_id' => 650,
                'class_id' => 497,
            ),
            385 => 
            array (
                'sc_id' => 3886,
                'date_enrolled' => '2022-08-10',
                'student_id' => 695,
                'class_id' => 38,
            ),
            386 => 
            array (
                'sc_id' => 3887,
                'date_enrolled' => '2022-08-11',
                'student_id' => 827,
                'class_id' => 89,
            ),
            387 => 
            array (
                'sc_id' => 3888,
                'date_enrolled' => '2022-08-27',
                'student_id' => 101,
                'class_id' => 118,
            ),
            388 => 
            array (
                'sc_id' => 3889,
                'date_enrolled' => '2022-06-07',
                'student_id' => 557,
                'class_id' => 491,
            ),
            389 => 
            array (
                'sc_id' => 3890,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1633,
                'class_id' => 433,
            ),
            390 => 
            array (
                'sc_id' => 3891,
                'date_enrolled' => '2022-07-01',
                'student_id' => 325,
                'class_id' => 477,
            ),
            391 => 
            array (
                'sc_id' => 3892,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1094,
                'class_id' => 280,
            ),
            392 => 
            array (
                'sc_id' => 3893,
                'date_enrolled' => '2022-06-27',
                'student_id' => 496,
                'class_id' => 425,
            ),
            393 => 
            array (
                'sc_id' => 3894,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1700,
                'class_id' => 414,
            ),
            394 => 
            array (
                'sc_id' => 3895,
                'date_enrolled' => '2022-06-16',
                'student_id' => 81,
                'class_id' => 220,
            ),
            395 => 
            array (
                'sc_id' => 3896,
                'date_enrolled' => '2022-08-25',
                'student_id' => 1292,
                'class_id' => 5,
            ),
            396 => 
            array (
                'sc_id' => 3897,
                'date_enrolled' => '2022-08-29',
                'student_id' => 1141,
                'class_id' => 203,
            ),
            397 => 
            array (
                'sc_id' => 3898,
                'date_enrolled' => '2022-07-14',
                'student_id' => 1888,
                'class_id' => 413,
            ),
            398 => 
            array (
                'sc_id' => 3899,
                'date_enrolled' => '2022-07-24',
                'student_id' => 142,
                'class_id' => 249,
            ),
            399 => 
            array (
                'sc_id' => 3900,
                'date_enrolled' => '2022-08-22',
                'student_id' => 965,
                'class_id' => 359,
            ),
            400 => 
            array (
                'sc_id' => 3901,
                'date_enrolled' => '2022-08-06',
                'student_id' => 529,
                'class_id' => 229,
            ),
            401 => 
            array (
                'sc_id' => 3902,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1151,
                'class_id' => 307,
            ),
            402 => 
            array (
                'sc_id' => 3903,
                'date_enrolled' => '2022-06-22',
                'student_id' => 665,
                'class_id' => 425,
            ),
            403 => 
            array (
                'sc_id' => 3904,
                'date_enrolled' => '2022-07-27',
                'student_id' => 1944,
                'class_id' => 224,
            ),
            404 => 
            array (
                'sc_id' => 3905,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1476,
                'class_id' => 324,
            ),
            405 => 
            array (
                'sc_id' => 3906,
                'date_enrolled' => '2022-07-14',
                'student_id' => 339,
                'class_id' => 344,
            ),
            406 => 
            array (
                'sc_id' => 3907,
                'date_enrolled' => '2022-08-26',
                'student_id' => 1069,
                'class_id' => 475,
            ),
            407 => 
            array (
                'sc_id' => 3908,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1658,
                'class_id' => 471,
            ),
            408 => 
            array (
                'sc_id' => 3909,
                'date_enrolled' => '2022-07-11',
                'student_id' => 465,
                'class_id' => 133,
            ),
            409 => 
            array (
                'sc_id' => 3910,
                'date_enrolled' => '2022-08-24',
                'student_id' => 1067,
                'class_id' => 131,
            ),
            410 => 
            array (
                'sc_id' => 3911,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1050,
                'class_id' => 172,
            ),
            411 => 
            array (
                'sc_id' => 3912,
                'date_enrolled' => '2022-08-13',
                'student_id' => 373,
                'class_id' => 3,
            ),
            412 => 
            array (
                'sc_id' => 3913,
                'date_enrolled' => '2022-06-06',
                'student_id' => 1142,
                'class_id' => 349,
            ),
            413 => 
            array (
                'sc_id' => 3914,
                'date_enrolled' => '2022-08-17',
                'student_id' => 626,
                'class_id' => 166,
            ),
            414 => 
            array (
                'sc_id' => 3915,
                'date_enrolled' => '2022-07-10',
                'student_id' => 1938,
                'class_id' => 78,
            ),
            415 => 
            array (
                'sc_id' => 3916,
                'date_enrolled' => '2022-07-29',
                'student_id' => 416,
                'class_id' => 378,
            ),
            416 => 
            array (
                'sc_id' => 3917,
                'date_enrolled' => '2022-06-11',
                'student_id' => 1556,
                'class_id' => 149,
            ),
            417 => 
            array (
                'sc_id' => 3918,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1882,
                'class_id' => 154,
            ),
            418 => 
            array (
                'sc_id' => 3919,
                'date_enrolled' => '2022-07-27',
                'student_id' => 566,
                'class_id' => 16,
            ),
            419 => 
            array (
                'sc_id' => 3920,
                'date_enrolled' => '2022-06-29',
                'student_id' => 1713,
                'class_id' => 227,
            ),
            420 => 
            array (
                'sc_id' => 3921,
                'date_enrolled' => '2022-07-23',
                'student_id' => 827,
                'class_id' => 73,
            ),
            421 => 
            array (
                'sc_id' => 3922,
                'date_enrolled' => '2022-08-04',
                'student_id' => 353,
                'class_id' => 45,
            ),
            422 => 
            array (
                'sc_id' => 3923,
                'date_enrolled' => '2022-06-15',
                'student_id' => 1015,
                'class_id' => 497,
            ),
            423 => 
            array (
                'sc_id' => 3924,
                'date_enrolled' => '2022-08-19',
                'student_id' => 264,
                'class_id' => 55,
            ),
            424 => 
            array (
                'sc_id' => 3925,
                'date_enrolled' => '2022-07-29',
                'student_id' => 752,
                'class_id' => 116,
            ),
            425 => 
            array (
                'sc_id' => 3926,
                'date_enrolled' => '2022-08-31',
                'student_id' => 610,
                'class_id' => 370,
            ),
            426 => 
            array (
                'sc_id' => 3927,
                'date_enrolled' => '2022-07-16',
                'student_id' => 958,
                'class_id' => 472,
            ),
            427 => 
            array (
                'sc_id' => 3928,
                'date_enrolled' => '2022-08-02',
                'student_id' => 507,
                'class_id' => 433,
            ),
            428 => 
            array (
                'sc_id' => 3929,
                'date_enrolled' => '2022-08-11',
                'student_id' => 1957,
                'class_id' => 134,
            ),
            429 => 
            array (
                'sc_id' => 3930,
                'date_enrolled' => '2022-08-12',
                'student_id' => 1253,
                'class_id' => 432,
            ),
            430 => 
            array (
                'sc_id' => 3931,
                'date_enrolled' => '2022-08-15',
                'student_id' => 1628,
                'class_id' => 309,
            ),
            431 => 
            array (
                'sc_id' => 3932,
                'date_enrolled' => '2022-06-11',
                'student_id' => 91,
                'class_id' => 71,
            ),
            432 => 
            array (
                'sc_id' => 3933,
                'date_enrolled' => '2022-06-27',
                'student_id' => 173,
                'class_id' => 25,
            ),
            433 => 
            array (
                'sc_id' => 3934,
                'date_enrolled' => '2022-07-16',
                'student_id' => 1649,
                'class_id' => 25,
            ),
            434 => 
            array (
                'sc_id' => 3935,
                'date_enrolled' => '2022-07-06',
                'student_id' => 563,
                'class_id' => 242,
            ),
            435 => 
            array (
                'sc_id' => 3936,
                'date_enrolled' => '2022-06-26',
                'student_id' => 342,
                'class_id' => 395,
            ),
            436 => 
            array (
                'sc_id' => 3937,
                'date_enrolled' => '2022-07-06',
                'student_id' => 2,
                'class_id' => 446,
            ),
            437 => 
            array (
                'sc_id' => 3938,
                'date_enrolled' => '2022-07-08',
                'student_id' => 324,
                'class_id' => 446,
            ),
            438 => 
            array (
                'sc_id' => 3939,
                'date_enrolled' => '2022-06-02',
                'student_id' => 968,
                'class_id' => 148,
            ),
            439 => 
            array (
                'sc_id' => 3940,
                'date_enrolled' => '2022-07-23',
                'student_id' => 562,
                'class_id' => 375,
            ),
            440 => 
            array (
                'sc_id' => 3941,
                'date_enrolled' => '2022-08-08',
                'student_id' => 1765,
                'class_id' => 306,
            ),
            441 => 
            array (
                'sc_id' => 3942,
                'date_enrolled' => '2022-07-23',
                'student_id' => 1288,
                'class_id' => 73,
            ),
            442 => 
            array (
                'sc_id' => 3943,
                'date_enrolled' => '2022-08-21',
                'student_id' => 1674,
                'class_id' => 109,
            ),
            443 => 
            array (
                'sc_id' => 3944,
                'date_enrolled' => '2022-08-17',
                'student_id' => 1775,
                'class_id' => 127,
            ),
            444 => 
            array (
                'sc_id' => 3945,
                'date_enrolled' => '2022-07-23',
                'student_id' => 955,
                'class_id' => 41,
            ),
            445 => 
            array (
                'sc_id' => 3946,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1234,
                'class_id' => 119,
            ),
            446 => 
            array (
                'sc_id' => 3947,
                'date_enrolled' => '2022-06-09',
                'student_id' => 240,
                'class_id' => 295,
            ),
            447 => 
            array (
                'sc_id' => 3948,
                'date_enrolled' => '2022-08-21',
                'student_id' => 33,
                'class_id' => 128,
            ),
            448 => 
            array (
                'sc_id' => 3949,
                'date_enrolled' => '2022-07-29',
                'student_id' => 667,
                'class_id' => 374,
            ),
            449 => 
            array (
                'sc_id' => 3950,
                'date_enrolled' => '2022-07-12',
                'student_id' => 470,
                'class_id' => 402,
            ),
            450 => 
            array (
                'sc_id' => 3951,
                'date_enrolled' => '2022-08-02',
                'student_id' => 545,
                'class_id' => 59,
            ),
            451 => 
            array (
                'sc_id' => 3952,
                'date_enrolled' => '2022-08-14',
                'student_id' => 245,
                'class_id' => 231,
            ),
            452 => 
            array (
                'sc_id' => 3953,
                'date_enrolled' => '2022-06-06',
                'student_id' => 626,
                'class_id' => 477,
            ),
            453 => 
            array (
                'sc_id' => 3954,
                'date_enrolled' => '2022-08-01',
                'student_id' => 655,
                'class_id' => 23,
            ),
            454 => 
            array (
                'sc_id' => 3955,
                'date_enrolled' => '2022-08-07',
                'student_id' => 300,
                'class_id' => 151,
            ),
            455 => 
            array (
                'sc_id' => 3956,
                'date_enrolled' => '2022-08-07',
                'student_id' => 979,
                'class_id' => 371,
            ),
            456 => 
            array (
                'sc_id' => 3957,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1262,
                'class_id' => 400,
            ),
            457 => 
            array (
                'sc_id' => 3958,
                'date_enrolled' => '2022-08-30',
                'student_id' => 359,
                'class_id' => 378,
            ),
            458 => 
            array (
                'sc_id' => 3959,
                'date_enrolled' => '2022-06-14',
                'student_id' => 45,
                'class_id' => 417,
            ),
            459 => 
            array (
                'sc_id' => 3960,
                'date_enrolled' => '2022-06-08',
                'student_id' => 1526,
                'class_id' => 367,
            ),
            460 => 
            array (
                'sc_id' => 3961,
                'date_enrolled' => '2022-08-04',
                'student_id' => 360,
                'class_id' => 120,
            ),
            461 => 
            array (
                'sc_id' => 3962,
                'date_enrolled' => '2022-07-10',
                'student_id' => 68,
                'class_id' => 273,
            ),
            462 => 
            array (
                'sc_id' => 3963,
                'date_enrolled' => '2022-06-12',
                'student_id' => 1258,
                'class_id' => 305,
            ),
            463 => 
            array (
                'sc_id' => 3964,
                'date_enrolled' => '2022-06-19',
                'student_id' => 798,
                'class_id' => 160,
            ),
            464 => 
            array (
                'sc_id' => 3965,
                'date_enrolled' => '2022-06-20',
                'student_id' => 1225,
                'class_id' => 249,
            ),
            465 => 
            array (
                'sc_id' => 3966,
                'date_enrolled' => '2022-08-16',
                'student_id' => 1936,
                'class_id' => 441,
            ),
            466 => 
            array (
                'sc_id' => 3967,
                'date_enrolled' => '2022-06-01',
                'student_id' => 132,
                'class_id' => 183,
            ),
            467 => 
            array (
                'sc_id' => 3968,
                'date_enrolled' => '2022-07-31',
                'student_id' => 1635,
                'class_id' => 455,
            ),
            468 => 
            array (
                'sc_id' => 3969,
                'date_enrolled' => '2022-07-18',
                'student_id' => 1411,
                'class_id' => 173,
            ),
            469 => 
            array (
                'sc_id' => 3970,
                'date_enrolled' => '2022-08-20',
                'student_id' => 738,
                'class_id' => 384,
            ),
            470 => 
            array (
                'sc_id' => 3971,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1653,
                'class_id' => 419,
            ),
            471 => 
            array (
                'sc_id' => 3972,
                'date_enrolled' => '2022-06-10',
                'student_id' => 212,
                'class_id' => 256,
            ),
            472 => 
            array (
                'sc_id' => 3973,
                'date_enrolled' => '2022-06-10',
                'student_id' => 635,
                'class_id' => 432,
            ),
            473 => 
            array (
                'sc_id' => 3974,
                'date_enrolled' => '2022-06-01',
                'student_id' => 1709,
                'class_id' => 177,
            ),
            474 => 
            array (
                'sc_id' => 3975,
                'date_enrolled' => '2022-08-05',
                'student_id' => 1133,
                'class_id' => 387,
            ),
            475 => 
            array (
                'sc_id' => 3976,
                'date_enrolled' => '2022-08-24',
                'student_id' => 995,
                'class_id' => 124,
            ),
            476 => 
            array (
                'sc_id' => 3977,
                'date_enrolled' => '2022-06-06',
                'student_id' => 7,
                'class_id' => 75,
            ),
            477 => 
            array (
                'sc_id' => 3978,
                'date_enrolled' => '2022-07-10',
                'student_id' => 929,
                'class_id' => 209,
            ),
            478 => 
            array (
                'sc_id' => 3979,
                'date_enrolled' => '2022-07-24',
                'student_id' => 1141,
                'class_id' => 381,
            ),
            479 => 
            array (
                'sc_id' => 3980,
                'date_enrolled' => '2022-07-09',
                'student_id' => 1802,
                'class_id' => 472,
            ),
            480 => 
            array (
                'sc_id' => 3981,
                'date_enrolled' => '2022-08-18',
                'student_id' => 83,
                'class_id' => 160,
            ),
            481 => 
            array (
                'sc_id' => 3982,
                'date_enrolled' => '2022-08-19',
                'student_id' => 1437,
                'class_id' => 19,
            ),
            482 => 
            array (
                'sc_id' => 3983,
                'date_enrolled' => '2022-07-22',
                'student_id' => 441,
                'class_id' => 490,
            ),
            483 => 
            array (
                'sc_id' => 3984,
                'date_enrolled' => '2022-07-04',
                'student_id' => 1483,
                'class_id' => 318,
            ),
            484 => 
            array (
                'sc_id' => 3985,
                'date_enrolled' => '2022-07-20',
                'student_id' => 630,
                'class_id' => 366,
            ),
            485 => 
            array (
                'sc_id' => 3986,
                'date_enrolled' => '2022-07-28',
                'student_id' => 549,
                'class_id' => 15,
            ),
            486 => 
            array (
                'sc_id' => 3987,
                'date_enrolled' => '2022-06-04',
                'student_id' => 1924,
                'class_id' => 185,
            ),
            487 => 
            array (
                'sc_id' => 3988,
                'date_enrolled' => '2022-06-03',
                'student_id' => 935,
                'class_id' => 339,
            ),
            488 => 
            array (
                'sc_id' => 3989,
                'date_enrolled' => '2022-08-18',
                'student_id' => 285,
                'class_id' => 17,
            ),
            489 => 
            array (
                'sc_id' => 3990,
                'date_enrolled' => '2022-06-23',
                'student_id' => 1437,
                'class_id' => 269,
            ),
            490 => 
            array (
                'sc_id' => 3991,
                'date_enrolled' => '2022-08-17',
                'student_id' => 996,
                'class_id' => 486,
            ),
            491 => 
            array (
                'sc_id' => 3992,
                'date_enrolled' => '2022-08-12',
                'student_id' => 642,
                'class_id' => 246,
            ),
            492 => 
            array (
                'sc_id' => 3993,
                'date_enrolled' => '2022-07-26',
                'student_id' => 1941,
                'class_id' => 293,
            ),
            493 => 
            array (
                'sc_id' => 3994,
                'date_enrolled' => '2022-08-06',
                'student_id' => 26,
                'class_id' => 215,
            ),
            494 => 
            array (
                'sc_id' => 3995,
                'date_enrolled' => '2022-06-02',
                'student_id' => 1005,
                'class_id' => 410,
            ),
            495 => 
            array (
                'sc_id' => 3996,
                'date_enrolled' => '2022-06-10',
                'student_id' => 1375,
                'class_id' => 9,
            ),
            496 => 
            array (
                'sc_id' => 3997,
                'date_enrolled' => '2022-07-02',
                'student_id' => 1198,
                'class_id' => 313,
            ),
            497 => 
            array (
                'sc_id' => 3998,
                'date_enrolled' => '2022-06-10',
                'student_id' => 116,
                'class_id' => 340,
            ),
            498 => 
            array (
                'sc_id' => 3999,
                'date_enrolled' => '2022-06-13',
                'student_id' => 1363,
                'class_id' => 388,
            ),
            499 => 
            array (
                'sc_id' => 4000,
                'date_enrolled' => '2022-06-21',
                'student_id' => 223,
                'class_id' => 194,
            ),
        ));
        \DB::table('students_classes')->insert(array (
            0 => 
            array (
                'sc_id' => 4001,
                'date_enrolled' => '2022-06-21',
                'student_id' => 223,
                'class_id' => 194,
            ),
            1 => 
            array (
                'sc_id' => 4002,
                'date_enrolled' => '2022-06-21',
                'student_id' => 223,
                'class_id' => 194,
            ),
            2 => 
            array (
                'sc_id' => 4003,
                'date_enrolled' => '2022-11-11',
                'student_id' => 333,
                'class_id' => 40,
            ),
            3 => 
            array (
                'sc_id' => 4004,
                'date_enrolled' => '2022-11-11',
                'student_id' => 333,
                'class_id' => 40,
            ),
            4 => 
            array (
                'sc_id' => 4005,
                'date_enrolled' => '2022-11-11',
                'student_id' => 1,
                'class_id' => 40,
            ),
            5 => 
            array (
                'sc_id' => 4006,
                'date_enrolled' => '2022-11-11',
                'student_id' => 345,
                'class_id' => 278,
            ),
        ));
        
        
    }
}