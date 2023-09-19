<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyProgramRequest;
use App\Models\Department;
use App\Models\StudyProgram;
use App\Repositories\Department\DepartmentRepository;
use App\Repositories\StudyProgram\StudyProgramRepository;

class StudyProgramController extends Controller
{
    private StudyProgramRepository $studyProgramRepository;

    public function __construct(StudyProgramRepository $studyProgramRepository)
    {
        $this->studyProgramRepository = $studyProgramRepository;
    }

    public function index()
    {
        //
    }

    public function store(StudyProgramRequest $request)
    {
        $this->studyProgramRepository->storeStudyProgram($request->validated());

        return back();
    }

    public function show(Department $department)
    {
        $studyPrograms = $this->studyProgramRepository->getStudyProgramsByDepartment($department);

        return view('departments.study-programs.index', compact('studyPrograms', 'department'));
    }

    public function update(StudyProgramRequest $request, StudyProgram $studyProgram)
    {
        $this->studyProgramRepository->updateStudyProgram($request->validated(), $studyProgram);

        return back();
    }

    public function destroy(StudyProgram $studyProgram)
    {
        $this->studyProgramRepository->destroyStudyProgram($studyProgram);

        return back();
    }
}
