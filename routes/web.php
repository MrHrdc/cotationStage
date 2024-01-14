<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\FicheController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::resource('stagiaires', StagiaireController::class);
Route::resource('fonctions', FonctionController::class);
Route::resource('agents', AgentController::class);
Route::resource('fiches', FicheController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
