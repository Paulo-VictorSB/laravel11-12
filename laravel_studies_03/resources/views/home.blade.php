@extends('layouts.main_layout')

@section('page_title', 'Home page')

@section('content')

    @foreach ($pessoas_linguas as $pessoa => $linguas)
        <x-pessoas-linguas :pessoas="$pessoa" :linguas="$linguas"/>
    @endforeach

@endsection
