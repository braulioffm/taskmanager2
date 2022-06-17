@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $project->name }}</h1>
@stop

@section('content')
    
@livewire('projects.project-task-box', [
    'taskStatus' => 1,
    'title' => 'Tareas por empezar',
    'project' => $project
    ])


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    @livewireScripts
@stop