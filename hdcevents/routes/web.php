<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']); //mostra todos os registros
Route::get('/events/create', [EventController::class, 'create']); //criar registro no banco
Route::get('/events/{id}', [EventController::class, 'show']); //mostrar um dado em específico
Route::post('/events',[EventController::class, 'store']); //enviar os dados para o banco
