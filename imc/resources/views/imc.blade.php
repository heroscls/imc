@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Calculadora de IMC</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Resultado</h2>
                <p class="card-text">Seu IMC é: <strong>{{ round($imc, 0) }}</strong></p>
                <p class="card-text">Sua classificação é: <strong>{{ $resultado }}</strong></p>
                <a href="/" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection