<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public static function login(Request $request)
    {
        
        try {
            $credentials = $request->only('email', 'password');

            if ($token = JWTAuth::attempt($credentials)) {
                return response()->json(['token' => $token]);
            }

            return response()->json(['error' => 'Unauthorized'], 401);
        } catch (\Exception $th) {
            return response()->json(['error' => 'Unauthorized ' . $th->getMessage()], 401);
        }
    }
}
