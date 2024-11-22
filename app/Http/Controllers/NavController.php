<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
        return view('index');
    }

    public function estacoes(){
        return view('estacoes');
    }

    public function planos(){
        return view('planos');
    }

    public function ouro(){
        return view('ouro');
    }

    public function bronze(){
        return view('bronze');
    }

    public function prata(){
        return view('prata');
    }

}
