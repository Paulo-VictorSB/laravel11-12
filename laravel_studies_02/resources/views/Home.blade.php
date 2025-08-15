@extends('layouts.main_layout')
@section('content')

    @session('name')
        <h1>Nome guardado na sessão: {{ session('name') }}</h1>
    @endsession

@endsection
