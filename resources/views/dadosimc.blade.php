@extends('layout.app')
@section('title', 'Cálculo IMC')
@section('titulo', 'Dados da pessoa')
@section('apresentacao')
    <p>Esta aplicação realiza o cálculo do IMC de uma pessoa, informando sua classificação com relação a este cálculo.</p>
@endsection
@section('content')

    <main>
        <div>
        <form action="{{url('/imc')}}" method="get" class="form">
            <label class="label" for="iNome">Nome:</label>
            <input class="input" type="text" name="iNome" id="iNome" required>
            <br>
            <label class="label" for="iNascimento">Data de Nascimento:</label>
            <input class="input" type="date" min="01-01-1900" max="31-12-2050" name="iNascimento" id="iNascimento" placeholder="dd-mm-aaaa" required>
            <br>
            <label class="label" for="iPeso">Peso:</label>
            <input class="input" type="number" name="iPeso" id="iPeso" step="0.01" required>
            <br>
            <label class="label" for="iAltura">Altura:</label>
            <input class="input" type="number" name="iAltura" id="iAltura" step="0.01" required>
            <br>
            <button class="btn" type="submit">Calcular</button>
        </form>
        </div>
    </main>
@endsection