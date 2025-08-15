@extends('layouts.main_layout')
@section('content')
    {{-- isset --}}
    @isset($value)
        <p class="display-1 text-center">Váriavel setada</p>
    @endisset
    {{-- empty --}}
    @empty($value)
        <p class="display-1 text-center">O Valor está vazio</p>
    @endempty
    {{-- unless --}}
    @unless($value == 100)
        <p class="display-1 text-center">A menos que o valor não seja igual a 100 esse texto será apresentado</p>
    @endunless
@endsection
