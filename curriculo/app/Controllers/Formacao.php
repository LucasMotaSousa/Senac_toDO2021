<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Formacao extends BaseController
{
    public function index()
    {
        $ativo['ativo'] = 'formacao';
        if($this->request->getMethod() === 'post')
        {
            $formacao = [
                'formacao' => $this->request->getPost('formacao'),
            ];
            session()->set($formacao);
            return redirect()->to(base_url('/habilidade'));
        }
        echo view('Base/topo');
        echo view('Navegacao/index', $ativo);
        echo view('Formacao/index');
        echo view('Base/rodape');
    }
}
