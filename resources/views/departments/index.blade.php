@extends('layouts.master')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Jurusan</li>
                </ol>
                <h4 class="main-title mb-0">Data Jurusan</h4>
            </div>
        </div>
        <div id="content">
            <div class="card card-one">
                <div class="card-body">
                    <div class="text-end mb-3">
                        <a id="add-new-department" href="#new-department" class="btn btn-primary" data-bs-toggle="modal">
                            Tambah Jurusan
                        </a>
                    </div>
                    @include('departments.create')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Jurusan</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($departments as $department)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('study-programs.show', $department->id) }}" class="btn btn-link text-primary-dark btn-sm">
                                            <i class="ri-mini-program-line"></i> Lihat Program Studi
                                        </a>
                                        <a href="#edit-department-{{ $department->id }}" data-bs-toggle="modal" class="btn btn-link text-info btn-sm">
                                            <i class="ri-edit-2-line"></i> Ubah
                                        </a>
                                        <a href="#destroy-department-{{ $department->id }}" data-bs-toggle="modal" class="btn btn-link text-danger btn-sm">
                                            <i class="ri-delete-bin-6-line"></i> Hapus
                                        </a>
                                    </td>
                                    @include('departments.edit')
                                    @include('departments.destroy')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Data jurusan masih belum ada</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
