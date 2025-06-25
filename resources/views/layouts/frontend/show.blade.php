@extends('layouts.appfe')

@section('content')
    <div class="main-content">
        <h1>{{ $berita->judul_berita }}</h1>
        <p>kategori: {{ $berita->kategori->kategori ?? '-' }}</p>
        <div class="text-center">
            <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" 
                 alt="Gambar Berita" 
                 class="img-fluid rounded" 
                 style="max-height: 400px; object-fit: contain;" />
        </div>
        
        

        <p><strong>Ditulis pada:</strong> {{ $berita->created_at->format('d M Y') }}</p>
    
        <hr>
    
        <div>
            {!! $berita->isi_berita !!}
        </div>
    </div>


@endsection
