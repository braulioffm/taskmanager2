@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    
@livewire('clients-index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    @livewireScripts
@stop