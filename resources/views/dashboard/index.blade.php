@extends('layouts.master')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <ol class="breadcrumb fs-sm mb-1">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
                <h4 class="main-title mb-0">Selamat Datang! {{ Auth::user()->name }}</h4>
            </div>
        </div>
        <div id="content">
            <div class="row">
                <div class="col-6 col-xl-3">
                    <div class="card card-one">
                        <div class="card-body">
                            <label class="card-title fs-sm fw-medium mb-1">Unique Purchases</label>
                            <h3 class="card-value mb-1"><i class="ri-shopping-bag-3-line"></i> 8,327</h3>
                            <small><span class="d-inline-flex text-danger">0.7% <i
                                        class="ri-arrow-down-line"></i></span> than last week</small>
                        </div><!-- card-body -->
                    </div><!-- card-one -->
                </div><!-- col -->
                <div class="col-6 col-xl-3">
                    <div class="card card-one">
                        <div class="card-body">
                            <label class="card-title fs-sm fw-medium mb-1">Order Value</label>
                            <h3 class="card-value mb-1"><i class="ri-briefcase-4-line"></i> <span>$</span>12,105</h3>
                            <small><span class="d-inline-flex text-success">2.1% <i class="ri-arrow-up-line"></i></span>
                                than last week</small>
                        </div><!-- card-body -->
                    </div><!-- card-one -->
                </div><!-- col -->
                <div class="col-6 col-xl-3">
                    <div class="card card-one">
                        <div class="card-body">
                            <label class="card-title fs-sm fw-medium mb-1">Order Quantity</label>
                            <h3 class="card-value mb-1"><i class="ri-inbox-line"></i> 4,598</h3>
                            <small><span class="d-inline-flex text-danger">0.3% <i
                                        class="ri-arrow-down-line"></i></span> than last week</small>
                        </div><!-- card-body -->
                    </div><!-- card-one -->
                </div><!-- col -->
                <div class="col-6 col-xl-3">
                    <div class="card card-one">
                        <div class="card-body">
                            <label class="card-title fs-sm fw-medium mb-1">Conversion Rate</label>
                            <h3 class="card-value mb-1"><i class="ri-bar-chart-box-line"></i> 6.28<span>%</span></h3>
                            <small><span class="d-inline-flex text-success">1.2% <i class="ri-arrow-up-line"></i></span>
                                than last week</small>
                        </div><!-- card-body -->
                    </div><!-- card-one -->
                </div><!-- col -->
            </div>
        </div>
    </div>
@endsection
