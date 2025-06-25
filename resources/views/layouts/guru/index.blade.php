@extends('layouts.app')

@section('title', 'Daftar Guru')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Daftar Guru</h1>
            <a href="{{ route('guru.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Guru
            </a>
        </div>
        


        <div class="section-body">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Foto</th>
                                <th>Jabatan</th>
                                <th>Nama</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($gurus as $guru)
                            <tr>
                                <td class="text-center">
                                    @if($guru->foto)
                                        <img src="{{ asset('storage/foto/' . $guru->foto) }}" 
                                             alt="Foto {{ $guru->nama }}" 
                                             class="img-thumbnail rounded" 
                                             style="width: 100px; height: 100px; object-fit: cover;">
                                    @else
                                        <span class="text-muted">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>{{ $guru->jabatan }}</td>
                                <td>{{ $guru->nama }}</td>
                                <td class="text-center">
                                    <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Belum ada data guru.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
