@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Último consecutivo ingresado</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div> --}}
    {{-- aqui la otra dependencia de mostrar el codigo consecutivo y el color --}}
    {{-- <ultimoconsecutivo-component></ultimoconsecutivo-component> --}}
    {{-- tabla dependencias --}}
    <dependencia-component></dependencia-component>

</div>
@endsection
