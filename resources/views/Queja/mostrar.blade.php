<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mostrar Queja
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table border="1" cellspacing="0">
                        <tr>
                            <th>id queja</th>
                            <th>autogenerado</th>
                            <th>motivo</th>
                            <th>fecha_recepcion</th>
                            <th>idQueja</th>

                        </tr>

                        @foreach ($quejas as $queja)
                            <tr>
                                <td>{{$queja->id}}</td>
                                <td>{{$queja->autogenado_queja}}</td>
                                <td>{{$queja->motivo_queja}}</td>
                                <td>{{$producto->fecha_recepcion}}</td>
                                <td>{{$producto->idQueja}}</td>

                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

