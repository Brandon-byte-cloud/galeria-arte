<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends Controller
{
    public function login(Request $request){
        $credentials=$request->only('email','password');
        if (!$token=JWTAuth::attempt($credentials)){
            return response()->json(['error de login'=>'credenciales invalidas'],401);
        }
        return response()->json(['token'=>$token]);
    }
    public function logout(){
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['mensaje'=>'Sesión cerrada']);
    }
    public function me(){
        return response()->json(JWTAuth::user());
    }    
}
