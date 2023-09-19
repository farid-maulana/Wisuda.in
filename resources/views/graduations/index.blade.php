@extends('layouts.master')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Wisuda</li>
                </ol>
                <h4 class="main-title mb-0">Data Wisuda</h4>
            </div>
        </div>
        <div id="content">
            <div class="card card-one">
                <div class="card-body">
                    <div class="text-end mb-3">
                        <a id="add-new-graduation" href="#new-graduation" class="btn btn-primary"
                           data-bs-toggle="modal">
                            Tambah Jadwal Wisuda
                        </a>
                    </div>
                    @include('graduations.create')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama Wisuda</th>
                                <th>Gelombang</th>
                                <th>Jenis Wisuda</th>
                                <th>Jadwal Wisuda</th>
                                <th style="width: 150px">Pendaftaran</th>
                                <th>Kuota</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($graduations as $graduation)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $graduation->name }}</td>
                                    <td>{{ 'Gel. ' . $graduation->batch . ' Sesi ' . $graduation->session }}</td>
                                    <td class="text-capitalize text-center">{{ $graduation->type }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($graduation->schedule)->locale('id')->translatedFormat('d-m-Y H:i') }}</td>
                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($graduation->graduation_registration_schedule->start_date)->locale('id')->translatedFormat('d-m-Y H:i') . ' s/d ' . \Carbon\Carbon::parse($graduation->graduation_registration_schedule->end_date)->locale('id')->translatedFormat('d-m-Y H:i') }}</td>
                                    <td class="text-center">{{ $graduation->quota }}</td>
                                    @php
                                        $today = \Carbon\Carbon::today();
                                        $start_date = $graduation->graduation_registration_schedule->start_date;
                                        $end_date = $graduation->graduation_registration_schedule->end_date;
                                        $date = $graduation->schedule;
                                        $state;
                                        if($today < $start_date) {
                                            $state = 'belum dibuka';
                                        } elseif($today > $start_date && $today < $end_date) {
                                            $state = 'dibuka';
                                        } elseif($today > $end_date && $today < $date) {
                                            $state = 'ditutup';
                                        } else {
                                            $state = 'selesai';
                                        }
                                    @endphp
                                    @switch($state)
                                        @case('belum dibuka')
                                            <td class="text-center">
                                                <span class="badge badge-pill bg-secondary">Belum Dibuka</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ route('graduations.set-quota', $graduation->id) }}"
                                                   class="btn btn-link text-primary btn-sm edit-prodi">
                                                    <i class="ri-mini-program-line"></i> Set Kuota Prodi
                                                </a>
                                                <a href="#edit-prodi-{{ $graduation->id }}" data-bs-toggle="modal"
                                                   data-id="{{ $graduation->id }}"
                                                   class="btn btn-link text-info btn-sm edit-prodi">
                                                    <i class="ri-edit-2-line"></i> Ubah
                                                </a>
                                                <a href="#destroy-prodi-{{ $graduation->id }}" data-bs-toggle="modal"
                                                   class="btn btn-link text-danger btn-sm">
                                                    <i class="ri-delete-bin-6-line"></i> Hapus
                                                </a>
                                            </td>
                                            @break
                                        @case('dibuka')
                                            <td class="text-center">
                                                <span class="badge badge-pill bg-success">Dibuka</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                   class="btn btn-link text-primary btn-sm edit-prodi">
                                                    <i class="ri-mini-program-line"></i> Set Kuota Prodi
                                                </a>
                                                <a href="#edit-prodi-{{ $graduation->id }}" data-bs-toggle="modal"
                                                   data-id="{{ $graduation->id }}"
                                                   class="btn btn-link text-info btn-sm edit-prodi">
                                                    <i class="ri-edit-2-line"></i> Ubah
                                                </a>
                                            </td>
                                            @break
                                        @case('ditutup')
                                            <td class="text-center">
                                                <span class="badge badge-pill bg-danger">Ditutup</span>
                                            </td>
                                            <td></td>
                                            @break
                                        @default
                                            <td class="text-center">
                                                <span class="badge badge-pill bg-success">Selesai</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                   class="btn btn-link text-primary btn-sm edit-prodi">
                                                    <i class="ri-graduation-cap-line"></i> Lihat Daftar Wisudawan
                                                </a>
                                            </td>
                                            @break
                                    @endswitch
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Data wisuda masih belum ada</td>
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
