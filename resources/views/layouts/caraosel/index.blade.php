@extends('layouts.app')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <div class="section">
        <section class="section">
            <div class="section-header d-flex justify-content-between align-items-center w-100">
                <h1>Caraosel</h1>
                <a href="{{ route('caraosel.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Tambah Caraosel
                </a>
            </div>


            
        <div class="card">
            <table class="table table-striped">
                <thead>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach($caraosels as $caraosel)
                <tr>
                    <td>{{ $caraosel->judul }}</td>
                    <td>{{ $caraosel->isi }}</td>
                    <td>
                        @if($caraosel->gambar)
                            <img src="{{ asset('storage/gambar/' . $caraosel->gambar) }}" class="img-thumbnail" style="width: auto; height: 150px; object-fit: cover;">
                        @else
                            Tidak ada foto
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('caraosel.edit', $caraosel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('caraosel.destroy', $caraosel->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
            </table>
        </div>
        </section>
    </div>
</div>
@endsection

@push('script')
@endpush