<?php
class Musica
{
    public static function listar(PDO $pdo): array
    {
        return $pdo->query("SELECT * FROM musicas ORDER BY favorita DESC, titulo ASC")->fetchAll();
    }

    public static function alternarFavorita(PDO $pdo, int $id): void
    {
        $stmt = $pdo->prepare("UPDATE musicas SET favorita = IF(favorita = 1, 0, 1) WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
