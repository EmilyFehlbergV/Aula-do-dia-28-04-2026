<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aniversariantes</title>
    <link rel="stylesheet" href="geral.css">
</head>
<body>
    <nav class="menu-nav">
        <table class="menu-tabela">
            <tr>
                <td><a href="index.html">Início</a></td>
                <td><a href="alunos.php">Aniversários</a></td>
                <td><a href="alunos2.php">Lista Alunos</a></td>
                <td><a href="logof.html">Sair</a></td>
            </tr>
        </table>
    </nav>

    <div class="geral">
        <h3>Cadastrar Novo Aniversariante</h3>
        <form id="form-carteirinha" method="POST" action="GravarAni.php">
            <div class="dados">
                <label>Matrícula/Código:</label>
                <input type="text" name="Codigo" required>

                <label>Nome Completo:</label>
                <input type="text" name="nome" required>

                <label>Data de Nascimento:</label>
                <input type="date" name="data_nascimento" required>

                <label>E-mail:</label>
                <input type="email" name="email">

                <label>Telefone:</label>
                <input type="tel" name="telefone">
            </div>
            
            <div id="botoes">
                <a href="alunos.php" class="botao-voltar">Voltar</a>
                <button type="submit" class="botao-cadastar">Confirmar Cadastro</button>
            </div>
        </form>
    </div>
</body>
</html>