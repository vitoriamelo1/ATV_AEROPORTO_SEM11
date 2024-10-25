<?php
interface UsuarioRepositoryInterface {
    public function adicionarUsuario(Usuario $usuario);
    public function autenticar($nome, $senha);
}

class UsuarioRepository implements UsuarioRepositoryInterface {
    private $usuarios = [];

    public function adicionarUsuario(Usuario $usuario) {
        $this->usuarios[$usuario->id] = $usuario;
    }

    public function autenticar($nome, $senha) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->nome === $nome && $usuario->senha === $senha) {
                return true;
            }
        }
        return false;
    }
}
