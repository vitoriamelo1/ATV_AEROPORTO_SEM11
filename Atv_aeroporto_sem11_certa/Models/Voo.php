<?php
class Voo {
    public $id;
    public $origem;
    public $destino;
    public $hora;

    public function __construct($id, $origem, $destino, $hora) {
        $this->id = $id;
        $this->origem = $origem;
        $this->destino = $destino;
        $this->hora = $hora;
    }
}
