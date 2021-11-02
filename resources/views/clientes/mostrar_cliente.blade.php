@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mostrar</div>

                    <div class="card-body">

                        <table border="1" cellspacing="0">

                            <tr>
                                <th>Id</th>
                                <th>codigo</th>
                                <th>nombres</th>
                                <th>direccion</th>
                                <th>correo</th>
                                <th>calificacion</th>
                                <th>Id-servicios</th>

                            </tr>

                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->codigo}}</td>
                                    <td>{{$cliente->nombresCliente}}</td>
                                    <td>{{$cliente->direccionCliente}}</td>
                                    <td>{{$cliente->emailCliente}}</td>
                                    <td>{{$cliente->calificacionCliente}}</td>
                                    <td>{{$cliente->id_servicios}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
