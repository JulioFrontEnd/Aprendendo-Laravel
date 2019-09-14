<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tester;
class TesterController extends Controller
{
    public function index(){
    	return view("Tester.index");
    }
    public function enviar(Request $req){
    	$dados = $req->all();

    	if($req->hasFile("imagem")){
    		$imagem = $req->file("imagem");
    		$num = sha1(rand(100001,23104098));
    		$dir = "img/";
    		$ex = $imagem->guessClientExtension();
    		$novoNome = $num .".".$ex;
    		$dados["imagem"] = $dir. "/".$novoNome;
    		$imagem->move($dir,$novoNome);
    	}

    	Tester::create($dados);
    }
    public function login(){
        return view("Tester.user");
    }
}
