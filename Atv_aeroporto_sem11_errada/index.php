<?php
require_once 'models/Voo.php';
require_once 'models/Usuario.php';
require_once 'repositories/AeroportoRepository.php';

// Uso
$aeroporto = new Aeroporto();
$aeroporto->adicionarUsuario(1, "admin", "senha123");
$aeroporto->adicionarVoo(1, "São Paulo", "Rio de Janeiro", "10:00");
print_r($aeroporto->listarVoos());
