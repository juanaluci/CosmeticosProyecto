@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>   Local De Cosmeticos</h1></center>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Editar La Informacion De Cosmetico</h1></tr></td></center>
                </div>
                <div class="card-body">

                   {!! Form::model($cosmetico, ['route'=>['cosmeticos.update',$cosmetico->id],'method'=>'PUT'])!!}
                   @include('sistema.cosmeticos.parciales.formulario')
                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
