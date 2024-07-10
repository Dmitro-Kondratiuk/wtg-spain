<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use App\Models\TeamsUsers;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function createTeam(Request $request) {
        $team       = new Teams();
        $team->name = $request->name;

        try {
            $team->save();
        }
        catch (\Exception $exception) {
            return response()->json($exception,500);
        }

        return response()->json('Team created!');
    }

    public function addTeamUser(Request $request, $id) {

        $exists = TeamsUsers::where(['teem_id' => $id, 'user_id' => $request->user_id])->exists();

        if ($exists) {
            $message = [
                'message'      => 'User already exists!',
                'recordExists' => true,
            ];

            return response()->json($message,400);
        }

        $addTeamUser = new TeamsUsers();

        $addTeamUser->team_id = $id;
        $addTeamUser->user_id = $request->user_id;
        try {
            $addTeamUser->save();
        }
        catch (\Exception $exception) {
            return response()->json($exception,500);
        }

        return $this->createResponse('User added!');
    }

    public function deleteTeamUser($team_id, $user_id) {
        $exists = TeamsUsers::where(['team_id' => $team_id, 'user_id' => $user_id])->first();
        if ($exists) {
            $exists->delete();

            return $this->createResponse('User deleted!');
        }

        return $this->createResponse('User or Team not found!',400);
    }

}
