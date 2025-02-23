<?php

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mensagem', function () {
    return 'Deploy automatico';
});

Route::get('/controller', [TesteController::class, 'mensagem']);
