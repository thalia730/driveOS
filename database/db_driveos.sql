CREATE DATABASE IF NOT EXISTS db_driveos
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE db_driveos;

CREATE TABLE IF NOT EXISTS musicas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(120) NOT NULL,
    artista VARCHAR(120) NOT NULL,
    arquivo VARCHAR(180) DEFAULT NULL,
    favorita TINYINT(1) NOT NULL DEFAULT 0,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS veiculo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(120) NOT NULL,
    combustivel TINYINT UNSIGNED NOT NULL DEFAULT 65,
    quilometragem INT UNSIGNED NOT NULL DEFAULT 48732,
    temperatura_motor DECIMAL(5,1) NOT NULL DEFAULT 90,
    autonomia INT UNSIGNED NOT NULL DEFAULT 520
);

CREATE TABLE IF NOT EXISTS configuracoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chave VARCHAR(60) NOT NULL UNIQUE,
    valor VARCHAR(180) NOT NULL
);

INSERT INTO musicas (titulo, artista, arquivo, favorita) VALUES
('Caminho tranquilo', 'DriveOS Playlist', NULL, 1),
('Estrada aberta', 'DriveOS Playlist', NULL, 0),
('Noite na cidade', 'DriveOS Playlist', NULL, 0);

INSERT INTO veiculo (modelo, combustivel, quilometragem, temperatura_motor, autonomia)
SELECT 'Veículo demonstrativo', 65, 48732, 90, 520
WHERE NOT EXISTS (SELECT 1 FROM veiculo);

INSERT INTO configuracoes (chave, valor) VALUES
('tema', 'escuro'),
('volume', '65'),
('temperatura', '22')
ON DUPLICATE KEY UPDATE valor = VALUES(valor);
