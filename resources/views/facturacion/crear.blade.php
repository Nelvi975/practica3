@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">

                        <form method="post" action="/Facturacion">
                            @csrf
                            <input type="text" name="montoFac" placeholder="Monto"><br>
                            <input type="text" name="fechaPago" placeholder="Ingrese fecha de pago "><br>
                            <input type="text" name="id_clientes" placeholder="Ingrese cliente"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

