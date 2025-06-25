@extends('layouts.app')

@section('title', 'Edit Info Akademik')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Informasi Akademik</h1>
        </div>

        <div class="section-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('info.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                    <input type="text" name="jumlah_siswa" class="form-control" value="{{ old('jumlah_siswa', $info->jumlah_siswa ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_kelas" class="form-label">Jumlah Kelas</label>
                    <input type="text" name="jumlah_kelas" class="form-control" value="{{ old('jumlah_kelas', $info->jumlah_kelas ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_guru" class="form-label">Jumlah Guru</label>
                    <input type="text" name="jumlah_guru" class="form-control" value="{{ old('jumlah_guru', $info->jumlah_guru ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="jumlah_prestasi" class="form-label">Jumlah Prestasi</label>
                    <input type="text" name="jumlah_prestasi" class="form-control" value="{{ old('jumlah_prestasi', $info->jumlah_prestasi ?? '') }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('info.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </section>
</div>
@endsection
