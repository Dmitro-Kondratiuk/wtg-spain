<?php

namespace App\Http\Controllers;


class UsersController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function login(){
        return view('users.login');
    }
    public function register(){
        return view('users.register');
    }
    public function task() {
        return view('users.task');
    }
}
