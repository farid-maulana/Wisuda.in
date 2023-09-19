<?php

namespace App\Repositories\Department;

use App\Models\Department;

class EloquentDepartmentRepository implements DepartmentRepository
{
    public function getDepartments()
    {
        return Department::all();
    }

    public function storeDepartment($data)
    {
        Department::create($data);
    }

    public function findDepartment(Department $department)
    {
        // TODO: Implement findDepartment() method.
    }

    public function updateDepartment($data, Department $department)
    {
        $department->update($data);
    }

    public function destroyDepartment(Department $department)
    {
        $department->delete();
    }
}
