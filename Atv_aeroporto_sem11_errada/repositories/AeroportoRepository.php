<?php
class Aeroporto {
    private $voos = [];
    private $usuarios = [];

    public function adicionarVoo($id, $origem, $destino, $hora) {
        $voo = new Voo($id, $origem, $destino, $hora);
        $this->voos[$id] = $voo;
    }

    public function listarVoos() {
        return $this->voos;
    }

    public function cancelarVoo($vooId) {
        unset($this->voos[$vooId]);
    }

    public function adicionarUsuario($id, $nome, $senha) {
        $usuario = new Usuario($id, $nome, $senha);
        $this->usuarios[$id] = $usuario;
    }

    public function autenticarUsuario($nome, $senha) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->nome === $nome && $usuario->senha === $senha) {
                return true;
            }
        }
        return false;
    }
}
