

@extends('layouts.app')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
        <h1>Daftar Raport Kenangan</h1>
        <a href="{{ route('kenang.create') }}" class="btn btn-primary">+ Tambah Raport</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Judul</th>
                <th>Kelas</th>
                <th>Tahun Ajar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($raports as $index => $raport)
                <tr>
                    <td>{{ $raport->judul }}</td>
                    <td>{{ $raport->kelas->nama }}</td>
                    <td>{{ $raport->tahunajar->nama_tahun_ajar}}</td>

                    
                    <td>
                        <a href="{{ route('kenang.show', $raport->id) }}" class="btn btn-info">
                            Lihat Raport
                        </a>
                    
                        <a href="{{ route('kenangan.pdf', $raport->id) }}" class="btn btn-success" target="_blank">
                            Download PDF
                        </a>
                    
                        <a href="{{ route('kenanganitem.index', $raport->id) }}" class="btn btn-primary">
                            Detail Kenangan
                        </a>
                    
                        <a href="{{ route('kenang.edit', $raport->id) }}" class="btn btn-warning">
                            Edit
                        </a>
                    
                        <form action="{{ route('kenang.destroy', $raport->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Hapus raport ini?')">Hapus</button> 
                        </form>
                    </td>
                    
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada raport kenangan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </section>
</div>
@endsection
@push('script')
@endpush