@extends('layouts.app')

@section('title', 'Tambah Sambutan Kepala Sekolah')

@push('style')
    
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>kelebihan Tk Islam Nurul Falah</h1>
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

            <form action="{{ route('kelebihan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="mb-3">
                    <label for="gambar" class="form-label fw-bold">Upload Gambar Kelebihan</label>
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white">
                            <i class="fas fa-image"></i>
                        </span>
                        <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" required>
                    </div>
                    <small class="form-text text-muted">Hanya file gambar (jpeg, jpg, png) maks. 2MB</small>
                    <div class="mt-2">
                        <img id="preview-gambar" src="#" alt="Preview Gambar" class="img-fluid rounded shadow-sm d-none" style="max-height: 200px;">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="kelebihan" class="form-label">Deskripsi kelebihan Sekolah</label>
                    <textarea name="kelebihan" id="kelebihan" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('kelebihan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </section>
</div>


@endsection
