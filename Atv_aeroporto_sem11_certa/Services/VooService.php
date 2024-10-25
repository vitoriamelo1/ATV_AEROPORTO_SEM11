<?php
class VooService {
    private $vooRepository;

    public function __construct(VooRepositoryInterface $vooRepository) {
        $this->vooRepository = $vooRepository;
    }

    public function adicionarVoo($id, $origem, $destino, $hora) {
        $voo = new Voo($id, $origem, $destino, $hora);
        $this->vooRepository->adicionarVoo($voo);
    }

    public function listarVoos() {
        return $this->vooRepository->listarVoos();
    }

    public function cancelarVoo($vooId) {
        $this->vooRepository->cancelarVoo($vooId);
    }
}
