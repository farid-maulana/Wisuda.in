@extends('layouts.master')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Wisuda {{ $graduation->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Set Kuota Prodi</li>
                </ol>
                <h4 class="main-title mb-0">Set Kuota Prodi {{ $graduation->name }}</h4>
            </div>
        </div>
        <div id="content">
            <div class="accordion mb-3" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Detail Wisuda
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <dl class="row">
                                <dt class="col-sm-3">Nama Wisuda</dt>
                                <dd class="col-sm-9">{{ $graduation->name }}</dd>
                                <dt class="col-sm-3">Gelombang</dt>
                                <dd class="col-sm-9">{{ 'Gel. ' . $graduation->batch . ' Sesi ' . $graduation->session }}</dd>
                                <dt class="col-sm-3">Jenis Wisuda</dt>
                                <dd class="col-sm-9 text-capitalize">{{ $graduation->type }}</dd>
                                <dt class="col-sm-3">Tanggal Pelaksanaan</dt>
                                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($graduation->schedule)->locale('id')->translatedFormat('d-m-Y H:i') }}</dd>
                                <dt class="col-sm-3">Kuota</dt>
                                <dd class="col-sm-9 text-primary fw-semibold">{{ $graduation->quota }}</dd>
                                <dt class="col-sm-3">Sisa Kuota (belum diset)</dt>
                                <dd class="col-sm-9 text-danger fw-semibold">{{ $graduation->quota }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-one">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Program Studi</th>
                                <th>Kuota Prodi</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($departments as $department)
                                <tr>
                                    <td colspan="3" class="fw-medium text-primary">{{ $department->name }}</td>
                                </tr>
                                @forelse($department->studyPrograms as $studyProgram)
                                    <tr>
                                        <td class="ps-4">{{ $studyProgram->grade . ' ' . $studyProgram->name }}</td>
                                        <td>0</td>
                                        <td class="text-end">
                                            <a href="#set-quota-{{ $studyProgram->id }}" data-bs-toggle="modal"
                                               data-id="{{ $studyProgram->id }}"
                                               class="btn btn-link text-info btn-sm edit-prodi">
                                                <i class="ri-edit-2-line"></i> Set Kuota
                                            </a>
                                        </td>
                                        @include('graduations.modal-set')
                                    </tr>
                                @empty
                                    <td colspan="3" class="ps-4 text-center">Belum ada data program studi</td>
                                @endforelse
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
