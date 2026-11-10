<?php
class Configuracao
{
    public static function buscar(PDO $pdo, string $chave, string $padrao = ''): string
    {
        $sql = "SELECT valor FROM configuracoes WHERE chave = :chave LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['chave' => $chave]);
        $resultado = $stmt->fetch();
        return $resultado ? (string)$resultado['valor'] : $padrao;
    }

    public static function salvar(PDO $pdo, string $chave, string $valor): void
    {
        $sql = "INSERT INTO configuracoes (chave, valor)
                VALUES (:chave, :valor)
                ON DUPLICATE KEY UPDATE valor = VALUES(valor)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['chave' => $chave, 'valor' => $valor]);
    }
}
