@extends('layouts.app')

@section('title', $assistance->name)

@section('content')
    <div class="container text-center py-5">
        {{-- Logo Perusahaan --}}
<<<<<<< HEAD
        <img src="{{ asset('public/assets/company-logos/logo-govac.png') }}" alt="{{ $company->company_branch }}"
=======
        <img src="{{ asset('storage/' . $company->company_logo) }}" alt="{{ $company->company_branch }}"
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
            class="img-fluid d-block mx-auto" style="max-width: 180px; margin-bottom: 50px; margin-top: 50px">

        {{-- Judul --}}
        <h5 class="fw-normal" style="font-size: 18px">You Have Chosen</h5>
        <h3 class="fw-bold text-black" style="font-size: 18px; margin-bottom: 50px">{{ $assistance->description }}</h3>

        <div class="d-flex flex-column align-items-center mt-4">
            @if ($assistance->employee && $assistance->employee->name)
                {{-- Foto Profil --}}
                <div class="d-flex align-items-center text-start bg-white" style="max-width: 750px; width: 100%;">
<<<<<<< HEAD
                    <img src="{{ asset($assistance->employee->profile_photo ? Storage::url($assistance->employee->profile_photo) : 'images/default-profile.png') }}"
=======
                    <img src="{{ asset($assistance->employee->profile_photo ? 'storage/' . $assistance->employee->profile_photo : 'images/default-profile.png') }}"
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
                        alt="{{ $assistance->employee->name }}" class="rounded-circle me-3"
                        style="width: 200px; height: 200px; object-fit: cover; flex-shrink: 0;">

                    {{-- employee --}}
                    <div class="d-flex flex-column w-10">
                        <div class="d-flex justify-content-between align-items-center w-10">
                            <div>
                                <h5 class="fw-bold text-black mb-0">{{ $assistance->employee->name }}</h5>
                                <p class="fst-italic text-muted mb-0">
                                    {{ $assistance->employee->position ?? 'Position not available' }}
                                </p>
                            </div>

                            {{-- Book Appointment --}}
                            <a href="#" class="btn btn-danger"
                                style="border-radius: 20px; font-size: 14px; white-space: nowrap;">
                                Book Appointment
                            </a>
                        </div>

                        {{-- Deskripsi Karyawan --}}
                        <p class="text-muted mt-3" style="font-size: 14px;">
                            {{ $assistance->employee->description ?? 'No additional information available.' }}
                        </p>
                    </div>
                </div>
            @else
                <p class="text-danger">Employee information is unavailable.</p>
            @endif
        </div>

        {{-- Tombol Kembali --}}
        <div class="mt-4">
            <a href="{{ url()->previous() }}" class="btn  px-4 py-2">← Previous Page</a>
        </div>
    </div>
@endsection
