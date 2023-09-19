<?php

namespace App\Repositories\Department;

use App\Models\Department;

interface DepartmentRepository
{
    public function getDepartments();
    public function storeDepartment($data);
    public function findDepartment(Department $department);
    public function updateDepartment($data, Department $department);
    public function destroyDepartment(Department $department);
}
