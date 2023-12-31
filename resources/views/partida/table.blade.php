<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Caça aos Cangaceiros</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/Ponteiro.png') }}" type="image/x-icon" />
    <script src="{{ asset('js/script.js') }}" defer></script>

</head>

<body>
    <header id="caixaTitulo">
        <img src="images/Caça aos cangaceiros.png" width="300px" height="150px" id="logo">
        <a href="/partidas" class="btn conteudoHeader">Jogo</a>
        <a href="/prejogo" class="btn conteudoHeader">Enredo do jogo</a>
        <a href="/ranking" class="btn conteudoHeader">Ranking</a>
        <div class="submenu-trigger btn conteudoHeader" id="submenu-trigger" onclick="submenuAbrir()">
            <span> {{ session()->get('jogador')->nome }} </span>
            <div class="submenu" id="submenu">
                <a href="/deslogar">Deslogar</a>
            </div>
        </div>
    </header>

    @if (session()->has('msg'))
        <div id="divContainerGameOver">
            <div class="divGameOver" id="modal4">
                <div class="textoModal">
                    Você perdeu! Feche essa pop-up e clique em jogo para começar uma nova partida.
                </div>
                <div class="divBtnModal">
                    <button onclick="fecharModal('modal4')">Fechar</button>
                </div>
            </div>
        </div>
    @endif

    @if (count($ranking) === 0)
        <div id="divSemJogadores">
            <h1 id="semJogadores">Ainda não ranqueado.</h1>
        </div>
    @else
        <div id="divTable">
            <table border="1">
                <thead>
                    <tr>
                        <td><strong>ID:</strong></td>
                        <td><strong>Nome:</strong></td>
                        <td><strong>Acertos:</strong></td>
                        <td><strong>Erros:</strong></td>
                        <td><strong>Data atual:</strong></td>
                        <td><strong>Tempo atual:</strong></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ranking as $item)
                        <tr>
                            <td>{{ $item->jogador->id }}</td>
                            <td>{{ $item->jogador->nome }}</td>
                            <td>{{ $item->acertos }}</td>
                            <td>{{ $item->erros }}</td>
                            <td>{{ $item->ultima_data }}</td>
                            <td>{{ $item->ultimo_tempo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <footer>
        <div class="creditos">
            <strong>Atividade de tiro ao alvo</strong>
            <p>Disciplina: Programação para internet <br>
                Professor: Marcelo Figueiredo Barbosa Júnior <br>
                IFRN - Campus Santa Cruz - RN
            </p>
        </div>
        <div class="creditos">
            <p>Todos direitos reservado à <strong>JuvaLana - Entreteniments</strong></p>
        </div>
        <div class="creditos">
            <strong>Desenvolvido por:</strong>
            <div class="nomes">
                <img src="images/PontoDaLista.png" width="15px" height="15px" alt="">
                Alana Costa Soares Santos
            </div>
            <div class="nomes">
                <img src="images/PontoDaLista.png" width="15px" height="15px" alt="">
                Juvam Rodrigues do Nascimento Neto
            </div>

        </div>
    </footer>

</body>

</html>
