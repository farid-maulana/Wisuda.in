@extends('layouts.master')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Jurusan {{ $department->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Prodi</li>
                </ol>
                <h4 class="main-title mb-0">Data Prodi</h4>
            </div>
        </div>
        <div id="content">
            <div class="card card-one">
                <div class="card-body">
                    <div class="text-end mb-3">
                        <a id="add-new-prodi" href="#new-prodi" class="btn btn-primary" data-bs-toggle="modal">
                            Tambah Prodi
                        </a>
                    </div>
                    @include('departments.study-programs.create')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Jenjang</th>
                                <th>Nama Prodi</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($studyPrograms as $studyProgram)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $studyProgram->grade }}</td>
                                    <td>{{ $studyProgram->name }}</td>
                                    <td class="text-end">
                                        <a href="#edit-prodi-{{ $studyProgram->id }}" data-bs-toggle="modal"
                                           data-id="{{ $studyProgram->id }}"
                                           class="btn btn-link text-info btn-sm edit-prodi">
                                            <i class="ri-edit-2-line"></i> Ubah
                                        </a>
                                        <a href="#destroy-prodi-{{ $studyProgram->id }}" data-bs-toggle="modal"
                                           class="btn btn-link text-danger btn-sm">
                                            <i class="ri-delete-bin-6-line"></i> Hapus
                                        </a>
                                    </td>
                                    @include('departments.study-programs.edit')
                                    @include('departments.study-programs.destroy')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Data program studi masih belum ada</td>
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
