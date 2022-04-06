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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::resource('podcasts', 'App\Http\Controllers\PodcastController');
    Route::resource('cursos', 'App\Http\Controllers\CursoController');
    Route::resource('estructuras', 'App\Http\Controllers\EstructuraController');
    Route::resource('expertos', 'App\Http\Controllers\ExpertoController');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
