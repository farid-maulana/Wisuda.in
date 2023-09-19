<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = ['Teknologi Informasi', 'Akuntansi', 'Teknik Sipil', 'Administrasi Bisnis', 'Teknik Kimia', 'Teknik Elektro', 'Teknik Mesin'];

        foreach ($departments as $department) {
            Department::create([
                'name' => $department
            ]);
        }
    }
}
