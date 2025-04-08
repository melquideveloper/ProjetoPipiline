<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class UserController extends Controller
{
   
    public function getUser(){

        $users = User::all();

        return response()->json($users);
    }
}
