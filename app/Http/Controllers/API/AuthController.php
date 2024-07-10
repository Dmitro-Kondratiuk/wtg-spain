<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(Request $request) {
        $data = $request->only('email', 'password');
        if (!$token = Auth::guard('api')->attempt($data)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->returnWithToken($token);
    }

    public function logout(Request $request) {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function user() {
        return response()->json(Auth::guard('api')->user());
    }

    public function register(Request $request) {
        $user           = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json('User successfully registered', 200);
    }

    public function returnWithToken($token) {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
        ]);
    }

    public function refresh() {
        return $this->returnWithToken(auth('api')->refresh());
    }
}
