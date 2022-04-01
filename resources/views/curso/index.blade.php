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

@endsection
