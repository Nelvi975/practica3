@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">

                        <form method="post" action="/Promociones">
                            @csrf
                            <input type="text" name="descripcionPro" placeholder="Descripcion"><br>
                            <input type="text" name="fecha_inicio" placeholder="Ingrese fecha inicial"><br>
                            <input type="text" name="fecha_final" placeholder="Ingrese fecha final"><br>
                            <input type="text" name="objetivo" placeholder="Ingrese objetivo"><br>
                            <input type="text" name="id_cliente" placeholder="Ingrese cliente"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
