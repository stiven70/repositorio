@extends('layouts.plantillabase')

@section('contenido')
    <a href="cursos/create" class="btn btn-primary">CREAR</a>

        <table class="table table-hover table-striped mt-4 align-middle">
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
                    <form action="{{ route ('cursos.destroy', $curso->id)}}" method="POST" id="formulario-eliminar">
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

@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
                        'Eliminado!',
                        'Su registro ha sido eliminado.',
                        'success'
                    )
    </script>
@endif
<script>

        document.getElementById('formulario-eliminar').addEventListener('submit',function(e){
            e.preventDefault();
                    Swal.fire({
                        title: 'Estas seguro?',
                        text: "No podrás revertir esto!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminarlo!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })
        });

    </script>

@endsection
