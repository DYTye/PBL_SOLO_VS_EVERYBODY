@extends('layouts.app')

@section('title', 'Daftar Kelebihan Sekolah')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelebihan TK Islam Nurul Falah</h1>
            <div class="ml-auto">
                <a href="{{ route('kelebihan.create') }}" class="btn btn-primary">+ Tambah Kelebihan</a>
            </div>
        </div>

        <div class="section-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="row">
                @foreach ($kelebihans as $item)
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <img src="{{ asset('storage/kelebihan/' . $item->gambar) }}" class="card-img-top" alt="Gambar Kelebihan" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <p class="card-text">{{ $item->kelebihan }}</p>
                            <a href="{{ route('kelebihan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('kelebihan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if ($kelebihans->isEmpty())
                <div class="alert alert-info">Belum ada kelebihan yang ditambahkan.</div>
            @endif
        </div>
    </section>
</div>
@endsection
