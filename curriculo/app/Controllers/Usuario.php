<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function index()
    {
        
    }

    public function atualizasenha($id)
    {
        $usuarioModel = new usuarioModel();
        $usuario = $usuarioModel->find($id);
        $dados = [
            'email' => $usuario['email'],
            'id' => $id,
        ];

        if($this->request->getMethod() === 'post')
        {
            $dados = [
                'id' => $this->request->getPost('id'),
                'email' => $this->request->getPost('email'),
                'senha' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT)
            ];

            if($usuarioModel->atualizarSenha($dados))
            {
                return redirect()->to(base_url());
            } else {
                session()->setFlashData('msg', 'Erro na atualização ! tente novamente');
            }
        }

        return view ('Usuario/index', $dados);
    }
}
