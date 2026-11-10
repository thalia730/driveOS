<section class="content-grid">
    <div class="card music-player">
        <span class="eyebrow">DRIVEOS PLAYER</span>
        <div class="album-art">♫</div>
        <h2 id="currentTitle">Escolha uma música</h2><p id="currentArtist" class="muted">Sua playlist começa aqui</p>
        <audio id="audioPlayer" preload="none"></audio>
        <div class="player-controls"><button id="previousSong" aria-label="Anterior">|◀</button><button class="play-main" id="playPause" aria-label="Reproduzir">▶</button><button id="nextSong" aria-label="Próxima">▶|</button></div>
        <p class="muted tiny" id="playerMessage">O player toca arquivos de áudio adicionados à pasta public/audio.</p>
    </div>
    <div class="card playlist-card">
        <div class="section-title"><div><span class="eyebrow">SUA BIBLIOTECA</span><h2>Faixas disponíveis</h2></div></div>
        <div class="song-list">
            <?php foreach ($musicas as $indice => $musica): ?>
            <div class="song-row">
                <button class="song-select" data-index="<?= $indice ?>"><span class="song-number"><?= $indice + 1 ?></span><span><b><?= htmlspecialchars($musica['titulo']) ?></b><small><?= htmlspecialchars($musica['artista']) ?></small></span></button>
                <form method="post" action="index.php?acao=favoritar"><input type="hidden" name="musica_id" value="<?= (int)$musica['id'] ?>"><button class="favorite-button" title="Favoritar"><?= (int)$musica['favorita'] === 1 ? '♥' : '♡' ?></button></form>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="muted tiny">Para tocar uma faixa real, coloque o arquivo correspondente em <code>public/audio/</code> e informe o nome do arquivo no banco.</p>
    </div>
</section>
<script>
window.driveSongs = <?= json_encode(array_map(fn($m) => [
    'titulo' => $m['titulo'], 'artista' => $m['artista'], 'arquivo' => $m['arquivo']
], $musicas), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
</script>
