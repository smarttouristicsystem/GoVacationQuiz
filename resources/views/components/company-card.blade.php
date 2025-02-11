<div class="col-md-3 mx-8 mb-3 mt-3">
    <div class="card shadow-sm text-center p-4" style="border-radius: 12px;">
        <div class="card-body">
            {{-- Logo --}}
            <img src="{{ asset('storage/' . $company->company_logo) }}" 
                 alt="{{ $company->company_branch }}" 
                 class="img-fluid mb-3" 
                 style="max-width: 150px; height: auto;">
            
            {{-- Nama Perusahaan --}}
            <h6 class="fw-bold mb-2">{{ $company->company_branch }}</h6>

            {{-- Tombol Mengarah ke Halaman Detail --}}
            <a href="{{ route('company.show', $company->id) }}" 
               class="btn btn-danger btn-sm px-3 py-1" 
               style="border-radius: 20px;">
                Select
            </a>
        </div>
    </div>
</div>
