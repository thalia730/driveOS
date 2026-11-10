<section class="content-grid">
    <div class="card map-card">
        <div class="map-placeholder"><div class="map-road road-one"></div><div class="map-road road-two"></div><div class="map-road road-three"></div><span class="map-pin">●</span><span class="map-label">DESTINO</span><div class="map-watermark">MAPA DEMONSTRATIVO</div></div>
        <div class="map-legend"><span class="status-dot"></span> Mapa ilustrativo • sem GPS conectado</div>
    </div>
    <div class="card destination-card">
        <span class="eyebrow">PLANEJAR VIAGEM</span><h2>Para onde vamos?</h2>
        <label for="origin">Ponto de partida</label><input id="origin" value="Minha localização (simulada)">
        <label for="destination">Destino</label><input id="destination" placeholder="Digite um endereço ou local">
        <button class="primary-button" id="calculateRoute">Simular rota</button>
        <div id="routeResult" class="route-result">Informe um destino para visualizar uma estimativa fictícia.</div>
        <p class="muted tiny">Esta tela não utiliza localização real nem fornece orientação de trânsito. Uma integração futura com serviço de mapas pode substituir a demonstração.</p>
    </div>
</section>
