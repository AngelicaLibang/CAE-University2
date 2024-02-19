<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'subject_id' => 0,
                'name' => 'Object-oriented Programming',
                'department' => 'Computer',
            ),
            1 => 
            array (
                'subject_id' => 1,
                'name' => 'English for Purposive Communication',
                'department' => 'MAPEH',
            ),
            2 => 
            array (
                'subject_id' => 2,
                'name' => 'Applied Multivariate Analysis',
                'department' => 'Mathematics',
            ),
            3 => 
            array (
                'subject_id' => 3,
                'name' => 'Environmental Biology and Ecology',
                'department' => 'Science',
            ),
            4 => 
            array (
                'subject_id' => 4,
                'name' => 'Architecture and Organization',
                'department' => 'Computer',
            ),
            5 => 
            array (
                'subject_id' => 5,
                'name' => 'Elements and Principle of Design Lec',
                'department' => 'MAPEH',
            ),
            6 => 
            array (
                'subject_id' => 6,
                'name' => 'Teaching & Assessment of Literature Studies',
                'department' => 'English',
            ),
            7 => 
            array (
                'subject_id' => 7,
                'name' => 'World History 2',
                'department' => 'History',
            ),
            8 => 
            array (
                'subject_id' => 8,
                'name' => 'Programs: Health',
                'department' => 'MAPEH',
            ),
            9 => 
            array (
                'subject_id' => 9,
                'name' => 'Information Assurance and Security',
                'department' => 'Computer',
            ),
            10 => 
            array (
                'subject_id' => 10,
                'name' => 'Social Issues and Professional Practice',
                'department' => 'Computer',
            ),
            11 => 
            array (
                'subject_id' => 11,
                'name' => 'Philippine History 1',
                'department' => 'History',
            ),
            12 => 
            array (
                'subject_id' => 12,
                'name' => 'Introduction to Counseling and Psychotherapy',
                'department' => 'Social Science',
            ),
            13 => 
            array (
                'subject_id' => 13,
                'name' => 'Seminar in Psychology',
                'department' => 'Social Science',
            ),
            14 => 
            array (
                'subject_id' => 14,
                'name' => 'Typography and Layout 2 Lec',
                'department' => 'MAPEH',
            ),
            15 => 
            array (
                'subject_id' => 15,
                'name' => 'Research in Psychology',
                'department' => 'Social Science',
            ),
            16 => 
            array (
                'subject_id' => 16,
                'name' => 'Fundamentals of Biology',
                'department' => 'Mathematics',
            ),
            17 => 
            array (
                'subject_id' => 17,
                'name' => 'Mathematical Modeling',
                'department' => 'Mathematics',
            ),
            18 => 
            array (
                'subject_id' => 18,
                'name' => 'Time-Series Analysis',
                'department' => 'Mathematics',
            ),
            19 => 
            array (
                'subject_id' => 19,
                'name' => 'Teaching & Assessment of the Macroskills',
                'department' => 'English',
            ),
            20 => 
            array (
                'subject_id' => 20,
                'name' => 'Understanding the Self',
                'department' => 'MAPEH',
            ),
            21 => 
            array (
                'subject_id' => 21,
                'name' => 'Our Christian Faith and Lasallian Identity',
                'department' => 'MAPEH',
            ),
            22 => 
            array (
                'subject_id' => 22,
                'name' => 'Graph Theory and Applications',
                'department' => 'Mathematics',
            ),
            23 => 
            array (
                'subject_id' => 23,
                'name' => 'Local/International Internship in Psychology',
                'department' => 'Social Science',
            ),
            24 => 
            array (
                'subject_id' => 24,
                'name' => 'Numerical Analysis',
                'department' => 'Mathematics',
            ),
            25 => 
            array (
                'subject_id' => 25,
                'name' => 'Social Psychology',
                'department' => 'Social Science',
            ),
            26 => 
            array (
                'subject_id' => 26,
                'name' => 'Arnis and Disarming Tactics',
                'department' => 'Filipino',
            ),
            27 => 
            array (
                'subject_id' => 27,
                'name' => 'Fundamentals of Programming',
                'department' => 'Computer',
            ),
            28 => 
            array (
                'subject_id' => 28,
                'name' => 'Intermediate Programming',
                'department' => 'Computer',
            ),
            29 => 
            array (
                'subject_id' => 29,
                'name' => 'Computational Science',
                'department' => 'Computer',
            ),
            30 => 
            array (
                'subject_id' => 30,
                'name' => 'Color Theory Lec',
                'department' => 'MAPEH',
            ),
            31 => 
            array (
                'subject_id' => 31,
                'name' => 'Rizal Works',
                'department' => 'History',
            ),
            32 => 
            array (
                'subject_id' => 32,
                'name' => 'Operating Systems',
                'department' => 'Computer',
            ),
            33 => 
            array (
                'subject_id' => 33,
                'name' => 'Survey of Afro-Asian Literature',
                'department' => 'English',
            ),
            34 => 
            array (
                'subject_id' => 34,
                'name' => 'Practicum',
                'department' => 'Computer',
            ),
            35 => 
            array (
                'subject_id' => 35,
                'name' => 'Military Science 11',
                'department' => 'Filipino',
            ),
            36 => 
            array (
                'subject_id' => 36,
                'name' => 'Physical Fitness & Self-testing Activity',
                'department' => 'MAPEH',
            ),
            37 => 
            array (
                'subject_id' => 37,
                'name' => 'Contemporary Popular & Emergent Literature ',
                'department' => 'English',
            ),
            38 => 
            array (
                'subject_id' => 38,
                'name' => 'General Physiology',
                'department' => 'Science',
            ),
            39 => 
            array (
                'subject_id' => 39,
                'name' => 'Mechanics and Thermodynamics with Lab',
                'department' => 'Mathematics',
            ),
            40 => 
            array (
                'subject_id' => 40,
                'name' => 'Evolutionary Biology and Comparative Anatomy',
                'department' => 'Science',
            ),
            41 => 
            array (
                'subject_id' => 41,
                'name' => 'World History 3',
                'department' => 'History',
            ),
            42 => 
            array (
                'subject_id' => 42,
                'name' => 'Fundamentals of Zoology',
                'department' => 'Science',
            ),
            43 => 
            array (
                'subject_id' => 43,
                'name' => 'Industrial/Organizational Psychology',
                'department' => 'Social Science',
            ),
            44 => 
            array (
                'subject_id' => 44,
                'name' => 'Introduction to DLSU-D',
                'department' => 'MAPEH',
            ),
            45 => 
            array (
                'subject_id' => 45,
                'name' => 'Linear Algebra',
                'department' => 'Mathematics',
            ),
            46 => 
            array (
                'subject_id' => 46,
                'name' => 'Psychological Testing at Work',
                'department' => 'Social Science',
            ),
            47 => 
            array (
                'subject_id' => 47,
                'name' => 'Language Programs & Policies in Multilingual Societies',
                'department' => 'English',
            ),
            48 => 
            array (
                'subject_id' => 48,
                'name' => 'D- Foreign Language',
                'department' => 'Social Science',
            ),
            49 => 
            array (
                'subject_id' => 49,
                'name' => 'Teaching & Assessment of Grammar',
                'department' => 'English',
            ),
            50 => 
            array (
                'subject_id' => 50,
            'name' => 'Art History 1 (Survey of Western Art)',
                'department' => 'MAPEH',
            ),
            51 => 
            array (
                'subject_id' => 51,
                'name' => 'Philippine History 3',
                'department' => 'History',
            ),
            52 => 
            array (
                'subject_id' => 52,
                'name' => 'Mga Babasahin hinggil sa Kasaysayan ng Pilipinas',
                'department' => 'Filipino',
            ),
            53 => 
            array (
                'subject_id' => 53,
                'name' => 'Programming Languages',
                'department' => 'Computer',
            ),
            54 => 
            array (
                'subject_id' => 54,
                'name' => 'Military Science 12',
                'department' => 'Filipino',
            ),
            55 => 
            array (
                'subject_id' => 55,
                'name' => 'Applications Development and Emerging Technologies',
                'department' => 'Computer',
            ),
            56 => 
            array (
                'subject_id' => 56,
                'name' => 'Statistical Theory',
                'department' => 'Mathematics',
            ),
            57 => 
            array (
                'subject_id' => 57,
                'name' => 'Fundamentals of Accounting',
                'department' => 'Mathematics',
            ),
            58 => 
            array (
                'subject_id' => 58,
                'name' => 'Introduction to Psychology',
                'department' => 'Social Science',
            ),
            59 => 
            array (
                'subject_id' => 59,
                'name' => 'Experimental Psychology',
                'department' => 'Social Science',
            ),
            60 => 
            array (
                'subject_id' => 60,
                'name' => 'Algorithms and Complexity',
                'department' => 'Computer',
            ),
            61 => 
            array (
                'subject_id' => 61,
                'name' => 'Automata Theory and Formal Languages',
                'department' => 'Computer',
            ),
            62 => 
            array (
                'subject_id' => 62,
                'name' => 'Survey of Philippine Literature In English',
                'department' => 'English',
            ),
            63 => 
            array (
                'subject_id' => 63,
                'name' => 'Data Mining',
                'department' => 'Mathematics',
            ),
            64 => 
            array (
                'subject_id' => 64,
                'name' => 'Intelligent Systems',
                'department' => 'Computer',
            ),
            65 => 
            array (
                'subject_id' => 65,
                'name' => 'Philippine History 2',
                'department' => 'History',
            ),
            66 => 
            array (
                'subject_id' => 66,
                'name' => 'Introduction to Computing',
                'department' => 'Computer',
            ),
            67 => 
            array (
                'subject_id' => 67,
                'name' => 'Fundamentals of Programming',
                'department' => 'Mathematics',
            ),
            68 => 
            array (
                'subject_id' => 68,
                'name' => 'General Microbiology',
                'department' => 'Science',
            ),
            69 => 
            array (
                'subject_id' => 69,
            'name' => 'Understanding the Self (General Psychology)',
                'department' => 'Filipino',
            ),
            70 => 
            array (
                'subject_id' => 70,
                'name' => 'Mga Babasahin hinggil sa Kasaysayan ng Pilipinas',
                'department' => 'MAPEH',
            ),
            71 => 
            array (
                'subject_id' => 71,
                'name' => 'Typography and Layout 1 Lab',
                'department' => 'MAPEH',
            ),
            72 => 
            array (
                'subject_id' => 72,
                'name' => 'Math in the Modern World',
                'department' => 'MAPEH',
            ),
            73 => 
            array (
                'subject_id' => 73,
                'name' => 'Biomolecules',
                'department' => 'Science',
            ),
            74 => 
            array (
                'subject_id' => 74,
                'name' => 'Neurological Basis of Human Behavior',
                'department' => 'Social Science',
            ),
            75 => 
            array (
                'subject_id' => 75,
                'name' => 'Graphics and Visual Computing',
                'department' => 'Computer',
            ),
            76 => 
            array (
                'subject_id' => 76,
                'name' => 'Special Topics in Mathematics',
                'department' => 'Mathematics',
            ),
            77 => 
            array (
                'subject_id' => 77,
                'name' => 'Christian Discipleship in the Modern World',
                'department' => 'Filipino',
            ),
            78 => 
            array (
                'subject_id' => 78,
                'name' => 'Psychological Assessment',
                'department' => 'Social Science',
            ),
            79 => 
            array (
                'subject_id' => 79,
                'name' => 'Drawing 1 Lec',
                'department' => 'MAPEH',
            ),
            80 => 
            array (
                'subject_id' => 80,
                'name' => 'Cell and Molecular Biology',
                'department' => 'Science',
            ),
            81 => 
            array (
                'subject_id' => 81,
                'name' => 'Introduction to Biophysics',
                'department' => 'Science',
            ),
            82 => 
            array (
                'subject_id' => 82,
            'name' => 'Law Enforcement Organization and Administration (Inter-Agency Approach)',
                'department' => 'Filipino',
            ),
            83 => 
            array (
                'subject_id' => 83,
                'name' => 'Developmental Biology',
                'department' => 'Science',
            ),
            84 => 
            array (
                'subject_id' => 84,
                'name' => 'Career Path Towards Success',
                'department' => 'MAPEH',
            ),
            85 => 
            array (
                'subject_id' => 85,
                'name' => 'Discrete Structures',
                'department' => 'Computer',
            ),
            86 => 
            array (
                'subject_id' => 86,
                'name' => 'Our Christian Faith and Lasallian Identity',
                'department' => 'Filipino',
            ),
            87 => 
            array (
                'subject_id' => 87,
                'name' => 'Color Theory Lab',
                'department' => 'MAPEH',
            ),
            88 => 
            array (
                'subject_id' => 88,
                'name' => 'Developmental Psychology',
                'department' => 'Social Science',
            ),
            89 => 
            array (
                'subject_id' => 89,
                'name' => 'Differential Equation',
                'department' => 'Mathematics',
            ),
            90 => 
            array (
                'subject_id' => 90,
                'name' => 'Individual-Dual Sports/Dance',
                'department' => 'MAPEH',
            ),
            91 => 
            array (
                'subject_id' => 91,
                'name' => 'Language Education Research',
                'department' => 'English',
            ),
            92 => 
            array (
                'subject_id' => 92,
                'name' => 'Discrete Math',
                'department' => 'Mathematics',
            ),
            93 => 
            array (
                'subject_id' => 93,
                'name' => 'Structure of English',
                'department' => 'English',
            ),
            94 => 
            array (
                'subject_id' => 94,
                'name' => 'Diskurso sa Filipino',
                'department' => 'MAPEH',
            ),
            95 => 
            array (
                'subject_id' => 95,
                'name' => 'Theories of Crime Causation',
                'department' => 'Filipino',
            ),
            96 => 
            array (
                'subject_id' => 96,
                'name' => 'Theories of Personality',
                'department' => 'Social Science',
            ),
            97 => 
            array (
                'subject_id' => 97,
                'name' => 'Towards One Goal: Social Transformation',
                'department' => 'MAPEH',
            ),
            98 => 
            array (
                'subject_id' => 98,
                'name' => 'Career Path towards Success',
                'department' => 'Filipino',
            ),
            99 => 
            array (
                'subject_id' => 99,
                'name' => 'Diskurso sa Filipino',
                'department' => 'Filipino',
            ),
            100 => 
            array (
                'subject_id' => 100,
                'name' => 'Drawing 2 Lab',
                'department' => 'MAPEH',
            ),
            101 => 
            array (
                'subject_id' => 101,
                'name' => 'Speech & Theater Arts',
                'department' => 'English',
            ),
            102 => 
            array (
                'subject_id' => 102,
                'name' => 'Introductory Genetics',
                'department' => 'Science',
            ),
            103 => 
            array (
                'subject_id' => 103,
                'name' => 'The Authentic Lasallian Learner',
                'department' => 'Filipino',
            ),
            104 => 
            array (
                'subject_id' => 104,
                'name' => 'Statistical Quality Control',
                'department' => 'Mathematics',
            ),
            105 => 
            array (
                'subject_id' => 105,
                'name' => 'Transformative Psychology',
                'department' => 'Social Science',
            ),
            106 => 
            array (
                'subject_id' => 106,
                'name' => 'Educational Psychology',
                'department' => 'Social Science',
            ),
            107 => 
            array (
                'subject_id' => 107,
                'name' => 'Community Service by Focus',
                'department' => 'MAPEH',
            ),
            108 => 
            array (
                'subject_id' => 108,
                'name' => 'Typography and Layout 2 Lab',
                'department' => 'MAPEH',
            ),
            109 => 
            array (
                'subject_id' => 109,
                'name' => 'Understanding Group Dynamics and Processes',
                'department' => 'Social Science',
            ),
            110 => 
            array (
                'subject_id' => 110,
                'name' => 'Survey of English & American Literature',
                'department' => 'English',
            ),
            111 => 
            array (
                'subject_id' => 111,
                'name' => 'Technology for Teaching & Learning 2 (Technology In Secondary Language Education',
                    'department' => 'English',
                ),
                112 => 
                array (
                    'subject_id' => 112,
                    'name' => 'Systematics Biology',
                    'department' => 'Science',
                ),
                113 => 
                array (
                    'subject_id' => 113,
                    'name' => 'Pagsasaling Teknikal sa Larangang Akademiko',
                    'department' => 'Filipino',
                ),
                114 => 
                array (
                    'subject_id' => 114,
                    'name' => 'Information Management',
                    'department' => 'Computer',
                ),
                115 => 
                array (
                    'subject_id' => 115,
                    'name' => 'Cognitive Psychology',
                    'department' => 'Social Science',
                ),
                116 => 
                array (
                    'subject_id' => 116,
                    'name' => 'Bioethics',
                    'department' => 'Science',
                ),
                117 => 
                array (
                    'subject_id' => 117,
                    'name' => 'Thesis',
                    'department' => 'Computer',
                ),
                118 => 
                array (
                    'subject_id' => 118,
                    'name' => 'Positive Psychology',
                    'department' => 'Social Science',
                ),
                119 => 
                array (
                    'subject_id' => 119,
                    'name' => 'Intermediate Programming',
                    'department' => 'Mathematics',
                ),
                120 => 
                array (
                    'subject_id' => 120,
                    'name' => 'Children & Adolescent Literature',
                    'department' => 'English',
                ),
                121 => 
                array (
                    'subject_id' => 121,
                'name' => 'Math in the Modern World (Plane Trigonometry)',
                    'department' => 'Filipino',
                ),
                122 => 
                array (
                    'subject_id' => 122,
                    'name' => 'Networks and Communications',
                    'department' => 'Computer',
                ),
                123 => 
                array (
                    'subject_id' => 123,
                    'name' => 'Mythology & Folklore',
                    'department' => 'English',
                ),
                124 => 
                array (
                    'subject_id' => 124,
                    'name' => 'Thesis 1-2',
                    'department' => 'Mathematics',
                ),
                125 => 
                array (
                    'subject_id' => 125,
                    'name' => 'Fundamental Concepts of Mathematics',
                    'department' => 'Mathematics',
                ),
                126 => 
                array (
                    'subject_id' => 126,
                    'name' => 'Science Technology and Society ',
                    'department' => 'MAPEH',
                ),
                127 => 
                array (
                    'subject_id' => 127,
                    'name' => 'Field Methods in Psychology',
                    'department' => 'Social Science',
                ),
                128 => 
                array (
                    'subject_id' => 128,
                    'name' => 'Data Structures and Algorithms',
                    'department' => 'Computer',
                ),
                129 => 
                array (
                    'subject_id' => 129,
                    'name' => 'Filipino Psychology',
                    'department' => 'Social Science',
                ),
                130 => 
                array (
                    'subject_id' => 130,
                    'name' => 'Dynamical Systems',
                    'department' => 'Mathematics',
                ),
                131 => 
                array (
                    'subject_id' => 131,
                    'name' => 'Environmental Science',
                    'department' => 'Filipino',
                ),
                132 => 
                array (
                    'subject_id' => 132,
                    'name' => 'Drawing 1 Lab',
                    'department' => 'MAPEH',
                ),
                133 => 
                array (
                    'subject_id' => 133,
                    'name' => 'Advanced Calculus',
                    'department' => 'Mathematics',
                ),
                134 => 
                array (
                    'subject_id' => 134,
                    'name' => 'Drawing 2 Lec',
                    'department' => 'MAPEH',
                ),
                135 => 
                array (
                    'subject_id' => 135,
                    'name' => 'Principles & Theories of Language Acquisition & Learning',
                    'department' => 'English',
                ),
                136 => 
                array (
                    'subject_id' => 136,
                    'name' => 'English in a Lasallian Context',
                    'department' => 'Filipino',
                ),
                137 => 
                array (
                    'subject_id' => 137,
                    'name' => 'World History 1',
                    'department' => 'History',
                ),
                138 => 
                array (
                    'subject_id' => 138,
                    'name' => 'Psychological Statistics',
                    'department' => 'Social Science',
                ),
                139 => 
                array (
                    'subject_id' => 139,
                    'name' => 'Theory of Interest',
                    'department' => 'Mathematics',
                ),
                140 => 
                array (
                    'subject_id' => 140,
                    'name' => 'Operations Research',
                    'department' => 'Mathematics',
                ),
                141 => 
                array (
                    'subject_id' => 141,
                    'name' => 'English in a Lasallian Context',
                    'department' => 'MAPEH',
                ),
                142 => 
                array (
                    'subject_id' => 142,
                    'name' => 'Information Management',
                    'department' => 'Mathematics',
                ),
                143 => 
                array (
                    'subject_id' => 143,
                    'name' => 'Typography and Layout 1 Lec',
                    'department' => 'MAPEH',
                ),
                144 => 
                array (
                    'subject_id' => 144,
                    'name' => 'Literary Criticism',
                    'department' => 'English',
                ),
                145 => 
                array (
                    'subject_id' => 145,
                    'name' => 'Fundamentals of Botany',
                    'department' => 'Science',
                ),
                146 => 
                array (
                    'subject_id' => 146,
                    'name' => 'Fundamentals of Criminal Investigation and Intelligence',
                    'department' => 'Filipino',
                ),
                147 => 
                array (
                    'subject_id' => 147,
                    'name' => 'Language Learning Materials Development',
                    'department' => 'English',
                ),
                148 => 
                array (
                    'subject_id' => 148,
                    'name' => 'Philippine History 4',
                    'department' => 'History',
                ),
                149 => 
                array (
                    'subject_id' => 149,
                    'name' => 'Elements and Principle of Design Lab',
                    'department' => 'MAPEH',
                ),
                150 => 
                array (
                    'subject_id' => 150,
                    'name' => 'Applied Psychology in Human Resource Management',
                    'department' => 'Social Science',
                ),
                151 => 
                array (
                    'subject_id' => 151,
                    'name' => 'Parallel and Distributed Computing',
                    'department' => 'Computer',
                ),
                152 => 
                array (
                    'subject_id' => 152,
                'name' => 'Art History 2 (Survey of Asian Art)',
                    'department' => 'MAPEH',
                ),
                153 => 
                array (
                    'subject_id' => 153,
                    'name' => 'Introduction to Linguistics',
                    'department' => 'English',
                ),
                154 => 
                array (
                    'subject_id' => 154,
                    'name' => 'Human Computer Interaction',
                    'department' => 'Computer',
                ),
                155 => 
                array (
                    'subject_id' => 155,
                    'name' => 'Christian Discipleship in the Modern World',
                    'department' => 'MAPEH',
                ),
                156 => 
                array (
                    'subject_id' => 156,
                    'name' => 'Abnormal Psychology',
                    'department' => 'Social Science',
                ),
                157 => 
                array (
                    'subject_id' => 157,
                    'name' => 'Campus Journalism',
                    'department' => 'English',
                ),
                158 => 
                array (
                    'subject_id' => 158,
                    'name' => 'System Fundamentals',
                    'department' => 'Computer',
                ),
                159 => 
                array (
                    'subject_id' => 159,
                    'name' => 'Kursong Rizal',
                    'department' => 'Filipino',
                ),
                160 => 
                array (
                    'subject_id' => 160,
                    'name' => ' Technical Writing Language Culture & Society ',
                    'department' => 'English',
                ),
                161 => 
                array (
                    'subject_id' => 161,
                    'name' => 'Purposive English',
                    'department' => 'Filipino',
                ),
                162 => 
                array (
                    'subject_id' => 162,
                    'name' => 'World History 4',
                    'department' => 'History',
                ),
                163 => 
                array (
                    'subject_id' => 163,
                    'name' => 'Calculus 1-3',
                    'department' => 'Mathematics',
                ),
                164 => 
                array (
                    'subject_id' => 164,
                    'name' => 'Probability',
                    'department' => 'Mathematics',
                ),
                165 => 
                array (
                    'subject_id' => 165,
                    'name' => 'Software Engineering',
                    'department' => 'Computer',
                ),
                166 => 
                array (
                    'subject_id' => 166,
                    'name' => 'Introduction to Criminology',
                    'department' => 'Filipino',
                ),
                167 => 
                array (
                    'subject_id' => 167,
                    'name' => 'Introduction to Philippine Criminal Justice System',
                    'department' => 'Filipino',
                ),
                168 => 
                array (
                    'subject_id' => 168,
                    'name' => 'Trigonometry',
                    'department' => 'Mathematics',
                ),
            ));
        
        
    }
}