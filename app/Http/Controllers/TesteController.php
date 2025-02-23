<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function mensagem()
    {
        return view('mensagem', ['mensagem' => 'Deploy automático com Controller e View!']);
    }
}
