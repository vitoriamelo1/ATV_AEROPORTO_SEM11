<?php
interface VooRepositoryInterface {
    public function adicionarVoo(Voo $voo);
    public function listarVoos();
    public function cancelarVoo($vooId);
}

class VooRepository implements VooRepositoryInterface {
    private $voos = [];

    public function adicionarVoo(Voo $voo) {
        $this->voos[$voo->id] = $voo;
    }

    public function listarVoos() {
        return $this->voos;
    }

    public function cancelarVoo($vooId) {
        unset($this->voos[$vooId]);
    }
}
