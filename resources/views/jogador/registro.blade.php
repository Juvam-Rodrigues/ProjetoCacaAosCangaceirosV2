<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Registro</title>
</head>

<body>
    <header>
        <nav>

        </nav>
    </header>
    <main>
        <div class="content">
            @if (session()->has('msg'))
                <div>
                    Dados inseridos incorretamente!
                    <button type="button" class="btn-close p-1 m-0" data-bs-dismiss="alert" aria-label="Close"
                        style="margin-top: 2px"></button>
                </div>
            @endif
            <form action="/registro" method="post" id="form-login" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Registro</h1>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                <input type="email" name="email" id="email" placeholder="Digite seu email">
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                <input type="password" name="confirmacao" id="confirmacao" placeholder="Digite sua senha novamente">
                <button type="submit">Cadastrar</button>
            </form>

        </div>

    </main>

</body>

</html>
