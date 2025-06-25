@extends('layouts.appfepdf')

@if (request()->has('pdf'))
    <style>
        * {
            -webkit-print-color-adjust: exact;
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
        }

        .row {
            page-break-inside: avoid;
        }

        .section {
            page-break-after: always;
        }
    </style>
@endif

@push('style')
    <style>
        .main-content {
    margin: 0 !important;
    padding: 0 !important;
    width: 100vw;
    min-height: 100vh;
}

    </style>
@endpush

@section('content')
<div
style="background-image: url('{{ asset('img/bg.jpg') }}'); background-repeat: repeat-y; background-size: 100% auto;">
        <div class="main-content">
            @if (!request()->has('pdf'))
                <script src="aos.js"></script>
                <script>
                    AOS.init();
                </script>
            @endif

            <div class="section">
                <section>
                    <div class="card mt-3">
                        <div class="d-flex justify-content-center my-4">
                            <div class="text-center">
                                <h2 class="mb-2">Raport Kenangan Kelas {{ $raport->kelas->nama }}</h2>
                                <p><strong>Tahun Ajar:</strong> {{ $raport->tahunajar->nama_tahun_ajar ?? '-' }}</p>
                            </div>
                        </div>
                    </div>


                    @forelse ($raport->items as $item)
                        <div class="row align-items-center mb-5" data-aos="fade-left" data-aos-delay="100">
                            @if ($loop->even)
                                <div class="col-md-5 text-center mb-3 mb-md-0">
                                    <div class="shadow rounded overflow-hidden">
                                        <img src="{{ asset('storage/kenangan/' . $item->gambar) }}" alt="Kenangan"
                                            class="img-fluid"
                                            style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="p-3 rounded bg-white shadow-sm">
                                        <p class="mb-0 text-dark" style="font-size: 1.1rem; line-height: 1.8;">
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-7 order-2 order-md-1" data-aos="fade-right" data-aos-delay="200">
                                    <div class="p-3 rounded bg-white shadow-sm">
                                        <p class="mb-0 text-dark" style="font-size: 1.1rem; line-height: 1.8;">
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5 text-center order-1 order-md-2 mb-3 mb-md-0">
                                    <div class="shadow rounded overflow-hidden">
                                        <img src="{{ asset('storage/kenangan/' . $item->gambar) }}" alt="Kenangan"
                                            class="img-fluid"
                                            style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                                    </div>
                                </div>
                            @endif
                        </div>
                    @empty
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-info text-center">Belum ada item kenangan.</div>
                            </div>
                        </div>
                    @endforelse
                </section>
            </div>
        </div>
    </div>
@endsection
