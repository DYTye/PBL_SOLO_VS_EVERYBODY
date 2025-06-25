@extends('layouts.appfe')

@push('style')
    <style>
        <style>@media (max-width: 576px) {
            .card-title {
                font-size: 14px;
            }

            .card-text {
                font-size: 13px;
            }

            .card-header {
                font-size: 14px;
            }

            .carousel img {
                height: 180px;
                object-fit: cover;
            }

            .section-header h4,
            .section-title h4 {
                font-size: 18px;
            }

            .main-content p {
                font-size: 14px;
            }

            .sambutan-img {
                width: 100%;
                max-width: 200px;
            }
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-img-top {
            height: 160px;
            object-fit: cover;
        }

        .section-title h4 {
            border-bottom: 3px solid #007bff;
            display: inline-block;
            padding-bottom: 5px;
        }

        .carousel-inner .carousel-item {
            transition: transform 0.6s ease;

        }

        body {
            overflow-x: hidden !important;
        }

        [data-aos] {
            will-change: unset !important;
            /* biar lebih stabil */
        }

        
    </style>
    </style>
@endpush
@if (request()->has('noanim'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('[data-aos]').forEach(el => {
                el.removeAttribute('data-aos');
                el.style.opacity = '1';
                el.style.transform = 'none';
            });
        });
    </script>
@endif


@section('content')
    <div class="main-content">

        {{-- Carousel --}}
        <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($caraosels as $caraosel)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('storage/gambar/' . $caraosel->gambar) }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white">{{ $caraosel->judul }}</h5>
                            <p class="text-white">{{ $caraosel->isi }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

        <div class="overflow-auto berita-scroll" style="white-space: nowrap;" data-aos="fade-right" data-aos-delay="200">
            @foreach ($beritas as $berita)
                <div class="d-inline-block" style="width: 300px;height:400px ;margin-right: 15px;">
                    <div class="card h-100 shadow-sm rounded-4 border-0">

                        <div class="card-body pb-2">
                            <img src="{{ asset('storage/gambar/' . $berita->gambar) }}" alt="Gambar Berita"
                                class="img-fluid rounded mb-2 w-100" style="height: 150px; object-fit: cover;" />
                            <h6 class="fw-bold mb-2 berita-judul">{{ $berita->judul_berita }}</h6>


                            <p class="preview-text text-dark">
                                {{ strip_tags($berita->isi_berita) }}
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pt-0">
                            <a href="{{ route('beritafe.show', $berita->id) }}" class="btn btn-sm btn-outline-primary me-1">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="py-4 mb-5 mt-3" data-aos="fade-right" data-aos-delay="200"
            style="background-image: url('{{ asset('img/header.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row text-center" data-aos="fade-right" data-aos-delay="300">

                    @php
                        $data = [
                            ['icon' => 'fas fa-user-graduate', 'value' => $infos->jumlah_siswa, 'label' => 'Siswa'],
                            ['icon' => 'fas fa-chalkboard-teacher', 'value' => $infos->jumlah_guru, 'label' => 'Guru'],
                            ['icon' => 'fas fa-door-open', 'value' => $infos->jumlah_kelas, 'label' => 'Kelas'],
                            ['icon' => 'fas fa-award', 'value' => $infos->jumlah_prestasi, 'label' => 'Prestasi'],
                        ];
                    @endphp

                    @foreach ($data as $item)
                        <div class="col-6 col-md-3 mb-3">
                            <div class="card shadow-sm border-0 py-3 px-2 h-100" style="min-height: 150px;">
                                <div class="card-body p">
                                    <i class="{{ $item['icon'] }} fa-lg text-success mb-2"></i>
                                    <h4 class="fw-bold">{{ $item['value'] }}</h4>
                                    <p class="mb-0">{{ $item['label'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>



        <section class="section">
            <!-- VISI -->
            <div class="card shadow-sm border-0 rounded-4 mb-4">
                <div class="card-body" >
                    <h4 class="font-weight-bold mb-4 text-success text-center pt-2">
                        Visi
                    </h4>
                    <ul class="list-group list-group-flush text-center" data-aos="fade-up" data-aos-delay="300">
                        @foreach ($visis as $visi)
                            @if ($visi->jenis == 'visi')
                                <li class="list-group-item " >
                                    <span class="font-italic">“{{ $visi->isi }}”</span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- MISI & TUJUAN -->
            <div class="row">
                <!-- MISI -->
                <div class="col-md-6 mb-4 d-flex" >
                    <div class="card shadow-sm border-0 rounded-4 equal-height w-100">
                        <div class="card-body d-flex flex-column" >
                            <h4 class="font-weight-bold mb-4 text-success text-center pt-2">
                                 Misi
                            </h4>
                            <ul class="list-group list-group-flush text-center flex-grow-1">
                                @foreach ($visis as $visi)
                                    @if ($visi->jenis == 'misi')
                                        <li class="list-group-item" data-aos="fade-up"
                                            data-aos-delay="{{ $loop->index * 100 }}">
                                            {{ $visi->isi }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- TUJUAN -->
                <div class="col-md-6 mb-4 d-flex" >
                    <div class="card shadow-sm border-0 rounded-4 equal-height w-100">
                        <div class="card-body d-flex flex-column">
                            <h4 class="font-weight-bold mb-4 text-success text-center pt-2">
                                Tujuan
                            </h4>
                            <ul class="list-group list-group-flush text-center flex-grow-1">
                                @foreach ($visis as $visi)
                                    @if ($visi->jenis == 'tujuan')
                                        <li class="list-group-item" data-aos="fade-up"
                                            data-aos-delay="{{ $loop->index * 100 }}">
                                            <span class="font-italic">“{{ $visi->isi }}”</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title" data-aos="fade-up" data-aos-delay="200">
                <h4>Sambutan Kepala Sekolah</h4>
            </div>
            <div class="row my-4 align-items-stretch" data-aos="fade-up">
                {{-- Card Kepala Sekolah --}}
                <div class="col-md-6 col-12 d-flex justify-content-center mb-4 mb-md-0">
                    @if ($kepsek)
                        <div class="card shadow h-100 w-100" style="max-width: 400px;">
                            <img src="{{ asset('storage/foto/' . $kepsek->foto) }}" class="card-img-top" alt="Foto Kepsek" style="object-fit: cover; height: 400px;">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-1">{{ $kepsek->nama }}</h5>
                                <small class="text-muted">Kepala Sekolah</small>
                            </div>
                        </div>
                    @else
                        <p class="text-danger">Kepala sekolah tidak ditemukan.</p>
                    @endif
                </div>
            
                {{-- Kata Sambutan --}}
                <div class="col-md-6 col-12 d-flex align-items-center text-dark" data-aos="fade-right" data-aos-delay="500">
                    <div>
                        {!! $sambutans->sambutan !!}
                    </div>
                </div>
            </div>
            


            <div data-aos="fade-up" data-aos-delay="200">
                <div class="section-title">
                    <h4>Tenaga Ajar</h4>
                </div>
                <br>

                <div class="container">
                    <div class="row" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($gurus as $guru)
                            @if ($guru->jabatan != 'Kepala sekolah')
                                <div class="col-6 col-md-3 mb-4 d-flex" data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 100 }}">
                                    <div class="card flex-fill d-flex flex-column">
                                        <div style="height: 300px; overflow: hidden;">
                                            <img src="{{ asset('storage/foto/' . $guru->foto) }}"
                                                class="card-img-top w-100 h-100" style="object-fit: cover;"
                                                alt="">
                                        </div>
                                        <div class="card-header">{{ $guru->jabatan }}</div>
                                        <div class="card-body  flex-grow-1 d-flex flex-column">
                                            <h5 class="card-title">{{ $guru->nama }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection

@push('script')
@endpush
