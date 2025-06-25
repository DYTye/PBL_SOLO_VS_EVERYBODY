@extends('layouts.app')

@section('title', 'Tambah Sambutan Kepala Sekolah')

@push('style')
    
@endpush

@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Sambutan Kepala Sekolah</h1>
        </div>

        <div class="section-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('sambutan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="sambutan" class="form-label">Isi Sambutan</label>
                    <textarea name="sambutan" id="sambutan" class="form-control" rows="10">{{ old('sambutan', $sambutans->sambutan) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('sambutan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </section>
</div>

<script>
    let editorInstance;

    ClassicEditor
        .create(document.querySelector('#sambutan'))
        .then(editor => {
            editorInstance = editor;
        })
        .catch(error => {
            console.error(error);
        });

    document.querySelector('form').addEventListener('submit', function () {
        document.querySelector('#sambutan').value = editorInstance.getData();
    });
</script>
@endsection
