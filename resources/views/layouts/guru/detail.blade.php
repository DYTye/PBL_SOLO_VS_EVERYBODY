@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Detail Guru</h1>
        <a href="{{ route('guru.index') }}" class="btn btn-light ml-auto">Kembali ke Daftar Guru</a>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <ul class="list-group mb-3">
                    <li class="list-group-item active">Detail Guru: {{ $guru->nama }}</li>
                    <li class="list-group-item"><strong>Nama:</strong> {{ $guru->nama }}</li>
                    <li class="list-group-item"><strong>NUPTK:</strong> {{ $guru->nuptk ?? '-' }}</li>
                    <li class="list-group-item"><strong>NIP:</strong> {{ $guru->nip ?? '-' }}</li>
                    <li class="list-group-item"><strong>Jenis Kelamin:</strong> {{ $guru->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</li>
                    <li class="list-group-item"><strong>Tempat Lahir:</strong> {{ $guru->tempat_lahir ?? '-' }}</li>
                    <li class="list-group-item"><strong>Tanggal Lahir:</strong> {{ $guru->tanggal_lahir ? $guru->tanggal_lahir->format('d-m-Y') : '-' }}</li>
                    <li class="list-group-item"><strong>Agama:</strong> {{ $guru->agama ?? '-' }}</li>
                    <li class="list-group-item"><strong>No HP:</strong> {{ $guru->hp ?? '-' }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $guru->email ?? '-' }}</li>
                    <li class="list-group-item"><strong>Nama Pasangan:</strong> {{ $guru->nama_pasangan ?? '-' }}</li>
                    <li class="list-group-item"><strong>NIP Pasangan:</strong> {{ $guru->nip_pasangan ?? '-' }}</li>
                    <li class="list-group-item"><strong>Pekerjaan Pasangan:</strong> {{ $guru->pekerjaan_pasangan ?? '-' }}</li>
                    <li class="list-group-item"><strong>Status Kepegawaian:</strong> {{ $guru->status_kepegawaian ?? '-' }}</li>
                    <li class="list-group-item"><strong>Jenis PTK:</strong> {{ $guru->jenis_ptk ?? '-' }}</li>
                    <li class="list-group-item"><strong>NPWP:</strong> {{ $guru->npwp ?? '-' }}</li>
                    <li class="list-group-item"><strong>Nama Ibu Kandung:</strong> {{ $guru->nama_ibu_kandung ?? '-' }}</li>
                    <li class="list-group-item"><strong>Status Perkawinan:</strong> {{ $guru->status_perkawinan ?? '-' }}</li>
                    <li class="list-group-item"><strong>Tugas Tambahan:</strong> {{ $guru->tugas_tambahan ?? '-' }}</li>
                    <li class="list-group-item"><strong>Lisensi Kepala Sekolah:</strong> {{ $guru->sudah_lisensi_kepala_sekolah ? 'Ya' : 'Tidak' }}</li>
                    <li class="list-group-item"><strong>Pernah Diklat Kepengawasan:</strong> {{ $guru->pernah_diklat_kepengawasan ? 'Ya' : 'Tidak' }}</li>
                    <li class="list-group-item"><strong>Keahlian Braille:</strong> {{ $guru->keahlian_braille ? 'Ya' : 'Tidak' }}</li>
                    <li class="list-group-item"><strong>Keahlian Bahasa Isyarat:</strong> {{ $guru->keahlian_bahasa_isyarat ? 'Ya' : 'Tidak' }}</li>
                    <li class="list-group-item"><strong>Tanggal CPNS:</strong> {{ $guru->tanggal_cpns ? $guru->tanggal_cpns->format('d-m-Y') : '-' }}</li>
                    <li class="list-group-item"><strong>SK Pengangkatan:</strong> {{ $guru->sk_pengangkatan ?? '-' }}</li>
                    <li class="list-group-item"><strong>TMT Pengangkatan:</strong> {{ $guru->tmt_pengangkatan ? $guru->tmt_pengangkatan->format('d-m-Y') : '-' }}</li>
                    <li class="list-group-item"><strong>Lembaga Pengangkatan:</strong> {{ $guru->lembaga_pengangkatan ?? '-' }}</li>
                    <li class="list-group-item"><strong>Pangkat/Golongan:</strong> {{ $guru->pangkat_golongan ?? '-' }}</li>
                    <li class="list-group-item"><strong>Sumber Gaji:</strong> {{ $guru->sumber_gaji ?? '-' }}</li>
                </ul>

                <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-warning">Edit Data Guru</a>
                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Yakin ingin hapus data guru ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus Data Guru</button>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
