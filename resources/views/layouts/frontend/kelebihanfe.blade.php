`@extends('layouts.appfe')

@push('style')
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header" data-aos="fade-in" data-aos-delay="200">
            <h3 class="text-dark">Kelebihan TK Islam Nurul Falah</h3>
        </div>
        <div class="section-body">
            
                @foreach($kelebihans as $index => $kelebihan)
                <div class="row align-items-center mb-5" data-aos="fade-left" data-aos-delay="100">
                    @if($loop->index % 2 == 0)
                        <div class="col-md-5 text-center mb-3 mb-md-0">
                            <div class="shadow rounded overflow-hidden">
                                <img src="{{ asset('storage/kelebihan/'.$kelebihan->gambar) }}" 
                                     alt="Kelebihan" 
                                     class="img-fluid"
                                     style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="p-3 rounded bg-white shadow-sm">
                                <p class="mb-0 text-dark" style="font-size: 1.1rem; line-height: 1.8;">
                                    {{ $kelebihan->kelebihan }}
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="col-md-7 order-2 order-md-1"data-aos="fade-right" data-aos-delay="200">
                            <div class="p-3 rounded bg-white shadow-sm">
                                <p class="mb-0 text-dark" style="font-size: 1.1rem; line-height: 1.8;">
                                    {{ $kelebihan->kelebihan }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 text-center order-1 order-md-2 mb-3 mb-md-0">
                            <div class="shadow rounded overflow-hidden">
                                <img src="{{ asset('storage/kelebihan/'.$kelebihan->gambar) }}" 
                                     alt="Kelebihan" 
                                     class="img-fluid"
                                     style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
            
            
        </div>
    </section>
</div>
@endsection

@push('style')
@endpush
