<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="geral.css">
</head>
<body>
    <nav class="menu-nav">
        <table class="menu-tabela">
            <tr>
                <td><a href="index.html">Início</a></td>
                <td><a href="alunos.php">Aniversários</a></td>
                <td><a href="alunos2.php">Alunos</a></td>
                <td><a href="login.php">Login</a></td>
            </tr>
        </table>
    </nav>

    <div class="geral">
        <h3>Cadastrar Novo Aluno</h3>

            <form id="form-carteirinha" method="POST" action="GravarCdastroBanco.php">
            <div class="dados">
                <label>Matrícula/Código:</label>
                <input type="text" name="Codigo" >

                <label>Nome Completo:</label>
                <input type="text" name="nome" required>

                <label>Curso:</label>
                <input type="text" name="Curso" required>

                <label>E-mail:</label>
                <input type="email" name="email">

                <label>Telefone:</label>
                <input type="tel" name="telefone">
            </div>
            
            <div id="botoes">
                <a href="alunos2.php" class="botao-voltar">Voltar</a>
                <button type="submit" class="botao-cadastar">Confirmar Cadastro</button>
            </div>
        </form>
    </div>
</body>
</html>