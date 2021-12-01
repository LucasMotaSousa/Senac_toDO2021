<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;


class Login extends BaseController
{
    public function index()
    {   
    
        if($this->request->getMethod() === 'post')
        {
            $dados = [
                'email' => $this->request->getPost('inputEmail'),
                'password' => $this->request->getPost('inputPassword'),
            ];
            
            $dadosUsuario = new UsuarioModel();
            $usuario = $dadosUsuario->getByEmail($dados['email']);

            if($dadosUsuario->verifica($dados))
            {
                log_message('alert','Entrou nomodel -> verifica');
                session()->set('logado', true);
                session()->set('nome', $usuario['nome']);
                
                if($dados['email'] === 'admin@admin' && is_null($usuario['atualizado_em']))
                {
                    $id = $usuario['id'];
                    return  redirect()->to(base_url("Usuario/atualizasenha/{$id}"));
                }
            
                $this->logger->alert( 'continuando a verificando password');
                
                return redirect()->to(base_url());

            }
            session()->setFlashData('msg', 'Usuário ou Senha incorretos');
            return redirect()->to(base_url('/login'));
        }
        
        echo view ('Login/index');
    }
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url());
    }
}
