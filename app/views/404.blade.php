@extends('layouts.default')

@section('content')
    <section id="error" class="container text-center">
        <h1>404 Pagina no encontrada</h1>
        <p>La pagina que buscas no se encuentra, Esto es algo vergonsoso pero trabajaremos en ello.</p>
        <p>{{ $mensaje }}</p>
        <a class="btn btn-primary" href="/">Ir de vuelta al inicio</a>
    </section><!--/#error-->

@stop
