@extends('layouts.appfe')
@push('style')
<style>
    table td, table th {
        word-break: break-word;
        white-space: normal;
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>
@endpush

@section('content')
    <div class="main-content">
        <div class="section">
            <section class="section">
                <div class="section-header" data-aos="fade-in" data-aos-delay="200" >
                    <h3 class="text-dark">Profil TK Islam Nurul Falah</h3>
                </div>


                
                    <div class="section-title">
                        <h5>BIODATA SEKOLAH</h3>
                    </div>
                

                    <div class="card shadow-sm border-0 rounded-4 mb-4">
                        <div class="card-body p-4">
                            @foreach ($biodata as $sekolah)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Nama Sekolah</strong>
                                        <span>{{ $sekolah->nama_sekolah ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Nomor Statistik Sekolah</strong>
                                        <span>{{ $sekolah->nomor_statistik_sekolah ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Nomor Identitas Sekolah</strong>
                                        <span>{{ $sekolah->nomor_identitas_sekolah ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>NPSN</strong>
                                        <span>{{ $sekolah->NPSN ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Alamat</strong>
                                        <span>{{ $sekolah->alamat ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Kelurahan</strong>
                                        <span>{{ $sekolah->kelurahan ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Kecamatan</strong>
                                        <span>{{ $sekolah->kecamatan ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Kota</strong>
                                        <span>{{ $sekolah->kota ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Provinsi</strong>
                                        <span>{{ $sekolah->provinsi ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Kode Pos</strong>
                                        <span>{{ $sekolah->kode_pos ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Status</strong>
                                        <span>{{ $sekolah->status ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Kelompok TK</strong>
                                        <span>{{ $sekolah->kelompok_tk ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Akreditasi</strong>
                                        <span>{{ $sekolah->akreditasi ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Tahun Berdiri</strong>
                                        <span>{{ $sekolah->tahun_berdiri ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Tahun Diresmikan</strong>
                                        <span>{{ $sekolah->tahun_diresmikan ?? '-' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <strong>Kegiatan Belajar</strong>
                                        <span>{{ $sekolah->kegiatan_belajar ?? '-' }}</span>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    

                    <div class="section-title">
                        <h4>Visi Misi dan Tujuan</h4>
                    </div>
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
                                            "{{ $visi->isi }}"
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


                    <div class="section mt-3" data-aos="fade-up" data-aos-delay="200">
                        <section class="section">
                            <div class="section-title mt-3">
                                <h5 class="mb-4">Branding TK Islam Nurul Falah</h5>
                                <p class="text-center mt-4">"TK Islam Nurul Falah – Cerdas, Berakhlak, dan Cinta Budaya"
                                </p>
                            </div>
                            <div>
                                <p class="text-center">TK Islam Nurul Falah adalah taman kanak-kanak yang mengintegrasikan nilai-nilai Islam, budaya Minangkabau, dan literasi teknologi untuk membentuk generasi muda yang beriman, cerdas, berakhlak, dan siap menghadapi zaman.

                                    Dengan prinsip Adat Basandi Syara', Syara' Basandi Kitabullah, kami menciptakan lingkungan belajar yang menyenangkan, penuh kasih sayang, dan mendukung perkembangan holistik anak sejak usia dini.</p>
                            </div>

                        </section>
                    </div>



                </div>
            </section>
        </div>
    @endsection

    @push('script')
    
    @endpush
