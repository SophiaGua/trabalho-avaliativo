<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/styl.css">
    <link rel="stylesheet" href="./src/css/login.css">
    <title>Document</title>
</head>

<body>


    <div class="form">
        <div class="forms">
            <p>
                Faça Login e veja seus pedidos de forma facil e rapida
            </p>
            <br>
            <form action="autenticacao.php" method="POST">
                <label for="nome">Nome:</label><br>
                <input id="nome" type="text" name="nome"> <br>
                <label for="senha">Senha:</label><br>
                <input id="senha" type="password" name="senha"> <br>
                <input type="submit">
                <br>
                <br>
                <a href="index.html" class="mn3">Voltar</a>
            </form>
        </div>
    </div>


</body>

</html>