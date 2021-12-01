<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'usuario';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
        'nome',
        'email',
        'senha'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'criado_em';
    protected $updatedField = 'atualizado_em';
    protected $deletedField = 'apagado_em';

    /* Retor um usuario pelo seu email */
    public function getByEmail(string $email) : array {

        $verifica = $this->where('email', $email)->first();

        return !is_null($verifica) ? $verifica : [];
    }

    public function atualizarSenha($dados)
    {
        $dadosNovos = [
            'senha' => $dados['senha'],
        ];
        $id = $dados['id'];
        return $this->update($id, $dadosNovos);
    }

    public function verifica($dados)
    {
        $usuario = $this->getByEmail($dados['email']);
        if($usuario['email'] === 'admin@admin' && is_null($usuario['atualizado_em']))
        {
            return true;
        }
        log_message('alert','Entrou no Model de Usuario');
        if(count($usuario) > 0)
        {
            log_message('alert','Entrou no count maior que zero');
            $hashSenha = $usuario['senha'];
            if(password_verify($dados['password'],$hashSenha))
            {
                return true;
            }
        }
        return false;
    }
}
