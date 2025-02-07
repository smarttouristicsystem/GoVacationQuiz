<div class="col-md-3 mx-8 mb-3 mt-3">
    <div class="card shadow-sm text-center p-4" style="border-radius: 12px;">
        <div class="card-body">
            {{-- Logo --}}
            <img src="{{  asset('storage/' . $company->company_logo) }}" 
                 alt="{{ $company->company_branch }}" 
                 class="img-fluid mb-3" 
                 style="max-width: 150px; height: auto;">
            
            {{-- Nama Perusahaan --}}
            <h6 class="fw-bold mb-2">{{ $company->company_branch }}</h6>

            {{-- Deskripsi --}}
            <p class="text-muted" style="font-size: 14px;">
                {{ $company->description ?? 'Please add your content here. Keep it short and simple. And smile :)' }}
            </p>

            {{-- Tombol --}}
            <a href="#" class="btn btn-danger btn-sm px-3 py-1" style="border-radius: 20px;">
                Book Appointment
            </a>
        </div>
    </div>
</div>
