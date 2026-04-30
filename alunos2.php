<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aniversariantes</title>
    <link rel="stylesheet" href="geral.css">
</head>
<body>
    <nav class="menu-nav">
        <table class="menu-tabela">
            <tr>
                <td><a href="index.html">Início</a></td>
                <td><a href="alunos.php">Aniversários</a></td>
                <td><a href="alunos2.php">Alunos</a></td>
                <td><a href="logof.html">Sair</a></td>
            </tr>
        </table>
    </nav>

    <h3>Lista de Alunos</h3>
    
    <table id="tabelaAlunos">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include_once("Conexao.php");

   
            $sql = "SELECT * FROM alunos ORDER BY ALU_NOME ASC";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                while($linha = mysqli_fetch_assoc($resultado)) {
              
                    $data_formatada = date("d/m/Y", strtotime($linha['ALU_DTNASCIMENTO']));
                    
                    echo "<tr>";
                    echo "<td>" . $linha['ALU_IDUNICO'] . "</td>"; 
                    echo "<td>" . $linha['ALU_NOME'] . "</td>";
                     echo "<td>" . $linha['ALU_TEL'] . "</td>";
               
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum aluno encontrado.</td></tr>";
            }

            mysqli_close($conexao);
            ?>
        </tbody>
    </table>

    <a href="addaluno.php" id="botasasd">Cadastrar novo Aluno</a>
</body>
</html>