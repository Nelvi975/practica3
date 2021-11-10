
<table border="1" cellspacing="0">
    <tr>
        <th>id derivacons</th>
        <th>destinoDer</th>
        <th>fechDer</th>
        <th>id_queja</th>

    </tr>

    @foreach ($derivaciones as $derivacion)
        <tr>
            <td>{{$derivacion->id}}</td>
            <td>{{$derivacion->destinoDer}}</td>
            <td>{{$derivacion->fechaDer}}</td>
            <td>{{$derivacion->id_quejas}}</td>

        </tr>
    @endforeach
</table>

