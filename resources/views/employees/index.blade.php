@extends('layouts.app')

@section('title', 'Find Your Expert')

@section('content')
    <div class="container text-center py-5">
        {{-- Logo Perusahaan --}}
        <img src="{{ asset('public/assets/company-logos/logo-govac.png') }}" alt="{{ $company->company_branch }}"
            class="img-fluid d-block mx-auto" style="max-width: 180px; margin-bottom: 80px; margin-top: 50px">

        {{-- Judul --}}
        <p style="margin-bottom: 50pxl font-size: 24px"><strong>Great!</strong> Find Your Expert and Book an Appointment
            Below</p>

        <div class="row justify-content-center mt-4">
            @foreach ($employees as $employee)
                <div class="col-md-8 mt-4">
                    <div class="d-flex align-items-center p-4 shadow rounded bg-white text-start bg-white"
                        style="max-width: 750px; width: 100%;">
                        {{-- Foto Profil --}}
                        <img src="{{ asset($employee->profile_photo ? Storage::url($employee->profile_photo) : 'images/default-profile.png') }}"
                            alt="{{ $employee->name }}" class="rounded-circle me-3"
                            style="width: 200px; height: 200px; object-fit: cover; flex-shrink: 0;">

                        <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-3">
                                    <h5 class="fw-bold text-black mb-0">{{ $employee->name }}</h5>
                                    <p class="text-muted fst-italic mb-0">
                                        {{ $employee->position ?? 'Position not available' }}</p>
                                </div>
                                {{-- Tombol Booking --}}
                                <a href="#" class="btn btn-danger rounded-pill px-4 mb-3"
                                    style="white-space: nowrap;">
                                    Book Appointment
                                </a>
                            </div>
                            <p class="text-muted mt-2" style="font-size: 14px;">
                                {{ $employee->description ?? 'No additional information available.' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Tombol Kembali --}}
        <div class="mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">← Previous Page</a>
        </div>
    </div>
@endsection
