<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){

    	$var = new \App\Contato();
    	$var = $var->lista();

    	return view("contato.index",compact('var'));
    }
}
