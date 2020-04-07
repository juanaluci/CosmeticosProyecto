@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>   Local De Cosmeticos</h1></center>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Infomacion de los Cosmeticos Ingresados</h1></tr></td></center>
              <center>  <a href="{{route('cosmeticos.create')}}" class="btn btn-primary pull-rigth">Nuevo</a>
                <a href="http://localhost:8000/" class="btn btn-success">Regresar</a></center>
                </div>
                <div class="card-body">
                    <center> <table>
                         <thead>
                        <tr>
                            <th>Id</th>
                            <th>Marca</th>
                            <th>Categoria</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                            </thead>
                    <tbody>
                <!-- Esto es un comentario -->
                @foreach ($cosmeticos as $cosmetico)
                <tr>
                        <td>{{$cosmetico->id}}</td>
                        <td>{{$cosmetico->marca->marca}}

                        <td>{{$cosmetico->categoria->categoria}}</td>
                        <td>{{$cosmetico->codigo}}</td>
                        <td>{{$cosmetico->nombre}}</td>
                        <td>{{$cosmetico->descripcion}}</td>
                        <td>{{$cosmetico->estado}}</td>
                        <td>
                        <a href="{{route('cosmeticos.edit', $cosmetico->id)}}" class="btn btn-success">Editar</a>

                </td>
                <td>
                <form method="post" action="{{url('/cosmeticos/'.$cosmetico->id)}}">

<button type="submit" onclick="return confirm('Deseas borrar');"class="  btn btn-danger">Borrar</button>
{{csrf_field()}}
{{method_field('DELETE')}}

</form>


                </td>
                </tr>
@endforeach
                    </tbody>
                     </table></center>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
