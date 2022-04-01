@extends('layouts.plantillabase')

@section('contenido')
    <a href="podcast/create" class="btn btn-primary">CREAR</a>

        <table class="table table-hover table-striped mt-4 align-middle">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">TITULO</th>
                <th scope="col">FECHA</th>
                <th scope="col">ENLACE RUTA</th>
                <th scope="col">CÓDIGO ARCHIVO</th>
                <th scope="col">ENLACE GUIÓN</th>
                <th scope="col">DURACIÓN</th>
                <th scope="col">DESCRIPCIÓN</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($podcasts as $podcast)
            <tr class="text-center">
                <td>{{$podcast->id}}</td>
                <td>{{$podcast->titulo}}</td>
                <td>{{$podcast->fecha}}</td>
                <td><a href="{{$podcast->enlace_ruta}}" target="_blank">Enlace</a></td>
                <td>{{$podcast->cod_archivo}}</td>
                <td><a href="{{$podcast->enlace_guion}}" target="_blank">Enlace</a></td>
                <td>{{$podcast->duracion}}</td>
                <td>{{$podcast->descripcion}}</td>
                <td>
                    <a href="#" class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
