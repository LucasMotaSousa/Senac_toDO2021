<?php

namespace App\Controllers;

class Curriculo extends BaseController
{
    public function index()
    {
        echo view('Base/topo');
        echo view('Curriculo/index');
        echo view('Base/rodape');
    }
}
