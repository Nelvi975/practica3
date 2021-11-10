@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">

                        <form method="post" action="/Derivacion">
                            @csrf
                            <input type="text" name="destinoDer" placeholder="Destino"><br>
                            <input type="text" name="fechaDer" placeholder="Ingrese fecha"><br>
                            <input type="text" name="id_quejas" placeholder="Ingrese queja"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
