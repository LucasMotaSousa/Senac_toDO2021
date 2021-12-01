<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Navegacao extends BaseController
{
    public function index()
    {
        $ativo = [
            'ativo' => 'dados',
        ];
        echo view('Base/topo');
        echo view('Navegacao/index', $ativo);
        echo view('Base/rodape');
    }
}
