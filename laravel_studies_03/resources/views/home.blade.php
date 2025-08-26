@extends('layouts.main_layout')

@section('page_title', 'Home page')

@section('content')
    <h3>Este texto faz parte da view</h3>

    {{-- render component --}}
    <x-my-component />

    {{-- render component em subpasta --}}
    <x-admin.admin-card />
@endsection
