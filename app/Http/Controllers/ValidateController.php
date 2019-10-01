<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateController extends Controller
{
    public function index(Request $req){
    	$error = [
    		'a.max' => 'Tamanho maximo: 3',
    	];

    	$valid = Validator::make($req->all(),[
    		"a"=>'max:3',
    	],$error);

    	$errors = $valid->errors();

		echo $errors->first('a');

    }
}
