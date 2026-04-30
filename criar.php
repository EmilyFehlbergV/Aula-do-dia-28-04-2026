<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuario</title>
    <link rel="stylesheet" href="geral.css">
</head>
<body>
    <nav class="menu-nav">
        <table class="menu-tabela">
            <tr>
      
                <td><a href="index.html">Voltar</a></td>
            </tr>
        </table>
    </nav>

    <div class="geral">
        <h3>Cadastrar Novo usuario</h3>
        <form id="form-carteirinha" method="POST" action="garvarlogin.php">
            <div class="dados">


                <label>Nome Completo:</label>
                <input type="text" name="nome" required>

             <label>Login:</label>
                <input type="text" name="login" maxlength="20" required>



                <label>Senha:</label>
                <input type="password" name="Senha" required>
            </div>
            
            <div id="botoes">
                <a href="index.html" class="botao-voltar">Voltar</a>
                <button type="submit" class="botao-cadastar" href="index.html">Confirmar Cadastro</button>
            </div>
        </form>
    </div>
</body>
</html>