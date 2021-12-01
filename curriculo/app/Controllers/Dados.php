<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dados extends BaseController
{
    public function index()
    {
        $ativo['ativo'] = 'dados';
        if($this->request->getMethod() === 'post')
        {
            $dados = [
                'nome' => $this->request->getPost('nome'),
                'nacimento' => $this->request->getPost('nacimento'),
                'sexo' => $this->request->getPost('sexo'),
                'civil' => $this->request->getPost('civil')
            ];
            session()->set($dados);
            return redirect()->to(base_url('/endereco'));
        }
        echo view('Base/topo');
        echo view('Navegacao/index', $ativo);
        echo view('Dados/index');
        echo view('Base/rodape');
    }
}
