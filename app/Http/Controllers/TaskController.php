<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('task.index',compact('tasks'));
    }

    public function store(Request $request)
    {
       $task = new Task();
       $task->title = $request->title;
       $task->save();
       return back()->with(['message'=>'Kaydedildi']); 
    }

    public function update(Request $request)
    {
        $task = Task::find($request->id);
        $task->title = $request->title;
        $task->save();
        return back()->with(['message'=>'Güncellendi!']); 
    }

    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();
        return back()->with(['message'=>'Silindi!']); 
    }
}
