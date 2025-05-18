<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\SampleController;
use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [indexController::class, 'index'])->name('Hello');
Route::get('/hello', [indexController::class, 'hello']);

Route::get('/where/{id}', [indexController::class, 'where'])->where('id', '[0-9]+');

// ルートグループをミドルウェアで割り当てる
Route::middleware([HelloMiddleware::class])->group(function () {
    Route::get('/hello', [HelloController::class, 'index']);
    Route::get('/hello/other', [HelloController::class, 'other']);
});

// 名前空間とクループルート
Route::namespace('Sample')->group(function() {
    Route::get('/sample', [SampleController::class, 'index']);
    Route::get('/sample/other', [SampleController::class, 'other']);
});

// ルートとモデルの結合
Route::get('/hello/{person}', [HelloController::class, 'person']);
