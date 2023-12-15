<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página Inicial</h1>
    
    <?php
        $nome = $_POST["nome"];
        $senha = $_POST["senha"]; 

        if($nome == "adm" and $senha == "adm"){
            header("Location: "."inicialadm.html");
        }elseif($nome == "inter" and $senha == "inter"){
            header("Location: "."index.html");
        }elseif($nome == "usu" and $senha == "usu"){
            header("Location: "."index.html");
        }else{
            header("Location: "."trabnao.php");
        }
        
    ?>
    
</body>
</html>