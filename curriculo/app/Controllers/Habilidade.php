<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Habilidade extends BaseController
{
    public function index()
    {

        $ativo['ativo'] = 'habilidade';
        if($this->request->getMethod() === 'post')
        {
            $habilidade = [
                'habilidade' => $this->request->getPost('habilidade'),
            ];
            session()->set($habilidade);
            return redirect()->to(base_url('/objetivo'));
        }
        echo view('Base/topo');
        echo view('Navegacao/index', $ativo);
        echo view('Habilidade/index');
        echo view('Base/rodape');
    }
}
