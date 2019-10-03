<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class frutinha extends Controller
{
    public function index(Request $req, $id = 100){
    	if ($req->input("nome") === 'Julio') {
   			return view('frutinha');
    	}else{
    		return view('frutose');
    	}
    }

    public function link(){
    	return redirect()->route('lik');
    }

    public function log(){
        Log::alert("O Usuario é um cara gente boa!");
        echo "sucesso";
    }

}
