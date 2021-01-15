@extends('layouts.main')

@section('title', 'HDC Evwnts')

@section('content')
<h1>Algum titulo</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 15)
    <p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "pedro")
<p>O nome é Pedro</p>
@elseif($nome == "matheus")
<p>O nome é {{ $nome }} ele tem {{ $idade }} anos e trabalha como {{ $profissao }}</p>
@else
<p>O nome não é pedro </p>
@endif

@for ($i = 0; $i < count($arr); $i++)
<p>{{ $arr[$i] }} - {{ $i }} </p>
@if($i == 2)
<p>OI é 2</p>
@endif
@endfor

@foreach($nomes as $nome)
<p>{{ $loop->index }}</p>
<p>{{ $nome }}</p>
@endforeach


@php
$name = "JOÃO";
echo $name;
@endphp

{{-- Este ´é o comentario do blade--}}

@endsection
