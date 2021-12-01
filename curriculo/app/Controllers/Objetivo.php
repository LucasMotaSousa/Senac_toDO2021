<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Objetivo extends BaseController
{
    public function index()
    {

        $ativo['ativo'] = 'objetivo';
        if($this->request->getMethod() === 'post')
        {
            $objetivo = [
                'objetivo' => $this->request->getPost('objetivo'),
            ];
            session()->set($objetivo);
            return redirect()->to(base_url('/impressao'));
        }
        echo view('Base/topo');
        echo view('Navegacao/index', $ativo);
        echo view('Objetivo/index');
        echo view('Base/rodape');
    }
}
