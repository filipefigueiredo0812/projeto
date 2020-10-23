@extends('layout')
@section('titulo')
Layout
@endsection
@section('header')
@endsection


@section('conteudo')
<br>
<div style="text-align:center">
<h2>Sites</h2>
@foreach ($sites as $nsites)
<div style="text-align:center">
<p><a href="{{($nsites)}}" target="_blank"><h6>{{($nsites)}}</h6></a></p>
</div>
@endforeach

<!--<img src="{{asset('imagens\imagem.jpg')}}"> !-->


@endsection