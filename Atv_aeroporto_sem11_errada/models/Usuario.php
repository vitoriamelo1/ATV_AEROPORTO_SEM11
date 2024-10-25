<?php
class Usuario {
    public $id;
    public $nome;
    public $senha;

    public function __construct($id, $nome, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
    }
}
