<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('custom1')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/task', [\App\Http\Controllers\API\TasksController::class, 'createTask']);
    Route::get('/task/{id}', [\App\Http\Controllers\API\TasksController::class, 'getTask']);
    Route::put('/task/{id}', [\App\Http\Controllers\API\TasksController::class, 'updateTask']);
    Route::delete('/task/{id}', [\App\Http\Controllers\API\TasksController::class, 'deleteTask']);
    Route::get('/tasks', [\App\Http\Controllers\API\TasksController::class, 'getTasks']);

    Route::get('/tasks/{id}/comment', [\App\Http\Controllers\API\CommentsController::class, 'getCommentTask']);
    Route::post('/tasks/{id}/comment', [\App\Http\Controllers\API\CommentsController::class, 'addCommentTask']);
    Route::delete('/comments/{id}', [\App\Http\Controllers\API\CommentsController::class, 'deleteCommentTask']);

    Route::post('/teams', [\App\Http\Controllers\API\TeamsController::class, 'createTeam']);
    Route::post('/teams/{teamId}/users', [\App\Http\Controllers\API\TeamsController::class, 'addTeamUser']);
    Route::delete('teams/{teamId}/users/{userId}', [
        \App\Http\Controllers\API\TeamsController::class,
        'deleteTeamUser',
    ]);
});

