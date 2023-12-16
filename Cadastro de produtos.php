<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/styl.css">
    <title>Document</title>
</head>

<body>

    <header>

        <div class="menu">
            <div class="logcad">
                <a href="./inicialadm.php" class="mn"><img src="./src/img/icons8-pessoa-90 (1).png"
                        class="usu">adm</a>
            </div>
            
        </div>
        <div class="menu2">
            <a href="./Faturamento.php" class="mn2">Faturamento</a>
            <a href="./Lojas.php" class="mn2">Fornecedores</a>
            <a href="./estoque.php"  class="mn2">Estoque</a>
            <a href="./Cadastro de produtos.php" class="mn2">Cadastro de produtos</a>
        </div>
    </header>
    <br>
    <section>
        <div class="posica">
            <div class="livro">
            <h2>Cadastro de Livros</h2>
            <label for="titulo_livro">Título do Livro:</label>
            <input type="text" id="titulo_livro" name="titulo_livro" required><br>

            <label for="autor_livro">Autor do Livro:</label>
            <input type="text" id="autor_livro" name="autor_livro" required><br>

            <label for="tema_livro">Tema do Livro:</label>
            <select id="tema_livro" name="tema_livro">
                <option value="fantasia">Fantasia</option>
                <option value="ficcao">Ficção Científica</option>
                <option value="romance">Romance</option>
                <option value="rpg">RPG</option>
                <option value="outro">Outro</option>
            </select><br>

            <label for="descricao_livro">Descrição do Livro:</label><br>
            <textarea id="descricao_livro" name="descricao_livro" rows="4" cols="50"></textarea><br>

            <label for="preco_livro">Preço do Livro:</label>
            <input type="number" id="preco_livro" name="preco_livro" step="0.01" required><br>

            <label>Gênero do Livro:</label><br>
            <input type="radio" id="genero_ficcao" name="genero" value="ficcao">
            <label for="genero_ficcao">Ficção</label><br>
            <input type="radio" id="genero_nao_ficcao" name="genero" value="nao_ficcao">
            <label for="genero_nao_ficcao">Não Ficção</label><br>

            <input type="submit" value="Cadastrar Livro">
        </div>
        </div>
        
    </section>

</body>

</html>