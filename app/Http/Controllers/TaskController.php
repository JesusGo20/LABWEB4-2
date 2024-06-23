<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index()
    {

        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    function create()
    {
        return view('tasks.create');
    }

    function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();
        return redirect('/tasks');
    }

    function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    function update(Request $request, Task $task)
    {
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();
        return redirect('/tasks');
    }

    function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }

    function complete(Task $task)
    {
        $task->completed = true;
        $task->save();
        return redirect('/tasks');
    }
}
