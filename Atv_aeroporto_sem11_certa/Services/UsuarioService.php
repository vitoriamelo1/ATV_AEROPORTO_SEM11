<?php
class UsuarioService {
    private $usuarioRepository;

    public function __construct(UsuarioRepositoryInterface $usuarioRepository) {
        $this->usuarioRepository = $usuarioRepository;
    }

    public function adicionarUsuario($id, $nome, $senha) {
        $usuario = new Usuario($id, $nome, $senha);
        $this->usuarioRepository->adicionarUsuario($usuario);
    }

    public function autenticar($nome, $senha) {
        return $this->usuarioRepository->autenticar($nome, $senha);
    }
}
