@extends('layouts.app')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <div class="section">
        <section class="section">
            <div class="section-header"><h3>Edit Caraosel</h3></div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <form action="{{ route('caraosel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="isi">Isi</label>
                    <input type="text" name="isi" id="isi" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </section>
    </div>
</div>
@endsection

@push('style')
@endpush