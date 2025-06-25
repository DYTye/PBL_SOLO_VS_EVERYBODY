@extends('layouts.appfe')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Daftar Raport Kenangan</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <h5 class="mb-4">Daftar Raport Kenangan</h5>
                <ul class="list-group">
                    @forelse ($raports as $raport)
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <div class="me-3">
                                <h6 class="mb-1">{{ $raport->judul }}</h6>
                                <small class="text-muted">Kelas: {{ $raport->kelas->nama }} | Tahun Ajar: {{ $raport->tahunajar->nama_tahun_ajar }}</small>
                            </div>
                            <div class="mt-2 mt-md-0">
                                <a href="{{ route('kenang.show', $raport->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a href="{{ route('kenangan.pdf', $raport->id) }}" class="btn btn-sm btn-outline-success" target="_blank">
                                    <i class="fas fa-print"></i> Cetak PDF
                                </a>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item text-center text-muted">
                            Belum ada raport kenangan.
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
        
        
    </section>
</div>
@endsection

@push('script')
@endpush
