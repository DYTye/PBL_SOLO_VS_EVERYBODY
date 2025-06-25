@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>Kenangan Kelas {{ $raport->kelas->nama }}</h1>
            <a href="{{ route('kenanganitem.create', $raport->id) }}" class="btn btn-primary">Tambah Kenangan</a>
            {{-- <a href="{{ route('kenang.index') }}" class="btn btn-secondary">Kembali</a> --}}
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Halaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kenanganitems as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>
                                @if($item->gambar)
                                    <img src="{{ asset('storage/kenangan/' . $item->gambar) }}" alt="Gambar" width="80">
                                @else
                                    Tidak ada gambar
                                @endif
                            </td>
                            <td>{{$item->halaman}}</td>
                            <td>
                                <a href="{{ route('kenanganitem.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('kenanganitem.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Hapus item ini?')" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada item kenangan untuk kelas ini.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
