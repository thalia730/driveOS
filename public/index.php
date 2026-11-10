<?php
declare(strict_types=1);
session_start();

require_once __DIR__ . '/../config/conexao.php';
require_once __DIR__ . '/../app/models/Configuracao.php';
require_once __DIR__ . '/../app/models/Musica.php';
require_once __DIR__ . '/../app/models/Veiculo.php';
require_once __DIR__ . '/../app/controllers/MultimidiaController.php';

$acao = $_GET['acao'] ?? '';

if ($acao === 'favoritar') {
    MultimidiaController::alternarFavorita($pdo);
} elseif ($acao === 'salvarConfiguracoes') {
    MultimidiaController::salvarConfiguracoes($pdo);
} else {
    MultimidiaController::index($pdo);
}
