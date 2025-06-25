@extends('layouts.app')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Edit Item Kenangan</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('kenanganitem.update', $kenanganitem->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control" 
                    value="{{ $kenanganitem->raport->kelas->nama }}" readonly>
            </div>
            
            <input type="hidden" name="kelas_id" value="{{ $kenanganitem->raport->kelas->id }}">
            <input type="hidden" name="raport_kenangan_id" value="{{ $kenanganitem->raport->id }}">

            <div class="mb-3">
                <label for="gambar">Gambar (Kosongkan jika tidak diubah)</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
                @if ($kenanganitem->gambar)
                    <img src="{{ asset('storage/kenangan/' . $kenanganitem->gambar) }}" alt="Preview Gambar" class="img-thumbnail mt-2" style="max-height: 200px;">
                @endif
            </div>

            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ old('deskripsi', $kenanganitem->deskripsi) }}" required>
            </div>

            <div class="mb-3">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control">
                    <option value="siswa" {{ $kenanganitem->kategori == 'siswa' ? 'selected' : '' }}>Siswa</option>
                    <option value="guru" {{ $kenanganitem->kategori == 'guru' ? 'selected' : '' }}>Guru</option>
                    <option value="cover" {{ $kenanganitem->kategori == 'cover' ? 'selected' : '' }}>Cover</option>
                    <option value="isi" {{ $kenanganitem->kategori == 'isi' ? 'selected' : '' }}>Isi</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="halaman">Halaman</label>
                <input type="text" name="halaman" id="halaman" class="form-control" value="{{ old('halaman', $kenanganitem->halaman) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </section>
</div>
@endsection

@push('script')
@endpush
