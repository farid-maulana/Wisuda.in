<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    public function run(): void
    {
        $study_programs = [
            [
                'department_id' => 1,
                'grade' => "D4",
                'name' => "TEKNIK INFORMATIKA",
            ],
            [
                'department_id' => 1,
                'grade' => "D4",
                'name' => "SISTEM INFORMASI BISNIS",
            ],
            [
                'department_id' => 2,
                'grade' => "D4",
                'name' => "AKUNTANSI MANAJEMEN",
            ],
            [
                'department_id' => 2,
                'grade' => "S2",
                'name' => "SISTEM INFORMASI AKUNTANSI",
            ],
            [
                'department_id' => 3,
                'grade' => "D4",
                'name' => "MANAJEMEN REKAYASA KONSTRUKSI",
            ],
            [
                'department_id' => 3,
                'grade' => "D3",
                'name' => "TEKNIK SIPIL",
            ],
            [
                'department_id' => 4,
                'grade' => "D3",
                'name' => "ADMINISTRASI BISNIS",
            ],
            [
                'department_id' => 5,
                'grade' => "D4",
                'name' => "TEKNOLOGI KIMIA INDUSTRI",
            ],
            [
                'department_id' => 6,
                'grade' => "D4",
                'name' => "TEKNIK ELEKTRONIKA",
            ],
            [
                'department_id' => 6,
                'grade' => "D4",
                'name' => "SISTEM KELISTRIKAN",
            ],
            [
                'department_id' => 6,
                'grade' => "D3",
                'name' => "TEKNIK ELEKTRONIKA",
            ],
            [
                'department_id' => 7,
                'grade' => "D4",
                'name' => "TEKNIK MESIN PRODUKSI DAN PERAWATAN",
            ],
            [
                'department_id' => 7,
                'grade' => "D3",
                'name' => "TEKNIK MESIN",
            ],
        ];

        foreach ($study_programs as $study_program) {
            StudyProgram::create([
                'department_id' => $study_program['department_id'],
                'grade' => $study_program['grade'],
                'name' => $study_program['name'],
            ]);
        }
    }
}
