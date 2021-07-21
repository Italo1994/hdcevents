@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Welcome to homepage</h1>
        <a href="/contato">Contato</a>

        <img src="/img/banner.jpeg"/ alt="banner">

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

@endsection