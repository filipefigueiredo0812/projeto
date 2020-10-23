@extends('layout')
@section('titulo')
Layout
@endsection
@section('header')
@endsection


@section('conteudo')
<h2 style="text-align:center">Formulário</h2>


<br>
<!--<img src="{{asset('imagens\imagem.jpg')}}"> !-->
<form method="post" action="{{route('processar.form')}}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="morada">Morada</label> 
        <input type="text" name="morada">
        <label for="automovel">Automóvel</label>
        <select name="automovel">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Audi">Audi</option>
        </select>
        <button type="submit">Enviar</button>
    </form>

@endsection