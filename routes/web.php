<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/registrospacientes', function () {

    // Obtener los eventos de la DB
    $registrospacientes = \App\Models\Registration::all();
    // Asignar la cabecera de nuestro datatable
    $heads = [
        'ID',
        'Nombre',
        'Descripcion',
        'Estado',
        'Tipo',
        'Fecha'
    ];
    // Retornamos la vista con los parametros
    return view('registrospacientes', compact('registropacientes', 'heads'));


    return view('registros');
});
Route::get('/registrosdoctores', function () {
    return view('registros');
});
Route::get('/registros/createpacientes', function () {
    return view('registros-createpacientes');
});
Route::get('/registros/createmedicos', function () {
    return view('registros-createdoctores');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
