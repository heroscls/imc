@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Calculadora de IMC</h1>
        <form action="/imc" method="POST">
            @csrf
            <div class="form-group">
                <label for="peso">Peso (kg):</label>
                <input type="number" step="0.01" class="form-control" id="peso" name="peso" required>
            </div>
            <div class="form-group">
                <label for="altura">Altura (m):</label>
                <input type="number" step="0.01" class="form-control" id="altura" name="altura" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Calcular</button>
        </form>
    </div>
@endsection