<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sobre extends BaseController
{
    public function index()
    {
        echo view('Base/topo');
        echo view('Sobre/index');
        echo view('Base/rodape');
    }
}
