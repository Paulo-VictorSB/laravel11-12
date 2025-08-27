@extends('layouts.main_layout')

@section('page_title', 'Home page')

@section('content')

    {{-- @foreach ($pessoas_linguas as $pessoa => $linguas)
        <x-pessoas-linguas :$pessoa :$linguas />
    @endforeach --}}

{{-- componentes slots --}}
<div>
    <h4 class="text-info">Como funciona um Slot?</h4>
    <x-other-card>
        <h1 class="text-danger">Esse é o Slot!</h1>
    </x-order-card>
</div>

@endsection
