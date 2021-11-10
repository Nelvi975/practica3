@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">EDITAR</div>

                    <div class="card-body">

                        <form method="post" action="/Queja/{{$Quejas->id}}">
                            @csrf
                            <input type="text" name="autogenerado_queja" value="{{$Quejas->autogenerado_queja}}" placeholder="autogenerado"><br>
                            <input type="text" name="motivo_queja" value="{{$Quejas->motivo_queja}}" placeholder="Ingrese motivo"><br>
                            <input type="text" name="fecha_recepcion" value="{{$Quejas->fecha_recepcion}}" placeholder="Ingrese fecha"><br>
                            <input type="text" name="id_clientes" value="{{$Quejas->id_clientes}}" placeholder="Ingrese clientes"><br>
                            <input type="text" name="id_usuarios" value="{{$Quejas->id_usuarios}}"  placeholder="Ingrese servicios"><br>
                            <input type="submit" name="submit" Value="Guardar">
                            @method("PUT")
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
