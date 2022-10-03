@extends('layout.app')
@section('title', 'Análise de Sono - Resultado')
@section('titulo', 'Análise de Sono - Resultado')
@section('apresentacao')
    <p>Veja se você está dormindo o suficiente,</p>
@endsection
@section('content')
    <main>
        <div>
            <h2>{{$resultadosono["nome"]}}</h2>
            <p>Idade: {{$resultadosono["idade"]}}</p>
            <p>Análise de Sono: {{$resultadosono["sono"]}} - {{$resultadosono["msono"]}}</p>
        </div>
    </main>
@endsection