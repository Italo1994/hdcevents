@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    <h1>Tela de Produtos</h1>

    @if($busca != '')
        <p>O usuário está buscando por: {{$busca}} </p>
    @endif

    @php
        $nome = "Italo";
        echo "Olá {$nome}";
    @endphp

@endsection