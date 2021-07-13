<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'],)->name('index');
//Route::get('/', [App\Http\Controllers\PedidoConsultoriaController::class,'pedidoConsultoria'])->name('site.pedido');
Route::post('/', [App\Http\Controllers\PedidoConsultoriaController::class,'salvar'])->name('site.pedido');
//Route::get('/login', function(){return 'Login';})->name('site.login');

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
