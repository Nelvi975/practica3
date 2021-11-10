<table border="1" cellspacing="0">
    <tr>
        <th>id servicio</th>
        <th>nombres_servio</th>


    </tr>

    @foreach ($servicios as $servicio)
        <tr>
            <td>{{$servicio->id}}</td>
            <td>{{$servicio->nombres_servio}}</td>


        </tr>
    @endforeach
</table>

