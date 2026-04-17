@extends('admin.layouts.master')

@section('title', __('admin.dashboard'))

@section('toolbar')
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('admin.dashboard') }}
        </h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Test</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-400 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">{{ __('admin.dashboard') }}</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="row g-5 g-xl-10">
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-primary">
                            <i class="fa-solid fa-vault text-primary"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">Test</div>
                        <div class="fs-2 fw-bold">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-success">
                            <i class="fa-solid fa-server text-success"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">Test</div>
                        <div class="fs-2 fw-bold">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-warning">
                            <i class="fa-solid fa-circle-minus text-warning"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">Test</div>
                        <div class="fs-2 fw-bold">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="symbol symbol-45px me-4">
                        <div class="symbol-label bg-light-info">
                            <i class="fa-solid fa-users text-info"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fs-7 text-muted">Test</div>
                        <div class="fs-2 fw-bold">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
