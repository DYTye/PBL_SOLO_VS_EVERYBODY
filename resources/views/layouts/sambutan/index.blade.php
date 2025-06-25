@extends('layouts.app')

@section('title', 'Sambutan Kepala Sekolah')

@push('style')
<style>
    .sambutan-card {
        border-radius: 1rem;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .sambutan-isi {
        font-size: 1rem;
        color: #333;
        line-height: 1.8;
        text-align: justify;
    }
</style>
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Sambutan Kepala Sekolah</h1>
            <a href="{{ route('sambutan.create') }}" class="btn btn-success">
                <i class="fas fa-pen-nib"></i> Edit Sambutan
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="section-body mt-4">
            <div class="card sambutan-card">
                <div class="card-body">
                    @forelse ($sambutans as $sambutan)
                        <div class="sambutan-isi">
                            {!! $sambutan->sambutan !!}
                        </div>
                    @empty
                        <p class="text-muted">Belum ada sambutan ditambahkan.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
