<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        <h1>Welcome to homepage</h1>
        <a href="/contato">Contato</a>

        @if($nome == "Italo")
            <p> {{$nome}} tem {{$idade}} anos e trabalha como {{$profissao}} na emprega Google. </p>
        @else
            <p>Você não é {{ $nome }}</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p> {{$arr[$i]}} </p>

            @if($i == 2)
                <p>O i é igual e 2</p>
            @endif
        @endfor

        @php
            $nome = "Erika";
        @endphp

        @foreach($nomes as $nome)
            <p> {{$loop->index}} </p>
            <p> {{$nome}} </p>
        @endforeach
    </body>
</html>
