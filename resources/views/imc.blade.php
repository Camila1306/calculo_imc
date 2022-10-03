@extends('layout.app')
@section('title', 'Cálculo IMC - Resultado')
@section('titulo', 'Cálculo IMC - Resultado')
@section('apresentacao')
    <p>Veja qual sua classificação com relação ao seu IMC</p>
@endsection
@section('content')
    <main>
        <div>
            <h2>{{$resultadoimc["nome"]}}</h2>
            <p>Você tem {{$resultadoimc["idade"]}} anos</p>
            <p>Sua altura é de {{$resultadoimc["altura"]}} m</p>
            <p>Seu peso é de {{$resultadoimc["peso"]}} kg</p>
            <p>Seu IMC é de: {{$resultadoimc["imc"]}} - Você está classificado como {{$resultadoimc["classificado"]}}!</p>
        </div>
    </main>

@endsection