<?php

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
use App\Http\Controllers\EventController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/especificacoes', function () {
    return view('especificacoes/especificacoes');
});




Route::get('/contatos', [EventController::class,'index'])->middleware('auth');
Route::get('/contatos/{id}',[EventController::class,'show'])->middleware('auth');




Route::get('/multimidia', function () {
    return view('multimidia/multimidia');
});



Route::get('/faleConosco', function () {
    return view('faleConosco/faleConosco');
})->middleware('auth');


Route::post('/faleConosco',[EventController::class,'store'])->middleware('auth');


Route::get('/teste', function () {
    return view('teste/teste');
});

Route::post('/teste',[TestController::class,'store']);


Route::get('/dashboard' , [EventController::class, 'dashboard'])->middleware('auth');
Route::delete('/dashboard/{id}' , [EventController::class, 'destroy'])->middleware('auth');


Route::get('/fotos', function () {
    return view('fotos/foto');
});


Route::get('/dashboard/edit/{id}', [EventController::class, 'edit'])->middleware('auth');




Route::get('/multimidia', function () {
    return view('multimidia/multimidia');
});






route::get('/google', function (){
    return view('google');
});



Route::put('/dashboard/update/{id}', [EventController::class, 'update'])->middleware('auth');