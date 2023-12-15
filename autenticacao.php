
<?php 
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if($nome === "Admin" and $senha === "admin")
     header("Location: "."Siteadmin.php");
    else if($nome === "Caio" and $senha === "caio")
    header("Location: "."index.html");
    else 
    print("Nome/Senha inválidos");
    ?>
