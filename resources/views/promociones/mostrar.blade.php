
@foreach ($promociones as $promocion)
    <tr>
        <td>{{$promocion->id}}</td>
        <td>{{$promocion->descripcionPro}}</td>
        <td>{{$promocion->fecha_inicio}}</td>
        <td>{{$Promocion->fecha_final}}</td>
        <td>{{$Promocion->id_clientes}}</td>

    </tr>
    @endforeach
    </table>
