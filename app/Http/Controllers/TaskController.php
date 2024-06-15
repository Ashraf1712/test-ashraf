<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class TaskController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $tasks = Task::where('user_id', $userId)->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(TaskRequest $request){

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->user_id = Auth::id();
        $task->save();

        return redirect()->route('tasks.index')->with('success','Task Created Successfully');
    }

    public function show($id){
        $task = Task::find($id);
        if(!$task){
            return redirect()->route('tasks.index')->with('error','Unable to locate the tasks');
        }
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id){
        $task = Task::find($id);
        if(!$task){
            return redirect()->route('tasks.index')->with('error','Unable to locate the tasks');
        }
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'is_completed' => $request->is_completed,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    public function destroy($id){
        $task = Task::find($id);
        if (!$task) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }

        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');

    }

}
