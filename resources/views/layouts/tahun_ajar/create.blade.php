@extends('layouts.app')

@section('title','tahunAjar')

@push('style')
@endpush

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <form action="{{route('tahunajar.store')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_tahun_ajar">Tahun</label>
                    <input type="text" name="nama_tahun_ajar" class="form-control" id="nama_tahun_ajar" required>
                </div>
                <div class="mb-3">
                    <label for="semester">semester</label>
                    <select name="semester" id="semester" class="form-control" required>
                        <option value="genap">Genap</option>
                        <option value="ganjil">Ganjil</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Non-Aktif</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        
    </section>
</div>

@endsection

@push('script')
@endpush