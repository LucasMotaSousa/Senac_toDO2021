<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Endereco extends BaseController
{
    public function index()
    {
        $ativo['ativo'] = 'endereco';
        if($this->request->getMethod() === 'post')
        {
            log_message('alert', 'estamos no posto de endereco');
            $endereco = [
                'endereco' => $this->request->getPost('endereco'),
            ];
            session()->set($endereco);
            return redirect()->to(base_url('/experiencia'));
        }
        echo view('Base/topo');
        echo view('Navegacao/index', $ativo);
        echo view('Endereco/index');
        echo view('Base/rodape');
    }
}
