<section class="hero-grid">
    <div class="car-hero">
        <img src="public/img/interiorCarro.png" alt="Interior de um veículo moderno com central multimídia">
        <div class="image-overlay"></div>
        <div class="hero-caption">
            <span class="tag"><i></i> DRIVEOS EXPERIENCE</span>
            <h2>Seu carro.<br>Seu controle.</h2>
            <p>Explore os recursos da sua central multimídia.</p>
            <a class="primary-link" href="index.php?pagina=musica">Explorar central <span>→</span></a>
        </div>
        <a class="hotspot hotspot-wheel" href="index.php?pagina=veiculo" title="Painel do veículo">+</a>
        <a class="hotspot hotspot-screen" href="index.php?pagina=musica" title="Central multimídia">+</a>
        <a class="hotspot hotspot-climate" href="index.php?pagina=climatizacao" title="Climatização">+</a>
    </div>
    <aside class="right-column">
        <div class="card vehicle-card">
            <div class="card-heading"><div><span class="eyebrow">MEU AUTOMÓVEL</span><h3><?= htmlspecialchars($veiculo['modelo']) ?></h3></div><span class="pill">Conectado</span></div>
            <div class="car-mini">🚘</div>
            <div class="vehicle-stats">
                <div><span>Combustível</span><strong><?= (int)$veiculo['combustivel'] ?>%</strong><div class="progress"><i style="width:<?= (int)$veiculo['combustivel'] ?>%"></i></div></div>
                <div><span>Autonomia estimada</span><strong><?= (int)$veiculo['autonomia'] ?> km</strong></div>
                <div><span>Quilometragem</span><strong><?= number_format((int)$veiculo['quilometragem'], 0, ',', '.') ?> km</strong></div>
            </div>
            <a class="text-link" href="index.php?pagina=veiculo">Ver informações do veículo →</a>
        </div>
        <div class="card now-playing">
            <div class="music-cover">♫</div><div class="track-info"><span class="eyebrow">REPRODUZINDO AGORA</span><b>Escolha sua trilha</b><small>DriveOS Music</small></div><a class="round-play" href="index.php?pagina=musica">▶</a>
        </div>
    </aside>
</section>
<section class="section-block">
    <div class="section-title"><div><span class="eyebrow">ACESSO RÁPIDO</span><h2>O que deseja fazer?</h2></div></div>
    <div class="quick-grid">
        <a class="quick-card" href="index.php?pagina=musica"><span class="quick-icon">♫</span><b>Multimídia</b><small>Músicas e playlists</small><em>→</em></a>
        <a class="quick-card" href="index.php?pagina=navegacao"><span class="quick-icon">⌖</span><b>Navegação</b><small>Rotas e destinos</small><em>→</em></a>
        <a class="quick-card" href="index.php?pagina=climatizacao"><span class="quick-icon">❄</span><b>Climatização</b><small>Conforto a bordo</small><em>→</em></a>
        <a class="quick-card" href="index.php?pagina=bluetooth"><span class="quick-icon">ᛒ</span><b>Bluetooth</b><small>Dispositivos</small><em>→</em></a>
    </div>
</section>
