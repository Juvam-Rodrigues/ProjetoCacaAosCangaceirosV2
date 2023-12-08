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

    <title>Registro</title>
</head>

<body>
    <header id="caixaTitulo">
        <img src="images/Caça aos cangaceiros.png" width="300px" height="150px" id="logo">
        <a href="/" class="conteudoHeader">Login</a>
        <a href="/registro" class="conteudoHeader">Registrar</a>
    </header>

    <div id="container">
        @if (session()->has('msg'))
            <div id="divConfirmacaoRegistro">
                <div id="textoModal">
                    Dados inseridos incorretamente!
                </div>
                <div id="btnModal">
                    <button onclick="fecharModal()">Fechar</button>
                </div>
            </div>
        @endif
        <form action="/registro" method="post" id="formlogin" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h1>Registro</h1>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            <input type="email" name="email" id="email" placeholder="Digite seu email" required>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            <input type="password" name="confirmacao" id="confirmacao" placeholder="Digite sua senha novamente"
                required>
            <button type="submit" id="enviar">Cadastrar</button>
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
