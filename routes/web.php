<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mensagem', function () {
    return 'Essa é uma mensagem simples!';
});
