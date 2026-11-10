<aside class="sidebar">
    <a class="brand" href="index.php"><span class="brand-symbol">D</span><span>drive<strong>OS</strong></span></a>
    <div class="side-label">MENU PRINCIPAL</div>
    <nav class="side-nav">
        <a class="<?= $pagina === 'inicio' ? 'active' : '' ?>" href="index.php?pagina=inicio"><span>⌂</span> Início</a>
        <a class="<?= $pagina === 'musica' ? 'active' : '' ?>" href="index.php?pagina=musica"><span>♫</span> Multimídia</a>
        <a class="<?= $pagina === 'navegacao' ? 'active' : '' ?>" href="index.php?pagina=navegacao"><span>⌖</span> Navegação</a>
        <a class="<?= $pagina === 'veiculo' ? 'active' : '' ?>" href="index.php?pagina=veiculo"><span>▤</span> Veículo</a>
        <a class="<?= $pagina === 'climatizacao' ? 'active' : '' ?>" href="index.php?pagina=climatizacao"><span>❄</span> Climatização</a>
        <a class="<?= $pagina === 'bluetooth' ? 'active' : '' ?>" href="index.php?pagina=bluetooth"><span>ᛒ</span> Bluetooth</a>
    </nav>
    <div class="sidebar-bottom">
        <a class="<?= $pagina === 'configuracoes' ? 'active' : '' ?>" href="index.php?pagina=configuracoes"><span>⚙</span> Configurações</a>
        <div class="profile-mini"><div class="avatar">D</div><div><b>Motorista</b><small>Perfil demonstrativo</small></div></div>
    </div>
</aside>
