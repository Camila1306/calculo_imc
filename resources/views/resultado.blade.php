<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">

</head>
<body>
    <header>
        <h1>Resultado do cálculo do IMC</h1>
    </header>
    <main>
        <div>
            <div class="seccess">
                <p>{{$resultado["nome"]}}, você tem {{$resultado["idade"]}} anos, sua altura é de {{$resultado["altura"]}} m, seu peso é de {{$resultado["peso"]}} kg, e seu IMC é {{$resultado["imc"]}}.</p>
                <p>Pelo cálculo do IMC você está classificado como {{$resultado["classificado"]}}!</p>
                <p>{{$resultado["msono"]}}</p>
            </div>
        </div>
        <a class="btn" href="{{URL('/')}}" title="voltar">Voltar</a>
    </main>
</body>
</html>