@extends('layouts.app')

@section('title', 'Edit Kelebihan Sekolah')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Kelebihan TK Islam Nurul Falah</h1>
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

            <form action="{{ route('kelebihan.update', $kelebihan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="gambar" class="form-label fw-bold">Upload Gambar Kelebihan</label>
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white">
                            <i class="fas fa-image"></i>
                        </span>
                        <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*">
                    </div>
                    <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>

                    @if($kelebihan->gambar)
                        <div class=" preview-gambar mt-3">
                            <img src="{{ asset('storage/kelebihan/' . $kelebihan->gambar) }}" alt="Preview Gambar" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="kelebihan" class="form-label">Deskripsi Kelebihan Sekolah</label>
                    <textarea name="kelebihan" id="kelebihan" class="form-control" rows="5">{{ old('kelebihan', $kelebihan->kelebihan) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('kelebihan.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </section>
</div>
@endsection
@push('script')
<script>
    document.getElementById('gambar').addEventListener('change', function (event) {
        const [file] = this.files;
        if (file) {
            const preview = document.createElement('img');
            preview.src = URL.createObjectURL(file);
            preview.style.maxHeight = '200px';
            preview.classList.add('img-fluid', 'mt-2', 'rounded', 'shadow-sm');
            const container = this.closest('.mb-3').querySelector('.preview-gambar');
            container.innerHTML = '';
            container.appendChild(preview);
        }
    });
</script>
@endpush
