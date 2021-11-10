
                    <table border="1" cellspacing="0">
                        <tr>
                            <th>id queja</th>
                            <th>autogenerado</th>
                            <th>motivo</th>
                            <th>fecha_recepcion</th>
                            <th>idQueja</th>
                            <th>id_usuario</th>

                        </tr>

                        @foreach ($quejas as $queja)
                            <tr>
                                <td>{{$queja->id}}</td>
                                <td>{{$queja->autogenerado_queja}}</td>
                                <td>{{$queja->motivo_queja}}</td>
                                <td>{{$queja->fecha_recepcion}}</td>
                                <td>{{$queja->id_clientes}}</td>
                                <td>{{$queja->id_usuarios}}</td>
                                <td><a href="Queja/{{$queja['id']}}/edit">Actualizar</a></td>
                                <td>
                                    <form method='post' action='Queja/{{$queja->id}}'>
                                        <input type='submit' value='Eliminar'>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

