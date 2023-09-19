<?php

namespace App\Repositories\StudyProgram;

use App\Models\Department;
use App\Models\StudyProgram;

interface StudyProgramRepository
{
    public function getStudyPrograms();
    public function getStudyProgramsByDepartment(Department $department);
    public function storeStudyProgram($data);
    public function updateStudyProgram($data, StudyProgram $studyProgram);
    public function destroyStudyProgram(StudyProgram $studyProgram);
}
