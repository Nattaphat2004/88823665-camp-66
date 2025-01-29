<?php
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login' ,
    [LoginController::class, 'index']);
Route::get('/register' ,
    [RegisterController::class, 'index']);
Route::get('/home' ,
    [HomeController::class, 'index']);
Route::get('/' ,
    [HomeController::class, 'index']);

Route::get('/mycontroller/{id?}',
    [MyController::class,'myfunction']);

Route::post('/mycontroller/{id?}',
    [MyController::class,'myfunction']);
Route::get('/', function () {
    return view('home');
});
Route::get('/hello/{id?}',
function($val="")
{
    return "<h1>Hello world$val</h1>";
});
Route::get('/multiplication',
    [MyController::class, 'myfunction']);
Route::post('/multiplication',
    [MyController::class, 'myfunction'])->name('multiplication');





