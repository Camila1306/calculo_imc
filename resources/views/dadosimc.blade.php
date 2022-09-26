<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
</head>
<body>
    <header>
        <div>
            <h1>Calculo do IMC</h1>
        </div>    
    </header>
    <main>
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
    </main>
</body>
</html>