@extends('layouts.app')

@push('script')
@endpush

@section('content')
    <div class="main-content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('visi.store') }}" method="POST">
            @csrf
        
            <h4>Visi</h4>
            <div id="visi-container">
                @forelse ($visi as $item)
                    <input type="text" name="visi[]" value="{{ $item }}" class="form-control mb-3">
                @empty
                    <input type="text" name="visi[]" class="form-control mb-3">
                @endforelse
            </div>
            <button type="button" onclick="addInput('visi')" class="btn btn-sm btn-success mb-4">+ Tambah Visi</button>
        
            <h4>Misi</h4>
            <div id="misi-container">
                @forelse ($misi as $item)
                    <input type="text" name="misi[]" value="{{ $item }}" class="form-control mb-3">
                @empty
                    <input type="text" name="misi[]" class="form-control mb-3">
                @endforelse
            </div>
            <button type="button" onclick="addInput('misi')" class="btn btn-sm btn-success mb-4">+ Tambah Misi</button>
        
            <h4>Tujuan</h4>
            <div id="tujuan-container">
                @forelse ($tujuan as $item)
                    <input type="text" name="tujuan[]" value="{{ $item }}" class="form-control mb-3">
                @empty
                    <input type="text" name="tujuan[]" class="form-control mb-3">
                @endforelse
            </div>
            <button type="button" onclick="addInput('tujuan')" class="btn btn-sm btn-success mb-4">+ Tambah Tujuan</button>
        
            <br>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
        
        <script>
            function addInput(type) {
                const input = `<input type="text" name="${type}[]" class="form-control mb-3">`;
                document.getElementById(`${type}-container`).insertAdjacentHTML('beforeend', input);
            }
        </script>
        



    </div>
@endsection

@push('script')
@endpush
