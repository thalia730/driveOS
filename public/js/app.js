// Relógio do painel
function atualizarRelogio() {
    const elemento = document.getElementById('clock');
    if (elemento) elemento.textContent = new Date().toLocaleTimeString('pt-BR', {hour: '2-digit', minute: '2-digit'});
}
atualizarRelogio();
setInterval(atualizarRelogio, 30000);

// Player de áudio: os arquivos precisam existir em public/audio/
const audio = document.getElementById('audioPlayer');
if (audio) {
    const songs = window.driveSongs || [];
    let current = 0;
    const title = document.getElementById('currentTitle');
    const artist = document.getElementById('currentArtist');
    const play = document.getElementById('playPause');
    const message = document.getElementById('playerMessage');

    function loadSong(index) {
        if (!songs.length) {
            message.textContent = 'Nenhuma faixa cadastrada. Adicione músicas na tabela musicas e os arquivos em public/audio/.';
            return;
        }
        current = (index + songs.length) % songs.length;
        const song = songs[current];
        title.textContent = song.titulo;
        artist.textContent = song.artista;
        audio.src = song.arquivo ? 'public/audio/' + encodeURIComponent(song.arquivo) : '';
        message.textContent = song.arquivo ? 'Faixa selecionada.' : 'Esta faixa ainda não possui arquivo de áudio cadastrado.';
        play.textContent = '▶';
    }
    play.addEventListener('click', async () => {
        if (!songs.length || !songs[current]?.arquivo) {
            message.textContent = 'Adicione um arquivo MP3 à pasta public/audio e informe o nome no banco.';
            return;
        }
        if (audio.paused) {
            try { await audio.play(); play.textContent = 'Ⅱ'; }
            catch (e) { message.textContent = 'Não foi possível reproduzir o arquivo. Verifique o caminho e o formato.'; }
        } else { audio.pause(); play.textContent = '▶'; }
    });
    document.getElementById('nextSong').addEventListener('click', () => loadSong(current + 1));
    document.getElementById('previousSong').addEventListener('click', () => loadSong(current - 1));
    document.querySelectorAll('.song-select').forEach(button => button.addEventListener('click', () => {
        loadSong(Number(button.dataset.index));
    }));
    audio.addEventListener('ended', () => loadSong(current + 1));
    loadSong(0);
}

// Navegação demonstrativa
const routeButton = document.getElementById('calculateRoute');
if (routeButton) {
    routeButton.addEventListener('click', () => {
        const destination = document.getElementById('destination').value.trim();
        const result = document.getElementById('routeResult');
        result.textContent = destination
            ? `Rota demonstrativa para "${destination}": distância estimada fictícia de 8,4 km • 15 min.`
            : 'Digite um destino antes de simular a rota.';
    });
}

// Climatização demonstrativa
const tempValue = document.getElementById('tempValue');
if (tempValue) {
    let temp = Number(tempValue.textContent.replace('°', ''));
    document.getElementById('tempMinus').addEventListener('click', () => { temp = Math.max(16, temp - 1); tempValue.textContent = temp + '°'; });
    document.getElementById('tempPlus').addEventListener('click', () => { temp = Math.min(30, temp + 1); tempValue.textContent = temp + '°'; });
    ['acToggle', 'autoToggle', 'defrostToggle'].forEach(id => {
        document.getElementById(id).addEventListener('click', event => {
            const button = event.currentTarget;
            const state = button.querySelector('b');
            const active = state.textContent === 'Ligado';
            state.textContent = active ? 'Desligado' : 'Ligado';
            button.classList.toggle('selected', !active);
        });
    });
    const fan = document.getElementById('fanSlider');
    fan.addEventListener('input', () => document.getElementById('fanLevel').textContent = fan.value);
}

// Bluetooth demonstrativo
const connect = document.getElementById('connectDevice');
if (connect) {
    connect.addEventListener('click', () => {
        const connected = connect.dataset.connected === 'true';
        connect.dataset.connected = connected ? 'false' : 'true';
        document.getElementById('deviceName').textContent = connected ? 'Nenhum dispositivo conectado' : 'Meu celular';
        document.getElementById('deviceStatus').textContent = connected ? 'Bluetooth demonstrativo' : 'Conectado (simulação)';
        connect.textContent = connected ? 'Conectar' : 'Desconectar';
    });
}

// Atualização visual do volume nas configurações
const volume = document.getElementById('volume');
if (volume) volume.addEventListener('input', () => document.getElementById('volumeLabel').textContent = volume.value + '%');
