<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/styl.css">
    <link rel="stylesheet" href="./src/css/stycesta.css">
    <title>Document</title>
</head>

<body>

    <header>

        <div class="menu">
            <div class="logcad">
                <a href="./inicialadm.php" class="mn"><img src="./src/img/icons8-pessoa-90 (1).png"
                        class="usu">adm</a>
            </div>
            <div class="posi">
                <div class="divBusca">
                    <input type="text" class="txtBusca" placeholder="Buscar..." />
                    <img src="./src/img/icons8-lupa-50.png" class="btnBusca" alt="Buscar" />
                </div>
            </div>
            <a href="./cesta.php" class="mn"><img src="./src/img/icons8-cesta-50 (1).png" class="cesta"><a>
        </div>

        <div class="menu2">
            <a href="./Faturamento.php" class="mn2">Faturamento</a>
            <a href="./Lojas.php" class="mn2">Fornecedores</a>
            <a href="./estoque.php"  class="mn2">Estoque</a>
            <a href="./Cadastro de produtos.php" class="mn2">Cadastro de produtos</a>

        </div>
    </header>

    <section>

        <div class="cesta2">
            <div class="coisas">
                <p class="it1"> Loja</p>
                <p class="it2">Livros vendidos</p>
                <p class="it3">Faturamento</p>
            </div>

            <div class="menulat">
                <p class="itenscomp">
Faturamento total
                </p>

                <p class="totalpre">
                    R$159.010,00
                </p>
                <br>
                <hr>
                <br>
            </div>
            <div class="itens">
                
                <p class="descri">
                    Loja do centro
                </p>
                <p class="qtd">
                    1000
                </p>
                <p class="preco">
                    R$34.900,00
                </p>
            </div>
            <div class="itens">
                
                <p class="descri">
                   Loja online
                </p>
                <p class="qtd">
                    3546
                </p>
                <p class="preco">
                    R$124.110,00
                </p>
            </div>
            
        </div>

    </section>

</body>

</html>