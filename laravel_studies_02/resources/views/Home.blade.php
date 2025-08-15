@extends('layouts.main_layout')
@section('content')
    {{-- Switch case --}}
    @switch($value)
        @case(100)
            <p class="display-1 text-center">O Valor é 100</p>
            @break
        @case(200)
            <p class="display-1 text-center">O Valor é 200</p>
            @break
        @default
            <p class="display-1 text-center">O Valor não é 100 e nem 200</p>
    @endswitch
@endsection
