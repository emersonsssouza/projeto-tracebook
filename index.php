<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/response.css">
    <title>Document</title>
</head>

<body>
    <section>
        <?php
        $Senha = $_REQUEST["senha"];
        $Email = $_REQUEST["email"];
        echo "A sua senha é <strong>$Senha</strong><br>";
        echo "O seu email é <strong>$Email</strong>";
        ?>
    </section>
</body>

</html>