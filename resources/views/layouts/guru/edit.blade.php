@extends('layouts.app')

@section('content')
    <div class="main-content">

        <div class="container">
            <h2>Edit Data Guru</h2>
            <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Input Nama -->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="{{ old('nama', $guru->nama) }}" maxlength="50" required>
                </div>
                <!-- Input Jabatan -->
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                        value="{{ old('jabatan', $guru->jabatan) }}" required>
                </div>
                <!-- Input Foto -->
                <div class="form-group">
                    <label for="foto">Foto</label>
                    @if ($guru->foto)
                        <div>
                            <img src="{{ asset('storage/foto/' . $guru->foto) }}" alt="Foto Guru"
                                class="img-thumbnail" style="width:120px; height:120px; object-fit:cover;">
                        </div>
                    @endif
                    <input type="file" class="form-control-file" id="foto" name="foto">
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            
        </div>


</div>

</div>
@endsection
