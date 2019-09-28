<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
    	$request->session()->flash("status","Your name is defined");
    	return view("visible");
    }

    public function another(Request $request){
    	return view("visible");
    }
}
