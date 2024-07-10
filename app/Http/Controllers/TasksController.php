<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\JsonResponse;

class TasksController extends Controller
{
    public function index(): JsonResponse {
        $tasks = Task::all();

        return response()->json($tasks);
    }

    public function create() {

        return response()->json();
    }

    public function show($id) {
        $task = Tasks::find($id);

    }

}
