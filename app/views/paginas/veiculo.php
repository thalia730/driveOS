<section class="vehicle-page-grid">
    <div class="card vehicle-overview"><span class="eyebrow">RESUMO DO VEÍCULO</span><h2><?= htmlspecialchars($veiculo['modelo']) ?></h2><div class="vehicle-illustration">🚘</div><span class="pill">Dados demonstrativos</span></div>
    <div class="vehicle-data-grid">
        <div class="card metric-card"><span>Combustível</span><strong><?= (int)$veiculo['combustivel'] ?>%</strong><div class="progress"><i style="width:<?= (int)$veiculo['combustivel'] ?>%"></i></div></div>
        <div class="card metric-card"><span>Autonomia</span><strong><?= (int)$veiculo['autonomia'] ?> <small>km</small></strong></div>
        <div class="card metric-card"><span>Quilometragem</span><strong><?= number_format((int)$veiculo['quilometragem'], 0, ',', '.') ?> <small>km</small></strong></div>
        <div class="card metric-card"><span>Temperatura do motor</span><strong><?= (int)$veiculo['temperatura_motor'] ?> <small>°C</small></strong></div>
    </div>
</section>
<div class="card notice-card"><span>ⓘ</span><p>Os valores desta página são fictícios para fins acadêmicos. Para ler dados reais do automóvel seria necessário integrar a central a uma interface veicular compatível, como um adaptador OBD-II, e implementar validações de segurança.</p></div>
