

@extends('layouts.app')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
        <h1>Tambah Raport Kenangan</h1>
        </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
 <form action="{{route('kenang.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="kelas_id">Kelas</label>
        <select name="kelas_id" id="kelas_id" class="form-control" required>
            <option value="" disabled selected>-- Pilih Kelas --</option>
            @foreach ($kelasList as $kelas)
                <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
            @endforeach
        </select>
    </div> 
    <div class="mb-3">
        <label for="tahun_ajar_id">Tahun Ajar</label>
        <select name="tahun_ajar_id" id="tahun_ajar_id" class="form-control">
            <option value="" disabled selected>-- Tahun Ajar --</option>
            @foreach ($THL as $tahun_ajar)
            <option value="{{ $tahun_ajar->id }}">{{ $tahun_ajar->nama_tahun_ajar }}</option>
        @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>

    </section>
</div>
@endsection
@push('script')
@endpush