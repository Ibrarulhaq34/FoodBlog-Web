<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

Route::get('/', [DemoController::class, 'index']);
Route::get('/blog', [DemoController::class, 'blog']);
Route::get('/blogdetails', [DemoController::class, 'blogdetails']);
Route::get('/contact', [DemoController::class, 'contact']);
Route::get('/admin', [DemoController::class, 'admin']);
Route::get('/storage', [DemoController::class, 'storage']);

Route::get('/delete/{id}', [DemoController::class, 'deleteblog']);
Route::post('/addblog', [DemoController::class, 'addblog']);




