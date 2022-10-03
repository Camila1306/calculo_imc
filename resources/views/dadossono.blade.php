@extends('layout.app')
@section('title', 'Análise de Sono')
@section('titulo', 'Dados da Pessoa')
@section('apresentacao')
    <p>Esta aplicação realiza a análise de sono de uma pessoa, informando sua classificação com relação a este cálculo</p>
@endsection
@section('content')
    <main>
        <div>
            <form action="{{url('/sono')}}" method="get" class="form">
                <label for="iNome">Nome:</label>
                <input type="text" name="iNome" id="iNome" required>
                <br>
                <label for="iIdade">Idade:</label>
                <input type="number" name="iIdade" id="iIdade" step="0.01" required>
                <small>Informe idade. Para menores de 1 ano. utilize 0.01 até 0.11 </small>
                <br>
                <label for="iSono">Média de Horas Dormidas:</label>
                <input type="number" step="0.01" name="iSono" id="iSono">
                <br>
                <button class="btn" type="submit">Calcular</button>
            </form>
        </div>
    </main>
    @endsection