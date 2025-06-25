@extends('layouts.app')

@section('title', 'Form Berita')

@push('style')
@endpush

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="">Berita</h1>
            </div>

            <div class="section-body">
                <h4 class="section-title">Tambah Berita</h4>
                <p class="section-lead">tambahkan berita</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif




                {{-- Form Create Berita --}}
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control" id="judul_berita" required>
                    </div>


                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar" required>
                    </div>

                    <div class="mb-3">
                        <label for="kategori_id">Kategori Berita</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Isi Berita</label>
                        <textarea name="isi_berita" class="form-control" id="isi_berita" rows="4"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
    </div>
    </section>
  
    <script>
        let ckeditorInstance;
    
        ClassicEditor
        
            .create(document.querySelector('#isi_berita'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}"
                }
            })
            .then(editor => {
                ckeditorInstance = editor;
                console.log('Editor initialized', editor);
            })
            .catch(error => {
                console.error('CKEditor init error:', error);
            });
            
    
        // Sync data saat form dikirim
        document.querySelector('form').addEventListener('submit', function(e) {
            const textarea = document.querySelector('#isi_berita');
            textarea.value = ckeditorInstance.getData();
        });
    </script>
    


@endsection

@push('scripts')
@endpush
