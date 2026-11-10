<section class="climate-layout">
    <div class="card climate-main"><span class="eyebrow">CONFORTO INTERNO</span><h2>Climatização</h2><p class="muted">Ajuste os controles da simulação.</p>
        <div class="temperature-control"><button id="tempMinus">−</button><div><strong id="tempValue"><?= (int)$temperatura ?>°</strong><small>Temperatura desejada</small></div><button id="tempPlus">+</button></div>
        <div class="climate-actions"><button class="climate-toggle" id="acToggle">❄ Ar-condicionado <b>Desligado</b></button><button class="climate-toggle" id="autoToggle">AUTO <b>Desligado</b></button><button class="climate-toggle" id="defrostToggle">▤ Desembaçador <b>Desligado</b></button></div>
    </div>
    <div class="card fan-card"><span class="eyebrow">VENTILAÇÃO</span><h2>Intensidade do ar</h2><strong id="fanLevel">2</strong><input id="fanSlider" type="range" min="0" max="5" value="2"><div class="range-labels"><span>Baixa</span><span>Alta</span></div><p class="muted tiny">Controles visuais; não alteram a temperatura de um veículo real.</p></div>
</section>
