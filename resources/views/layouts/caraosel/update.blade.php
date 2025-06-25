@extends('layouts.app')

@section('title', 'Edit Carousel')

@push('style')
    
@endpush


@section('content')

    <div class="main-content">
        <h2>Edit Carousel</h2>

        {{-- Tampilkan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        {{-- Form Edit --}}
        <form action="{{ route('caraosel.update', $caraosel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            {{-- Judul --}}
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control"
                    value="{{ old('judul', $caraosel->judul) }}" required maxlength="50">
            </div>
    
            {{-- Isi --}}
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <input type="text" name="isi" id="isi" class="form-control"
                    value="{{ old('isi', $caraosel->isi) }}" required maxlength="50">
            </div>
    
            {{-- Gambar Baru --}}
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Baru (Opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
            </div>
    
            {{-- Preview Gambar Lama --}}
            @if ($caraosel->gambar)
                <div class="mb-3">
                    <p>Gambar Sekarang:</p>
                    <img src="{{ asset('storage/gambar/' . $caraosel->gambar) }}" alt="Gambar Lama" width="200">
                </div>
            @endif
    
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('caraosel.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
   


@push('script')
    
@endpush

@endsection
