@extends('layouts.app')

@section('content')
    <a href="/tasks/create" class="btn btn-outline-primary">
        <h4>Crear</h4>
    </a>
    <table class="table text-left">
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 22%;">Nombre</th>
                <th style="width: 22%;">Completada</th>
                <th style="width: 22%;">Descripcion</th>
                <th style="width: 22%;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td><a href="/tasks/{{ $task->id }}">{{ $task->name }}</a></td>
                    <td>
                        @if ($task->completed == 1)
                            Completada
                        @endif

                        @if ($task->completed == 0)
                            Pendiente
                        @endif
                    </td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <form action="/tasks/{{ $task->id }}/complete" method="POST"> @csrf @method('PUT') <button
                                type="submit" class="btn btn-success">Completar</button></form>
                    </td>
                </tr>
            @endforeach
        </tbody>


    </table>
@endsection
