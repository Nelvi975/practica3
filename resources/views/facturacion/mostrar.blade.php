<table border="1" cellspacing="0">
    <tr>
        <th>id facturacion</th>
        <th>montoFac</th>
        <th>fchaPago</th>
        <th>id_clientes</th>

    </tr>

@foreach ($facturaciones as $facturacion)
    <tr>
        <td>{{$facturacion->id}}</td>
        <td>{{$facturacion->montoFac}}</td>
        <td>{{$facturacion->fechaPago}}</td>
        <td>{{$facturacion->id_clientes}}</td>

    </tr>
    @endforeach
    </table>

