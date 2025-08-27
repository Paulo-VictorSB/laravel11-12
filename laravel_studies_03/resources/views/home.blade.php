@extends('layouts.main_layout')

@section('page_title', 'Home page')

@section('content')

    {{-- @foreach ($pessoas_linguas as $pessoa => $linguas)
        <x-pessoas-linguas :$pessoa :$linguas />
    @endforeach --}}

    {{-- componentes slots --}}

    {{-- <div>
        <h4 class="text-info">Como funciona um Slot?</h4>
        <x-other-card>
            <h1 class="text-danger">Esse é o Slot!</h1>
        </x-order-card>
    </div> --}}

    {{-- Multi slots --}}
    {{-- <x-multi-slot>
        <x-slot:title>Título</x-slot:title>
        <x-slot:content>Conteúdo</x-slot:content>
        <x-slot:footer>Footer</x-slot:footer>
    </x-multi-slot> --}}

    {{-- Componentes anonimos --}}
    <h4>Componente Anonimo</h4>
    <x-alert-card>Primeira mensagem</x-alert-card>
    <x-alert-card>Segunda mensagem</x-alert-card>
    <x-alert-card>Terceirza mensagem</x-alert-card>

@endsection
