<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdiQuotaRequest;
use App\Models\Graduation;
use App\Repositories\Department\DepartmentRepository;
use App\Repositories\ProdiQuota\ProdiQuotaRepository;

class ProdiQuotaController extends Controller
{
    private DepartmentRepository $departmentRepository;
    private ProdiQuotaRepository $prodiQuotaRepository;

    public function __construct(DepartmentRepository $departmentRepository, ProdiQuotaRepository $prodiQuotaRepository)
    {
        $this->departmentRepository = $departmentRepository;
        $this->prodiQuotaRepository = $prodiQuotaRepository;
    }

    public function index(Graduation $graduation)
    {
        $departments = $this->departmentRepository->getDepartments();

        return view('graduations.set-quota', compact('graduation', 'departments'));
    }

    public function store(ProdiQuotaRequest $request)
    {
        $this->prodiQuotaRepository->storeProdiQuota($request->validated());

        return back();
    }
}
