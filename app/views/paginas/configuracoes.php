<section class="card settings-card">
    <span class="eyebrow">PREFERÊNCIAS DO SISTEMA</span><h2>Personalize sua central</h2>
    <?php if (isset($_GET['salvo'])): ?><div class="success-message">Configurações salvas com sucesso!</div><?php endif; ?>
    <form method="post" action="index.php?acao=salvarConfiguracoes" class="settings-form">
        <label for="tema">Tema da interface</label><select name="tema" id="tema"><option value="escuro" <?= $tema === 'escuro' ? 'selected' : '' ?>>Escuro</option><option value="claro" <?= $tema === 'claro' ? 'selected' : '' ?>>Claro</option></select>
        <label for="volume">Volume padrão: <span id="volumeLabel"><?= (int)$volume ?>%</span></label><input type="range" min="0" max="100" name="volume" id="volume" value="<?= (int)$volume ?>">
        <label for="temperatura">Temperatura padrão</label><select name="temperatura" id="temperatura"><?php for ($t=16; $t<=30; $t++): ?><option value="<?= $t ?>" <?= (int)$temperatura === $t ? 'selected' : '' ?>><?= $t ?> °C</option><?php endfor; ?></select>
        <button class="primary-button" type="submit">Salvar preferências</button>
    </form>
</section>
