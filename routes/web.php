<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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


Route::middleware('auth')->group( function (){

   Route::get('/', function () {
       return redirect()->route('tareas.index');   
   });

   Route::get('/proyectos',[ProjectController::class, 'index'])->name('proyectos.index');
   Route::get('/proyectos/create',[ProjectController::class, 'create'])->name('proyectos.create');
   Route::get('/proyectos/{id}', [ProjectController::class, 'edit'])->name('proyectos.edit');
   Route::post('/proyectos',[ProjectController::class, 'store'])->name('proyectos.store');
   Route::put('/proyectos/{id}', [ProjectController::class, 'update'])->name('proyectos.update');
   Route::delete('/proyectos/{id}',[ProjectController::class, 'destroy'])->name('proyectos.destroy');

  Route::resource('tareas', TaskController::class);
 

});


   Route::resource('auth/login', LoginController::class)->only(['index', 'store']);
   
   Route::resource('auth/logout', LogoutController::class)->only(['store']);