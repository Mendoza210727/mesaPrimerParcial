@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-2">
            <div class="card">
                <div class="card-header text-center">{{ __('Herramienta de colaboración') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{ asset('vendor/adminlte/dist/img/logo22.jpg') }}" alt="" class="w-50">
                            </div>
                            <div class="text-center">
                                <h5>Bienvenido !!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
