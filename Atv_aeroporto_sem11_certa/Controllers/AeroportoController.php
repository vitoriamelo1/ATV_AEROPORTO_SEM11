<?php
class AeroportoController {
    private $vooService;
    private $usuarioService;

    public function __construct(VooService $vooService, UsuarioService $usuarioService) {
        $this->vooService = $vooService;
        $this->usuarioService = $usuarioService;
    }

    public function adicionarVoo($id, $origem, $destino, $hora) {
        $this->vooService->adicionarVoo($id, $origem, $destino, $hora);
        echo "Voo adicionado: $id de $origem para $destino às $hora\n";
    }

    public function listarVoos() {
        $voos = $this->vooService->listarVoos();
        echo "Voos:\n";
        foreach ($voos as $voo) {
            echo "ID: $voo->id | Origem: $voo->origem | Destino: $voo->destino | Hora: $voo->hora\n";
        }
    }

    public function cancelarVoo($vooId) {
        $this->vooService->cancelarVoo($vooId);
        echo "Voo $vooId cancelado.\n";
    }

    public function adicionarUsuario($id, $nome, $senha) {
        $this->usuarioService->adicionarUsuario($id, $nome, $senha);
        echo "Usuário adicionado: $nome\n";
    }

    public function autenticarUsuario($nome, $senha) {
        if ($this->usuarioService->autenticar($nome, $senha)) {
            echo "Usuário autenticado: $nome\n";
        } else {
            echo "Falha na autenticação\n";
        }
    }
}
