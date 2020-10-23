@extends('layout')
@section('titulo')
Formulário submetido
@endsection
@section('header')
<h2 style="text-align:center">Informação</h2>
@endsection
@section('conteudo')
    {{$nome}}<br>
    {{$morada}}<br>
    {{$automovel}}<br>
@endsection