<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Experiencia extends BaseController
{
    public function index()
    {

        $ativo['ativo'] = 'experiencia';
        if($this->request->getMethod() === 'post')
        {
            $experiencia = [
                'experiencia' => $this->request->getPost('experiencia'),
            ];
            session()->set($experiencia);
            return redirect()->to(base_url('/formacao'));
        }
        echo view('Base/topo');
        echo view('Navegacao/index', $ativo);
        echo view('Experiencia/index');
        echo view('Base/rodape');
    }
}
