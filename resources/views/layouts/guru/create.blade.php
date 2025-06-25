@extends('layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Tambah Guru</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Guru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <!-- Input Nama -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" maxlength="50" required>
                    </div>
                
                    <!-- Input Jabatan -->
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                    </div>
                
                    <!-- Input Foto -->
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" required>
                    </div>
                
                
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                
            </div>
        </div>
    </div>
</section>
</div>
@endsection
