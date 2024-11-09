<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiControllerAuth;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/register', [ApiControllerAuth::class, 'register']);
Route::post('/login', [ApiControllerAuth::class, 'login']);

Route::get('/', function (){
    return "hello";
});