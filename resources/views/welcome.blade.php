@extends('layout')
@section('content')
    <div>
        <h3>
            Ingresa la informacion <br>
            <small class="text-muted">A continuacion podras ingresar los datos necesarios</small>
        </h3>
    </div>

    {{-- Start Card Section --}}

    <div class="card" style="width: 28rem;">
        <div class="card-body">
            <div class="card-text">
                <form action="{{ route('result') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inpTotalLetter" class="form-label">Total de Letras</label>
                        <input type="text" class="form-control" id="inpTotalLetter" name="inpTotalLetter" placeholder="Ingresa las 12 Letras" maxlength="12" required>
                    </div>
                    <div class="mb-3">
                        <label for="inpLleterToFind" class="form-label">Numero de Letras para adivinar</label>
                        <input type="number" class="form-control" id="inpLleterToFind" name="inpLleterToFind" placeholder="Ingresa el numero de letras para adivinar" required>
                    </div>
                    <button type="submit" class="btn btn-success"> Enviar </button>
                </form>
            </div>
        </div>
    </div>
@endsection