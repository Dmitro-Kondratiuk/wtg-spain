<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function getTasks(){
        $tasks = Tasks::all();
        return response()->json($tasks);
    }
    public function createTask( Request $request) {
        $tasks = new Tasks();
        $tasks->title = $request->title;
        $tasks->description = htmlspecialchars($request->description);
        $tasks->status = 'pending';
        $tasks->save();
        return response()->json('Task added successfully');
    }

    public function getTask(Request $request) {
        $task = Tasks::find($request->id);

        return response()->json($task);
    }

    public function updateTask(Request $request,$id) {
        $task = Tasks::find($id);
        if(!$task){
            return response()->json('Task not found',400);
        }
        $task->update($request->all());

        return response()->json('Task updated successfully');

    }
    public function deleteTask($id) {
        $task = Tasks::find($id);
        if(!$task){
            return response()->json('Task not found',400);
        }
        $task->delete();

        return response()->json('Task deleted successfully');
    }

}
