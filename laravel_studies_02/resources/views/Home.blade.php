@extends('layouts.main_layout')
@section('content')
    {{-- For --}}
    @for ($i = 0; $i <= 5; $i++)
        <h1>{{$i}}</h1>
    @endfor

    {{-- Foreach --}}
    @foreach ($bairros as $bairro)
        <h1>{{$bairro}}</h1>
    @endforeach

    {{-- ForElse --}}
    @forelse ($nomes as $nome)
        <h1>{{$nome}}</h1>
    @empty
        <h1>Nomes está vazio</h1>
    @endforelse
@endsection
