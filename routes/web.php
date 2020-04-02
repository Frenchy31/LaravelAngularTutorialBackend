<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/appareils', function () {
    return response()->json(\App\Appareil::all(), 200,
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
});

Route::post('/appareil', function (Request $request) {
    $appareil = \App\Appareil::create([
        'id'=> $request->id,
        'name'=> $request->name,
        'status'=> $request->status
    ]);
    $appareil->save();
    return response()->json([''],200,
        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE);
});

// TODO Optimiser les routes en récupérant par Request
Route::put('/appareil/{id}/{status}', 'AppareilController@update');

Route::delete('/appareil/{id}', 'AppareilController@delete');

// TODO Add routes for authentication

Route::get('/authenticate', 'AuthController@authenticate');

Route::post('/register', 'AuthController@register');

Route::get('/disconnect', 'AuthController@disconnect');
