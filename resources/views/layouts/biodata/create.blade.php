@extends('layouts.app')

@section('content')
<div class="main-content">
    <h4>Biodata Sekolah</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('biodata.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Sekolah</label>
            <input type="text" name="nama_sekolah" class="form-control" value="{{ old('nama_sekolah', $biodata->nama_sekolah ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Nomor Statistik Sekolah</label>
            <input type="text" name="nomor_statistik_sekolah" class="form-control" value="{{ old('nomor_statistik_sekolah', $biodata->nomor_statistik_sekolah ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Nomor Identitas Sekolah</label>
            <input type="text" name="nomor_identitas_sekolah" class="form-control" value="{{ old('nomor_identitas_sekolah', $biodata->nomor_identitas_sekolah ?? '') }}">
        </div>

        <div class="mb-3">
            <label>NPSN</label>
            <input type="text" name="NPSN" class="form-control" value="{{ old('NPSN', $biodata->NPSN ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ old('alamat', $biodata->alamat ?? '') }}</textarea>
        </div>

        <div class="mb-3">
            <label>Kelurahan</label>
            <input type="text" name="kelurahan" class="form-control" value="{{ old('kelurahan', $biodata->kelurahan ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan', $biodata->kecamatan ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Kota</label>
            <input type="text" name="kota" class="form-control" value="{{ old('kota', $biodata->kota ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Provinsi</label>
            <input type="text" name="provinsi" class="form-control" value="{{ old('provinsi', $biodata->provinsi ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" value="{{ old('kode_pos', $biodata->kode_pos ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control" value="{{ old('status', $biodata->status ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Kelompok TK</label>
            <input type="text" name="kelompok_tk" class="form-control" value="{{ old('kelompok_tk', $biodata->kelompok_tk ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Akreditasi</label>
            <input type="text" name="akreditasi" class="form-control" value="{{ old('akreditasi', $biodata->akreditasi ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Tahun Berdiri</label>
            <input type="number" name="tahun_berdiri" class="form-control" value="{{ old('tahun_berdiri', $biodata->tahun_berdiri ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Tahun Diresmikan</label>
            <input type="date" name="tahun_diresmikan" class="form-control" value="{{ old('tahun_diresmikan', $biodata->tahun_diresmikan ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Kegiatan Belajar</label>
            <textarea name="kegiatan_belajar" class="form-control">{{ old('kegiatan_belajar', $biodata->kegiatan_belajar ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
