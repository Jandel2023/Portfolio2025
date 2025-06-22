<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ServiceController::class, 'index'])->name('home');
Route::get('/{id}', [ServiceController::class, 'show'])->name('blog.show');
Route::post('/send-message', [ServiceController::class, 'sendMessage'])->name('send.message');
