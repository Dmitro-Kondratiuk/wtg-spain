<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function getCommentTask($id) {
        $comments = Comments::where('task_id', $id)->get();

        return response()->json($comments);
    }

    public function addCommentTask(Request $request,$id) {
        $user = Auth::guard('api')->user();

        $comment = new Comments();
        $comment->content = htmlspecialchars($request->content);
        $comment->task_id = $id;
        $comment->user_id = $user->id;
        $comment->save();
        return response()->json('Comment added successfully');
    }
    public function deleteCommentTask($id) {
        $task = Comments::find($id);
        if(!$task){
            return response()->json('Comment not found',400);
        }
        $task->delete();

        return response()->json('Comment deleted successfully');
    }
}
