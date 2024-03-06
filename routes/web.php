<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

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

Route::get('/', function () {
    return view('welcome');
});

//Forma direta de abrir uma página
//Route::get('exemplo', function () {
//    return view('exemplo');
//});

//Forma utilizando Controllaores
Route::get('/alunos', [App\Http\Controllers\AlunoController::class, 'listar'])->name('alunos.listar');
Route::get('/alunos/{id}', [App\Http\Controllers\AlunoController::class, 'listarID']);

