@extends('layouts.plantillabase')

@section('contenido')

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{$podcast->titulo}}
                        </div>
                        <div class="form-group">
                            <strong>Link:</strong>
                            {{ $podcast->fecha}}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $podcast->enlace_ruta}}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Publicacion:</strong>
                            {{ $podcast->cod_archivo}}
                        </div>
@endsection
