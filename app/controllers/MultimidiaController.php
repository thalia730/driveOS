<?php
class MultimidiaController
{
    public static function index(PDO $pdo): void
    {
        $pagina = $_GET['pagina'] ?? 'inicio';
        $permitidas = ['inicio', 'musica', 'navegacao', 'veiculo', 'climatizacao', 'bluetooth', 'configuracoes'];
        if (!in_array($pagina, $permitidas, true)) {
            $pagina = 'inicio';
        }

        $musicas = Musica::listar($pdo);
        $veiculo = Veiculo::buscar($pdo);
        $tema = Configuracao::buscar($pdo, 'tema', 'escuro');
        $volume = Configuracao::buscar($pdo, 'volume', '65');
        $temperatura = Configuracao::buscar($pdo, 'temperatura', '22');

        require __DIR__ . '/../views/dashboard.php';
    }

    public static function alternarFavorita(PDO $pdo): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['musica_id'])) {
            Musica::alternarFavorita($pdo, (int)$_POST['musica_id']);
        }
        header('Location: index.php?pagina=musica');
        exit;
    }

    public static function salvarConfiguracoes(PDO $pdo): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tema = ($_POST['tema'] ?? 'escuro') === 'claro' ? 'claro' : 'escuro';
            $volume = max(0, min(100, (int)($_POST['volume'] ?? 65)));
            $temperatura = max(16, min(30, (int)($_POST['temperatura'] ?? 22)));

            Configuracao::salvar($pdo, 'tema', $tema);
            Configuracao::salvar($pdo, 'volume', (string)$volume);
            Configuracao::salvar($pdo, 'temperatura', (string)$temperatura);
        }
        header('Location: index.php?pagina=configuracoes&salvo=1');
        exit;
    }
}
