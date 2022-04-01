@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection


@section('contenido')
    <a href="cursos/create" class="btn btn-success mb-3">CREAR</a>

        <table id="cursos" class="table table-hover table-striped table-bordered mt-4 align-middle" style="width: 100%">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">NOMBRE</th>
                <th scope="col">UNIDAD ACADEMICA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr class="text-center">
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->unidad_academica}}</td>
                <td>
                    <form action="{{ route ('cursos.destroy', $curso->id)}}" method="POST">
                        <a href="/cursos/{{$curso->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#cursos').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
                "language": {
                    "decimal":        "",
                    "emptyTable":     "No hay datos disponibles en la tabla",
                    "info":           "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                    "infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
                    "infoFiltered":   "(filtrado de _MAX_ entradas totales)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Mostrar _MENU_ cursos",
                    "loadingRecords": "Cargando...",
                    "processing":     "Procesando...",
                    "search":         "Búsqueda:",
                    "zeroRecords":    "No se encontraron registros coincidentes",

                    "paginate": {
                        "first":      "Primero",
                        "last":       "Último",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                }
                },

            });
        } );
    </script>
@endsection

@endsection
