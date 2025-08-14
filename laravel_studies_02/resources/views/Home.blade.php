@extends('layouts.main_layout')
@section('content')

{{-- instrução if simples --}}
@if($value > 0)
    <p class="display-1 text-center">O Número é maior que 0</p>
@endif

@endsection
