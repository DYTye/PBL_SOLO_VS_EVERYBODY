@extends('layouts.app')

@section('title', 'table berita')

@push('style')
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header d-flex justify-content-between align-items-center w-100">
                <h1>Berita</h1>
                <a href="{{route('berita.create')}}" class="btn btn-success" > <i class="fas fa-plus"></i>Tambah Berita</a>
            </div>
            
            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card" style="height: 600px">
                            <div class="card-header">
                                <h4>{{ $berita->judul_berita }}</h4>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" alt="Gambar Berita" class="img-fluid mb-3" style="height: 200px" />
                                <p>{{ Str::limit(strip_tags($berita->isi_berita), 200, '...') }}</p>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('beritafe.show', $berita->id) }}" class="btn btn-primary">Read More</a>
  
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
    
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            
            
        </section>
    </div>
@endsection

@push('scripts')
@endpush
