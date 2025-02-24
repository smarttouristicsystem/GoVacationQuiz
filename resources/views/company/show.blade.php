@extends('layouts.app')

@section('title', $company->company_branch)

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center min-vh-100 text-center">
        {{-- Logo Perusahaan --}}
        <img src="{{ asset('public/assets/company-logos/logo-govac.png') }}" alt="{{ $company->company_branch }}"
            class="img-fluid" style="max-width: 180px; margin-top: -70px; margin-bottom: 80px;">

        {{-- Judul Halaman --}}
        <h2 class="fw-bold" style="margin-bottom: 28px;">Welcome</h2>

        {{-- Deskripsi --}}
        <p class="text-muted mx-auto" style="max-width: 800px; margin-bottom: 45px;">
            We understand your time is valuable, so we’ve made it quick and simple to help you
            connect to the right expert. Whether you know who to contact or would like assistance
            finding the right expert, we’re here to guide you every step of the way. Let’s get started.
        </p>

        {{-- Tombol Pilihan --}}
        <div class="d-flex flex-column gap-3">
            <a href="{{ route('assistance.index') }}" class="btn btn-light border rounded-pill px-5 py-2 shadow-sm">
                Please direct me to the right expert!
            </a>
            <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary rounded-pill px-5 py-2">No, I know who
                to book</a>
        </div>
    </div>
@endsection
