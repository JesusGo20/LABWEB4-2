@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar la tarea: {{ $task->name }}</h1>
    <hr>
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $task->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
    </form>
@endsection
