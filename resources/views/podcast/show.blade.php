@extends('layouts.plantillabase')

@section('contenido')

                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{$podcast->titulo}}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $podcast->fecha}}
                        </div>
                        <div class="form-group">
                            <audio src="{{$podcast->enlace_ruta}}" controls></audio>
                        </div>
                        <div class="form-group">
                            <strong>Fecha Publicacion:</strong>
                            {{ $podcast->cod_archivo}}
                        </div>
                        <div class="form-group">
                            <strong>Estructura:</strong>
                            {{$podcast->estructuras->nombre}}
                        </div>
                        @foreach ($podcast->cursos as $curso)
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{$curso->nombre}}
                        </div>
                        @endforeach
                        @foreach ($podcast->expertos as $experto)
                        <div class="form-group">
                            <strong>Experto:</strong>
                            {{$experto->nombre}}
                        </div>
                        @endforeach
@endsection
