<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCotroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppWebController;
use App\Http\Middleware\AdminMiddleware;

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



Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/admin/solicitudesProceso', [AdminCotroller::class, 'PendingRequestToLawyer'])->name('admin.solicitudesProceso');
    Route::get('/admin/users', [AdminCotroller::class, 'usersIndex'])->name('admin.users.index');
    Route::resource('/admin', AdminCotroller::class);    
});



/* Rutas de la aplicación web genericas */
Route::get('/', [AppWebController::class, 'index'])->name('landing');


/* Rutas de autenticación */
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'signin'])->name('signin');
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'formRegister'])->name('formRegister');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');


/* Rutas de abogados */
Route::resource('/lawyer', LawyerController::class);


/* Rutas de posts */
Route::post('/post/editar', [PostController::class, 'editPost'])->name('post.editar');
Route::post('/post/eliminar', [PostController::class, 'delete'])->name('post.eliminar');
Route::resource('/post', PostController::class);



/* Rutas de usuarios */
Route::get('/pricing', [UserController::class, 'pricing'])->name('pricing');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
