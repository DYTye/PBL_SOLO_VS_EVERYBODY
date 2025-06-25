@extends('layouts.app')

@push('script')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between align-items-center w-100">
            <h1>Visi Misi Sekolah</h1>
                        
            <a href="{{ route('visi.create') }}" class="btn btn-success"> <i class="fas fa-edit"></i>
                Edit Visi Misi</a>
        </div>

        <div class="section-body">

                <div class="card">
                    <div class="card-body">
                        @if ($visis->isEmpty())
                            <p class="text-muted">Belum ada data visi/misi yang ditambahkan.</p>
                        @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Jenis</th>
                                        <th>Isi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visis as $visi)
                                        <tr>
                                            <td><strong>{{ ucfirst($visi->jenis) }}</strong></td>
                                            <td>{{ $visi->isi }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            
        </div>
    </section>
</div>
@endsection

@push('script')
@endpush
