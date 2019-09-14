<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public $dados;
    public $nome;
    private $contatos;
    function __construct()
    {
        $this->contatos = [
            (object)["nome" => "Julio", "tel" => "178475236", "cargo" => "Programador Back-end"],
            (object)["nome" => "Jean", "tel" => "148475236", "cargo" => "Designer"],
            (object)["nome" => "Jonathan", "tel" => "146457236", "cargo" => "Programador Back-end"],
            (object)["nome" => "Joaquim", "tel" => "148475324", "cargo" => "Analista de Sistema"],
            (object)["nome" => "Jorge", "tel" => "838475236", "cargo" => "Programador Front-end"]
        ];
    }

    public function lista()
    {
    	return $this->contatos;
    }

    public function listaFiltrada($nome)
    {
        $this->nome = $nome;
        $this->dados = $this->lista();
        return 
            array_filter($this->dados,function($dados){
                return $dados->nome == $this->nome;
            });
        ;
    }
}
