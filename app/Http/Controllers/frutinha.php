<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frutinha extends Controller
{
    public function index(Request $req, $id = 100){
    	if ($req->input("nome") === 'Julio') {
   			return view('frutinha');
    	}else{
    		return view('frutose');
    	}
    }
}
