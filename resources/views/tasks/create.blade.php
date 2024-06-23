@extends('layouts.app')

@section('content')
    <h1 class="display-4">Crear Tarea</h1>
    <hr>
    <form action="/tasks" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <br>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <br>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Crear Tarea</button>
    </form>
@endsection
