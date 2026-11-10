DRIVEOS — SISTEMA DE CENTRAL MULTIMÍDIA AUTOMOTIVA
=================================================

REQUISITOS
- Laragon com Apache e MySQL
- PHP 8 ou superior recomendado
- DBeaver para importar o banco de dados

INSTALAÇÃO NO LARAGON
1. Extraia a pasta driveOS para:
   C:\laragon\www\driveOS

2. Abra o Laragon e clique em Start All.

3. Abra o DBeaver e conecte no MySQL local.
   Normalmente:
   Host: localhost
   Porta: 3306
   Usuário: root
   Senha: (vazia, se você não alterou)

4. No DBeaver, abra o arquivo:
   database/db_driveos.sql
   Execute o script inteiro (Alt+X ou botão executar script).
   Ele cria o banco db_driveos, as tabelas e alguns dados de demonstração.

5. Confira config/conexao.php. Se seu MySQL tiver outra senha, altere:
   $usuario = 'root';
   $senha = '';

6. Acesse no navegador:
   http://localhost/driveOS/

   Se o Virtual Host automático do Laragon estiver ativo, também pode funcionar:
   http://driveOS.test/

O QUE JÁ FUNCIONA
- Menu entre páginas no estilo central multimídia.
- Dashboard com imagem realista gerada para este protótipo.
- Tela de músicas com lista vinda do MySQL e botão de favorito.
- Player preparado para arquivos de áudio MP3.
- Navegação com simulação de rota.
- Tela do veículo com dados fictícios lidos do banco.
- Climatização demonstrativa.
- Bluetooth demonstrativo.
- Configurações de tema, volume e temperatura salvas no MySQL.

COMO ADICIONAR MÚSICAS REAIS
1. Copie um arquivo MP3 para public/audio/.
2. No DBeaver, atualize o campo arquivo da música. Exemplo:
   UPDATE musicas SET arquivo = 'minha-musica.mp3' WHERE id = 1;
3. Atualize a página de Multimídia e clique na faixa.

IMPORTANTE
Este é um projeto acadêmico de simulação. A imagem do interior é ilustrativa.
Os dados do veículo, mapa, Bluetooth e climatização não vêm de um automóvel real.
Não conecte este protótipo a controles físicos de direção, motor ou climatização.
Para dados reais seria necessário hardware compatível, integração específica e validação de segurança.

ESTRUTURA
app/controllers  - lógica e controle das ações
app/models       - consultas e dados
app/views        - páginas e componentes
config           - conexão com banco
database         - script SQL
public/css       - estilos
public/js        - interações
public/img       - imagem do interior do carro
public/audio     - arquivos de música
