<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="response.css">
    <title>Resultado PHP</title>
</head>

<body>
    <section>
        <?php
        $senha = $_REQUEST['senha'];
        $email = $_REQUEST['email'];
        echo "A sua senha é <strong>$senha</strong><br>";
        echo "O seu email é <strong>$email</strong>";
        ?>
    </section>

    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: rgb(36, 29, 172);
    }

    section {
        display: block;
        margin: 20px auto;
        width: max-content;
        padding: 20px;
        border-radius: 10px;
        background-color: white;
        color: black;
        text-align: center;
    }
    </style>
</body>

</html>