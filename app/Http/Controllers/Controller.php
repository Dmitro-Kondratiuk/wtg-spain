<?php

namespace App\Http\Controllers;


abstract class Controller
{

    public function createResponse($message, $status = 200) {


        return response()->json($message, $status);
    }
}
