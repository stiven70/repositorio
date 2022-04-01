@extends('layouts.plantillabase')

@section('contenido')
    <a href="estructuras/create" class="btn btn-primary">CREAR</a>

        <table class="table table-hover table-striped mt-4 align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estructuras as $estructura)
            <tr class="text-center">
                <td>{{$estructura->id}}</td>
                <td>{{$estructura->nombre}}</td>
                <td>
                    <form action="{{ route ('estructuras.destroy', $estructura->id)}}" method="POST">
                        <a href="/estructuras/{{$estructura->id}}/edit" class="btn btn-info">Editar</a>
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

