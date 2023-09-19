<?php

namespace App\Repositories\StudyProgram;

use App\Models\Department;
use App\Models\StudyProgram;

class EloquentStudyProgramRepository implements StudyProgramRepository
{
    public function getStudyPrograms()
    {
        // TODO: Implement getStudyPrograms() method.
    }

    public function getStudyProgramsByDepartment(Department $department)
    {
        return StudyProgram::where('department_id', $department->id)->get();
    }

    public function storeStudyProgram($data)
    {
        StudyProgram::create($data);
    }

    public function updateStudyProgram($data, StudyProgram $studyProgram)
    {
        $studyProgram->update($data);
    }

    public function destroyStudyProgram(StudyProgram $studyProgram)
    {
        $studyProgram->delete();
    }
}
