<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/facebook.css">
    <link rel="shortcut icon" href="imagens/favicon-icon.png" type="image/x-icon">
    <script src="validator.js" defer></script>
    <title>Facebook - entre ou cadastre-se</title>
</head>

<body>
    <main>
        <div class="container-titulo">
            <h2>Facebook</h2>
            <p>O Facebook ajuda voce a se conectar e <br> compartilhar com as pessoas que <br> fazem
                parte da sua vida</p>
        </div>
        <section class="container-formulario">

            <form action="resultado.php" id="formulario" name="form" method="get">

                <input id="email" type="email" name="email" placeholder="Email ou Telefone">

                <input id="senha" type="password" name="senha" placeholder="Senha">

                <button type="submit" id="btn-entrar">Entrar</button>

                <a id="btn-senha" href="">Esqueceu a senha?</a>

                <hr id="linha">

                <button type="submit" id="btn-conta" onclick="submit()">Criar nova conta</button>
            </form>

            <div class="container-pagina">
                <p>
                    <a href=""><strong>Criar uma página</strong></a> para uma celebridade, uma marca ou uma <br> empresa
                </p>
            </div>
        </section>
    </main>

    <div class="space">

    </div>

    <div class="footer">
        <ul>
            <li><a href="">Portugues (Brasil)</a></li>
            <li><a href="">English (US)</a></li>
            <li><a href="">Espanol</a></li>
            <li><a href="">Italiano</a></li>
            <li><a href="">Deutsch</a></li>
        </ul>


        <ul>
            <li><a href="">Cadastre-se</a></li>
            <li><a href="">Entrar</a></li>
            <li><a href="">Facebook Lite</a></li>
            <li><a href="">Watch</a></li>
            <li><a href="">Locais</a></li>
            <li><a href="">Jogos</a></li>
            <li><a href="">Marktplace</a></li>
            <li><a href="">Meta Play</a></li>
            <li><a href="">Loja da Meta</a></li>
            <li><a href="">Meta Quest</a></li>
            <li><a href="">Instagram</a></li>
        </ul>
        <ul>
            <li><a href="">Campanhas de arrecadação de fundos</a></li>
            <li><a href="">Serviços</a></li>
            <li><a href="">Central de informação de votação</a></li>
            <li><a href="">Politica de privacidade</a></li>
            <li><a href="">Central de privacidade</a></li>
            <li><a href="">Grupos</a></li>
            <li><a href="">Sobre</a></li>
        </ul>
        <ul>
            <li><a href="">Criar página</a></li>
            <li><a href="">Desenvolvedores</a></li>
            <li><a href="">Carreiras</a></li>
            <li><a href="">Cookies</a></li>
            <li><a href="">Escolhas para anuncios</a></li>
            <li><a href="">Termos</a></li>
            <li><a href="">Ajuda</a></li>
            <li><a href="">Carregamento de contatos e não usuarios</a></li>
        </ul>


        <ul>
            <li>
                <p>Meta@ 2023</p>
            </li>
        </ul>
    </div>

    <style>
    @charset "utf-8";

    * {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
    }

    body {
        width: 100vw;
        height: 100vh;
        background-color: #f0f2f5;
        overflow-x: hidden;
    }

    main {
        width: 90vw;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    div.container-titulo {
        width: auto;
        display: flex;
        align-items: left;
        flex-direction: column;
        gap: 20px;
        margin: auto 10px;
        padding: 10px;
    }

    div.container-titulo>h2 {
        color: #1877f2;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 55px;
        font-weight: bold;
    }

    div.container-titulo>p {
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
    }

    section.container-formulario {
        padding: 10px;
        margin: auto 10px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
    }

    form>input[type="email"],
    input[type="password"] {
        width: 100%;
        height: 50px;
        border: 1px solid dimgray;
        border-radius: 5px;
        padding: 0px 5px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 17px;
        outline: 0;
    }

    form>button#btn-entrar {
        width: 100%;
        height: 45px;
        background-color: #1877f2;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    form>a#btn-senha {
        text-align: center;
        text-decoration: none;
        color: #1877f2;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }

    form>button#btn-conta {
        width: 50%;
        height: 45px;
        margin: auto;
        background-color: #36a420;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border: none;
        border-radius: 5px;
    }

    div.container-pagina {
        width: auto;
        padding: 10px;
    }

    div.container-pagina>p {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }

    div.container-pagina a {
        text-decoration: none;
        color: black;
    }

    div.space {
        width: 100vw;
        height: 150px;
    }

    div.footer {
        background-color: white;
        display: block;
        margin: 0 auto;
        position: relative;
        top: 90vh;
        bottom: 0;
        width: 100vw;
        padding: 10px;
    }

    ul {
        display: flex;

        list-style-type: none;
        margin: 0;
        padding: 0;

        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 120px;
    }

    li {
        direction: ltr;
        line-height: 1.34;
    }

    ul>li>a {
        margin: auto 2px;
        text-decoration: none;
        color: dimgray;
        font-size: 13px;
        font-family: Arial, Helvetica, sans-serif;
    }

    ul>li>a:hover {
        text-decoration: underline;
    }

    @media screen and (min-width: 320px) and (max-width: 480px) {
        main {
            height: auto;
            width: auto;
            flex-direction: column;
        }

        form {
            width: 90vw;
        }

        div.container-titulo h2 {
            width: 90vw;
            height: auto;
            text-align: center;
            font-size: 50px;
            padding: auto;
        }

        div.container-titulo p {
            width: 90vw;
            text-align: center;
            font-size: 19px;
        }

        div.container-pagina>p {
            text-align: center;
        }

        form>button#btn-conta {
            width: 50vw;
        }

        div.space,
        div.footer {
            display: none;
        }
    }

    @media screen and (min-width: 481px) and (max-width: 768px) {
        main {
            height: 100vh;
            width: max-content;
            flex-direction: column;
        }

        form {
            width: 90vw;
            height: 60vh;
        }

        div.container-titulo {
            width: 90vw;
            margin: 20px auto;
        }

        div.container-titulo>h2 {
            font-size: 60px;
            text-align: center;
            margin: 40px;
        }

        div.container-titulo>p {
            font-size: 35px;
            text-align: center;
        }

        form>input[type="email"],
        input[type="password"] {
            height: 50px;
            padding: 10px;
        }


        div.container-pagina {
            margin-top: 60px;
        }

        div.container-pagina>p {
            text-align: center;
            margin: 10px 0px;
        }

        form>button#btn-conta {
            margin-bottom: 30px;
        }

        div.space,
        div.footer {
            display: none;
        }
    }

    @media screen and (min-width: 769px) and (max-width: 1024px) {
        main {
            height: 100vh;
            width: max-content;
            flex-direction: column;
        }

        form {
            width: 90vw;
            height: 60vh;
        }

        div.container-titulo {
            width: 90vw;
            margin: auto;
        }

        div.container-titulo>h2 {
            font-size: 60px;
            text-align: center;
        }

        form>input[type="email"],
        input[type="password"] {
            height: 50px;
            padding: 10px;
        }

        form>button#btn-conta {
            margin-bottom: 30px;
        }

        a#btn-senha {
            margin: 10px;
        }

        div.container-titulo>p {
            font-size: 35px;
            text-align: center;
        }

        div.container-pagina {
            display: none;
        }

        div.container-pagina>p {
            text-align: center;
        }

        div.space,
        div.footer {
            display: none;
        }
    }

    /*
    @media screen and (min-width: 1025px)
    </style>*/

</body>

</html>