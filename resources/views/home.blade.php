@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="container mt-4">
        {{-- Dashboard --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>


<div class="row mb-3">
    <div class="col-md-12">
        <div class="card h-100">
            <div class="card-header">
                Data Sekolah
            </div>
            <div class="card-body">
                Isi dari card 
                
                
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-header">
                Siswa
            </div>
            <div class="card-body">
                mantap
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-header">
                Guru
            </div>
            <div class="card-body">
                mantap
            </div>
        </div>
    </div>
</div>

    </div>
</div>
@endsection
