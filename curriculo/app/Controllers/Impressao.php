<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Impressao extends BaseController
{
    public function index()
    {
        $dados = [
         'nome'=> session()->nome,
         'nacimento'=> session()->nacimento,
         'sexo'=> session()->sexo,
         'civil'=> session()->civil,
         'endereco'=> session()->endereco,
         'experiencia'=> session()->experiencia,
         'formacao'=> session()->formacao,
         'habilidade'=> session()->habilidade,
         'objetivo'=> session()->objetivo
        ];
        
        return view('Impressao/index', $dados);
    }
}