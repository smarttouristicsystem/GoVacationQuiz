@extends('layouts.app')

@section('title', 'Assistance')

@section('content')
    <div class="container text-center py-5">
        {{-- Logo Perusahaan --}}
<<<<<<< HEAD
        <img src="{{ asset('public/assets/company-logos/logo-govac.png') }}" alt="{{ $company->company_branch }}"
=======
        <img src="{{ asset('storage/' . $company->company_logo) }}" alt="{{ $company->company_branch }}"
>>>>>>> 8bb4c43b877eae3f52c8d84d69ea1b2c8d532118
            class="img-fluid d-block mx-auto" style="max-width: 180px; margin-bottom: 80px; margin-top: 50px">

        {{-- Judul --}}
        <p class="fw-bold fs-6 mb-3">What Type of Assistance or Expertise Are You Looking For?</p>

        {{-- Pilihan Bantuan --}}
        <div class="d-grid gap-3 mx-auto" style="max-width: 500px; margin-top: 36px;">
            @forelse ($assistances as $assistance)
                <a href="{{ route('assistance.show', $assistance->id) }}"
                    class="btn btn-light border rounded-pill py-2 shadow-sm d-block"
                    style="font-size: 14px; margin-bottom: 5px;">
                    {{ $assistance->description }}
                </a>
            @empty
                <p class="text-muted">No assistance available at the moment.</p>
            @endforelse
        </div>

        {{-- Section Need More Information --}}
        <div class="mt-5 pb-5">
            <p style="margin-bottom: 30px;"><strong>Need More Information?</strong> Expand Below</p>
            <div class="accordion mt-4 mx-auto px-3" style="max-width: 651px;" id="accordionExample">
                @foreach ([
            'Major Accounts, Hotel Partnership, or Strategic Collaboration' => 'Details about Major Accounts and Partnerships.',
            'Roundtrips, Tailor-Made Products, and Enhancing Destination Offerings' => 'Information about Tailor-Made Products.',
            'Partnership, New Collaboration, and Connectivity' => 'Details about Connectivity and Collaboration.',
            'Hotel Contracts, Portfolio, and Special Offers' => 'Information on Hotel Contracts and Offers.',
        ] as $title => $content)
                    @php $id = Str::slug($title); @endphp
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#{{ $id }}">
                                {{ $title }}
                            </button>
                        </h2>
                        <div id="{{ $id }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $content }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Tombol Kembali --}}
        <div class="mt-4">
            <a href="{{ url()->previous() }}" class="btn  px-4 py-2">← Previous Page</a>
        </div>
    </div>
@endsection
