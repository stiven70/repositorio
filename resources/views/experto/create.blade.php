@extends('layouts.plantillabase')

@section('contenido')
<h2>Crear registro nuevo de experto</h2>

<form action="/expertos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="cedula">Cedula</label>
        <input id="cedula" name="cedula" type="number" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="email">Correo</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="2">
    </div>

    <a href="/expertos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection
