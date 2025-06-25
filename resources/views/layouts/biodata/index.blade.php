@extends('layouts.app')

@section('title', 'Form Biodata')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Biodata Sekolah</h1>
            <a href="{{ route('biodata.create') }}" class="btn btn-success"><i class="fas fa-edit"></i>
                Edit Biodata</a>
        </div>
        
        <div class="section-body">
        
            
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Atribut</th>
                                <th>Isi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($biodata as $sekolah)
                                <tr><th>Nama Sekolah</th><td>{{ $sekolah->nama_sekolah ?? '-' }}</td></tr>
                                <tr><th>Nomor Statistik Sekolah</th><td>{{ $sekolah->nomor_statistik_sekolah ?? '-' }}</td></tr>
                                <tr><th>Nomor Identitas Sekolah</th><td>{{ $sekolah->nomor_identitas_sekolah ?? '-' }}</td></tr>
                                <tr><th>NPSN</th><td>{{ $sekolah->NPSN ?? '-' }}</td></tr>
                                <tr><th>Alamat</th><td>{{ $sekolah->alamat ?? '-' }}</td></tr>
                                <tr><th>Kelurahan</th><td>{{ $sekolah->kelurahan ?? '-' }}</td></tr>
                                <tr><th>Kecamatan</th><td>{{ $sekolah->kecamatan ?? '-' }}</td></tr>
                                <tr><th>Kota</th><td>{{ $sekolah->kota ?? '-' }}</td></tr>
                                <tr><th>Provinsi</th><td>{{ $sekolah->provinsi ?? '-' }}</td></tr>
                                <tr><th>Kode Pos</th><td>{{ $sekolah->kode_pos ?? '-' }}</td></tr>
                                <tr><th>Status</th><td>{{ $sekolah->status ?? '-' }}</td></tr>
                                <tr><th>Kelompok TK</th><td>{{ $sekolah->kelompok_tk ?? '-' }}</td></tr>
                                <tr><th>Akreditasi</th><td>{{ $sekolah->akreditasi ?? '-' }}</td></tr>
                                <tr><th>Tahun Berdiri</th><td>{{ $sekolah->tahun_berdiri ?? '-' }}</td></tr>
                                <tr><th>Tahun Diresmikan</th><td>{{ $sekolah->tahun_diresmikan ?? '-' }}</td></tr>
                                <tr><th>Kegiatan Belajar</th><td>{{ $sekolah->kegiatan_belajar ?? '-' }}</td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
@endpush
