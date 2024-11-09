<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;
class ApiControllerAuth extends Controller
{
    protected function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);
        if(Auth::attempt($request->only(['email', 'password']))){
            $user = Auth::user();
            $token = $user->createToken(config('app.name'))->accessToken;
            return response()->json(['token'=>"$token"]);
        }
        $user = User::first();
        return response()->json(['error'=>"$user"]);
    }
    protected function register(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
        ]);
        $user = User::create($request->all());
        $token = $user->createToken(config('app.name'))->accessToken;
        return response()->json(['user'=>$token, 'yash'=>'yash'], 200);
    }
    //
}
