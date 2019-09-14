<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index($nome = "Julio"){
    	$var = new \App\Contato();
    	$var = $var->listaFiltrada($nome);

    	return view("sobre.index",compact('var'));
    }
}
