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
        <a href="/prejogo" class="btn conteudoHeader" id="enredobtn">Enredo do jogo</a>
        <a href="/ranking" class="btn conteudoHeader">Ranking</a>
        <div class="submenu-trigger btn conteudoHeader" id="submenu-trigger">
            <span> {{ session()->get('jogador')->nome }} </span>
            <div class="submenu" id="submenu">
                <a href="/deslogar">Deslogar</a>
            </div>
        </div>
    </header>

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
                {{-- ORDER BY acertos DESC, data_atual DESC, tempo_atual DESC --}}
                @foreach (session()->get('jogador')->partidas()->orderBy('acertos', 'desc')->orderBy('data_atual', 'desc')->orderBy('tempo_atual', 'desc')->get() as $partida)
                <tr>
                        <td>{{ session()->get('jogador')->id }}</td>
                        <td>{{ session()->get('jogador')->nome }}</td>
                        <td>{{ $partida->acertos }}</td>
                        <td>{{ $partida->erros }}</td>
                        <td>{{ $partida->data_atual }}</td>
                        <td>{{ $partida->tempo_atual }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


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
