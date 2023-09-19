<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use App\Repositories\Department\DepartmentRepository;

class DepartmentController extends Controller
{
    private DepartmentRepository $departmentRepository;

    public function __construct(DepartmentRepository $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function index()
    {
        $departments = $this->departmentRepository->getDepartments();
        return view('departments.index', compact('departments'));
    }

    public function store(DepartmentRequest $request)
    {
        $this->departmentRepository->storeDepartment($request->validated());

        return back();
    }

    public function show(Department $department)
    {
        return $department;
    }

    public function update(DepartmentRequest $request, Department $department)
    {
        $this->departmentRepository->updateDepartment($request->validated(), $department);

        return back();
    }

    public function destroy(Department $department)
    {
        $this->departmentRepository->destroyDepartment($department);

        return back();
    }
}
