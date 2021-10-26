@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">

                        <form method="post" action="/Cliente">
                            @csrf
                            <input type="text" name="codigo" placeholder="Cod"><br>
                            <input type="text" name="nombreCliente" placeholder="Ingrese nombre"><br>
                            <input type="text" name="direccionCliente" placeholder="Ingrese direccion"><br>
                            <input type="text" name="emailCliente" placeholder="Ingrese email del cliente"><br>
                            <input type="text" name="calificacionCliente" placeholder="1Ingrese calificacion"><br>
                            <input type="text" name="id_servicios" placeholder="Ingrese servicios"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
