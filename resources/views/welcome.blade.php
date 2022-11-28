@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')
    
<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="banner" srcset="">
@if (10 > 15)
    <p>A condição é true</p>
@endif

@if ($nome == "Alan")
    <p>O nome é Alan e ele tem {{ $idade }} anos e ele trabalha como {{ $profissao }}</p>
@elseif ($nome == "Aline")
    <p>O nome é {{ $nome }}</p>        
@else
    <p>O nome não é Alan</p>
@endif

@for ($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if ($i == 2)
        <p>O i é 2</p>
    @endif
@endfor

@foreach ($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
    
@endforeach

@php
    $name = "João";
    echo $name;
@endphp

{{-- Comentario do blade --}}

@endsection