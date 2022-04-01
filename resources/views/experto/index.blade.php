@extends('layouts.plantillabase')

@section('contenido')
    <a href="expertos/create" class="btn btn-primary">CREAR</a>

        <table class="table table-hover table-striped mt-4 align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CEDULA</th>
                <th scope="col">CORREO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expertos as $experto)
            <tr class="text-center">
                <td>{{$experto->id}}</td>
                <td>{{$experto->nombre}}</td>
                <td>{{$experto->cedula}}</td>
                <td>{{$experto->email}}</td>
                <td>
                    <form action="{{ route ('expertos.destroy', $experto->id)}}" method="POST">
                        <a href="/expertos/{{$experto->id}}/edit" class="btn btn-info">Editar</a>
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
