@extends('layouts.app')

@section('title', 'Info Akademik')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center">
            <h1>Informasi Akademik</h1>
            <a href="{{ route('info.create') }}" class="btn btn-success">
                <i class="fas fa-edit"></i> Ubah Informasi
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="section-body">
            @if ($info = \App\Models\InfoAkademik::first())
                <div class="card">
                    <div class="card-body">
                        <p><strong>Jumlah Siswa:</strong> {{ $info->jumlah_siswa }}</p>
                        <p><strong>Jumlah Kelas:</strong> {{ $info->jumlah_kelas }}</p>
                        <p><strong>Jumlah Guru:</strong> {{ $info->jumlah_guru }}</p>
                        <p><strong>Jumlah Prestasi:</strong> {{ $info->jumlah_prestasi }}</p>
                    </div>
                </div>
            @else
                <p class="text-muted">Belum ada informasi akademik yang ditambahkan.</p>
            @endif
        </div>
    </section>
</div>
@endsection
