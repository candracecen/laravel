<?php

use App\Http\Controllers\Broadcast;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Kontak;
use App\Http\Controllers\Terkirim;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', [Dashboard::class, 'index']);

Route::get('/kontak', [Kontak::class, 'index']);
Route::get('/import-kontak', [Kontak::class, 'import']);


Route::get('/broadcast', [Broadcast::class, 'index']);

Route::get('/chat-bot', function () {
    return view('chat-bot');
});
Route::get('/terkirim', function () {
    return view('terkirim');
});
// Route::get('/terkirim', [Terkirim::class, 'index']);

