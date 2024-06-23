@extends('layouts.app')

@section('content')
    <h1 class="display-4">Tarea #: {{ $task->id }}</h1>
    <hr>
    <h2 class="mb-4">Tarea: {{ $task->name }}</h2>
    <hr>
    <h2 class="mb-4">Descripción: {{ $task->description }}</h2>

    <a href="/tasks/{{ $task->id }}/edit" class="btn btn-primary">Editar</a>
    <form action="/tasks/{{ $task->id }}/delete" method="POST" class="d-inline">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@endsection
