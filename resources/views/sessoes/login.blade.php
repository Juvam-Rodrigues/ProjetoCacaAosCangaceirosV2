<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilologinecadastro.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="{{ asset('js/script.js') }}" defer></script>

    <title>Login</title>
</head>

<body>
    <header id="caixaTitulo">
        <img src="images/Caça aos cangaceiros.png" width="300px" height="150px" id="logo">
        <a href="/" class="conteudoHeader">Login</a>
        <a href="/registro" class="conteudoHeader">Registrar</a>
    </header>

    <div id="container">
        @if (session()->has('msg'))
            <div class="divConfirmacaoRegistro" id="modal1">
                <div class="textoModal">
                    Dados inseridos com sucesso, logue pela primeira vez!
                </div>
                <div class="divBtnModal">
                    <button onclick="fecharModal('modal1')">Fechar</button>
                </div>
            </div>
        @endif

        @if (session()->has('mensagem'))
            <div class="divConfirmacaoRegistro" id="modal2">
                <div class="textoModal">
                    Insira os dados corretamente ou crie uma conta.
                </div>
                <div class="divBtnModal">
                    <button onclick="fecharModal('modal2')">Fechar</button>
                </div>
            </div>
        @endif


        <form action="/logar" method="POST" id="formlogin">
            {{ csrf_field() }}

            <h1>Login</h1>
            <input type="email" name="email" id="email" placeholder="Digite seu email" required>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            <button type="submit" id="enviar">Entrar</button>
        </form>
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
