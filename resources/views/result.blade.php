@extends('layout')
@section('content')
<div>
    <h3>
        Resultado Obtenido <br>
        <small class="text-muted">A continuacion veras la combinaciones aletorias obtenidas</small>
    </h3>

    <div class="mt-5">
        <small class="text-muted">Letras escritas: <b>{{ strtoupper($totalLetters) }}</b> </small><br>
        <small class="text-muted">Tamaño de palabra a adivinar: <b>{{ strtoupper($totalWord) }}</b> </small>
    </div>

    <div class="mt-5">
        <h4>
            <small class="text-muted">Posibles combinaciones</b> </small><br>
        </h4>
    </div>

    {{-- Recorrer Array de Resultados --}}

    <ul>
    @foreach ($result as $word)
        <li> <b> {{ strtoupper($word) }} </b> </li>
    @endforeach
    </ul>
</div>
@endsection