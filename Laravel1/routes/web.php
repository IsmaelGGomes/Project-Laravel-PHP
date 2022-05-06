<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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
Route::get('/you', function () {

    $nome= "ismael";

    return view('teste', ['nome' => $nome]);
});
Route::get('/index', function(){

    return view('index');
});
Route::get('/registro2', function(){
    dd($events);
    return view('index');
});

Route::get('/registro',[EventController::class,'index']);