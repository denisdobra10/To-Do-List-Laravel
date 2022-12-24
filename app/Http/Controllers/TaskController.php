<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public static function GetTaskList()
    {
        return Task::all();
    }



    public function CreateTask(Request $req)
    {
        $newTask = new Task();
        $newTask->title = $req->title;
        $newTask->content = $req->content;

        $newTask->save();

        return redirect('/');
    }

    public function DeleteTask(Request $req)
    {
        Task::find($req->taskId)->forceDelete();

        return redirect('/');
    }


    
}
