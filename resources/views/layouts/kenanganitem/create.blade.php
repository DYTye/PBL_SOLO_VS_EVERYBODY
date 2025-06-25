@extends('layouts.app')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Tambah Item Kenangan</h1>
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

        <form action="{{ route('kenanganitem.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control" 
                    value="{{ $raport->kelas->nama }}" readonly>
            </div>
            
            <input type="hidden" name="kelas_id" value="{{ $raport->kelas->id }}">
            
            <input type="hidden" name="raport_kenangan_id" value="{{ $raport->id }}">

            <div class="mb-3">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>

            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control">
                    <option value="siswa">Siswa</option>
                    <option value="guru">Guru</option>
                    <option value="cover">Cover</option>
                    <option value="isi">Isi</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="halaman">Halaman</label>
                <input type="text" name="halaman" id="halaman" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </section>
</div>
@endsection

@push('script')
@endpush
