@extends('layouts.appfe')
@push('style')
@endpush

@section('content')
<div class="main-content">
    <div class="section">
        <section class="section">
            <div class="section-header">
                <h3 class="text-dark">Berita Dan Prestasi Siswa</h3>
            </div>
            <div class="row">
                @foreach($beritas as $berita)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm rounded-4 border-0">
                            <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" alt="Gambar Berita"
                                class="card-img-top rounded-top" style="height: 180px; object-fit: cover;" />
            
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($berita->judul_berita, 50) }}</h5>
                                <p class="card-text preview-text">
                                    {{ strip_tags(Str::limit($berita->isi_berita, 120, '...')) }}
                                </p>
                            </div>
            
                            <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pt-0">
                                <a href="{{ route('beritafe.show', $berita->id) }}" class="btn btn-sm btn-outline-primary me-1">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
              
        </section>
    </div>
</div>

@endsection

@push('style')
@endpush

