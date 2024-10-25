<?php
require_once 'models/Voo.php';
require_once 'models/Usuario.php';
require_once 'repositories/VooRepository.php';
require_once 'repositories/UsuarioRepository.php';
require_once 'services/VooService.php';
require_once 'services/UsuarioService.php';
require_once 'controllers/AeroportoController.php';

// Configuração do repositório e serviços
$vooRepository = new VooRepository();
$usuarioRepository = new UsuarioRepository();

$vooService = new VooService($vooRepository);
$usuarioService = new UsuarioService($usuarioRepository);

$aeroportoController = new AeroportoController($vooService, $usuarioService);

// Adicionando usuários
$aeroportoController->adicionarUsuario(1, "admin", "senha123");

// Autenticando usuário
$aeroportoController->autenticarUsuario("admin", "senha123");

// Adicionando voos
$aeroportoController->adicionarVoo(1, "São Paulo", "Rio de Janeiro", "10:00");
$aeroportoController->adicionarVoo(2, "Rio de Janeiro", "Belo Horizonte", "12:30");

// Listando voos
$aeroportoController->listarVoos();

// Cancelando um voo
$aeroportoController->cancelarVoo(1);

// Listando voos após o cancelamento
$aeroportoController->listarVoos();
