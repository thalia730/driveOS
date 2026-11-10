<?php
$rotulos = [
    'inicio' => 'Visão geral',
    'musica' => 'Multimídia',
    'navegacao' => 'Navegação',
    'veiculo' => 'Veículo',
    'climatizacao' => 'Climatização',
    'bluetooth' => 'Bluetooth',
    'configuracoes' => 'Configurações'
];

$tema = $tema ?? 'escuro';

$pagina = $pagina ?? ($_GET['pagina'] ?? 'inicio');
$titulo = $rotulos[$pagina] ?? 'DriveOS';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo) ?> | DriveOS</title>
   <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="<?= $tema === 'claro' ? 'tema-claro' : '' ?>">
<div class="app-shell">
    <?php require __DIR__ . '/componentes/menu.php'; ?>

    <main class="main-content">
        <header class="page-header">
            <div>
                <p class="eyebrow">COCKPIT DIGITAL</p>
                <h1><?= htmlspecialchars($titulo) ?></h1>
                <p class="muted">Uma experiência conectada ao seu caminho.</p>
            </div>
            <div class="header-status"><span class="status-dot"></span> Sistema demonstrativo <strong id="clock">--:--</strong></div>
        </header>

        <?php if ($pagina === 'inicio'): ?>
            <?php require __DIR__ . '/paginas/inicio.php'; ?>
        <?php elseif ($pagina === 'musica'): ?>
            <?php require __DIR__ . '/paginas/musica.php'; ?>
        <?php elseif ($pagina === 'navegacao'): ?>
            <?php require __DIR__ . '/paginas/navegacao.php'; ?>
        <?php elseif ($pagina === 'veiculo'): ?>
            <?php require __DIR__ . '/paginas/veiculo.php'; ?>
        <?php elseif ($pagina === 'climatizacao'): ?>
            <?php require __DIR__ . '/paginas/climatizacao.php'; ?>
        <?php elseif ($pagina === 'bluetooth'): ?>
            <?php require __DIR__ . '/paginas/bluetooth.php'; ?>
        <?php elseif ($pagina === 'configuracoes'): ?>
            <?php require __DIR__ . '/paginas/configuracoes.php'; ?>
        <?php endif; ?>

        <footer class="footer-note">DriveOS • Protótipo acadêmico de central multimídia. Dados do veículo são ilustrativos.</footer>
    </main>
</div>
<script src="public/js/app.js"></script>
</body>
</html>
