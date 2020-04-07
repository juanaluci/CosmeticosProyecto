@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>   Local De Cosmeticos</h1></center>
    <div class="row justify-content-center">
        @include('danger.error')
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Ingresar La Informacion de Los Cosmeticos</h1></tr></td></center>
                </div>
                <div class="card-body">
                   {!! Form::open(['route'=>['cosmeticos.store']]) !!}
                   @include('sistema.cosmeticos.parciales.formulario')
                   {!! Form::close() !!}



                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
