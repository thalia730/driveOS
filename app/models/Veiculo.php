<?php
class Veiculo
{
    public static function buscar(PDO $pdo): array
    {
        $stmt = $pdo->query("SELECT * FROM veiculo LIMIT 1");
        return $stmt->fetch() ?: [
            'modelo' => 'Veículo demonstrativo',
            'combustivel' => 65,
            'quilometragem' => 48732,
            'temperatura_motor' => 90,
            'autonomia' => 520
        ];
    }
}
