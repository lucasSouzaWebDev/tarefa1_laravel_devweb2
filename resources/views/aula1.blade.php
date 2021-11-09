@extends('template')

@section("conteudo")

Ola {{$nome}}, seja bem vindo !!!
Aqui irá o conteudo que sera substituido
<hr>

{{$usuario ?? "usuario indefinido"}}

@foreach($frutas as $fruta)

<p>{{$fruta}}</p>

@endforeach

{{$numero}}

{!!$html!!}

@endsection