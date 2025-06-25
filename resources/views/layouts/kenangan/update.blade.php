@extends('layouts.app')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Edit Raport Kenangan</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('kenang.update', $kenangan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $kenangan->judul) }}" required>
            </div>

            <div class="mb-3">
                <label for="kelas_id">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-control" required>
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelasList as $kelas)
                        <option value="{{ $kelas->id }}" {{ old('kelas_id', $kenangan->kelas_id) == $kelas->id ? 'selected' : '' }}>
                            {{ $kelas->nama }}
                        </option>
                    @endforeach
                </select>
            </div> 

            <div class="mb-3">
                <label for="tahun_ajar_id">Tahun Ajar</label>
                <select name="tahun_ajar_id" id="tahun_ajar_id" class="form-control" required>
                    <option value="">-- Pilih Tahun Ajar --</option>
                    @foreach ($THL as $tahun_ajar)
                        <option value="{{ $tahun_ajar->id }}" {{ old('tahun_ajar_id', $kenangan->tahun_ajar_id) == $tahun_ajar->id ? 'selected' : '' }}>
                            {{ $tahun_ajar->nama_tahun_ajar }}
                        </option>
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
