<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Redirect;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::where("iscompleted", false)->orderBy("id")->get();
        $completed_tasks = Task::where("iscompleted", true)->get();
        return view("welcome", compact("tasks", "completed_tasks"));
        }
        public function store(Request $request)
        {
        $input = $request->all();
        $task = new Task();
        $task->task = request("task");
        $task->save();
        return Redirect::back()->with("message", "Task has been added");
        }
        public function complete($id)
        {
        $task = Task::find($id);
        $task->iscompleted = true;
        $task->save();
        return Redirect::back()->with("message", "Task has been added to completed list");
        }
        public function destroy($id)
        {
        $task = Task::find($id);
        $task->delete();
        return Redirect::back()->with('message', "Task has been deleted");
        }
        }