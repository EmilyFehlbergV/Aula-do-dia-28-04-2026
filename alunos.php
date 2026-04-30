<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aniversariantes</title>
    <link rel="stylesheet" href="geral.css">
    <style>
        .filtro-mes { margin: 20px 0; padding: 10px; background: #f4f4f4; border-radius: 5px; }
        select, button { padding: 8px; border-radius: 4px; border: 1px solid #ccc; }
        button { background-color: #007bff; color: white; cursor: pointer; border: none; }
        button:hover { background-color: #0056b3; }
    </style>
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

    <?php
    include_once("Conexao.php");

    // Pega o mês selecionado pelo usuário ou usa o mês atual como padrão
    $mes_selecionado = $_GET['mes_filtro'] ?? date('m');

    $meses = [
        "01" => "Janeiro", "02" => "Fevereiro", "03" => "Março", "04" => "Abril",
        "05" => "Maio", "06" => "Junho", "07" => "Julho", "08" => "Agosto",
        "09" => "Setembro", "10" => "Outubro", "11" => "Novembro", "12" => "Dezembro"
    ];
    ?>

    <h3>Aniversariantes de <?php echo $meses[$mes_selecionado]; ?></h3>

    <div class="filtro-mes">
        <form method="GET" action="alunos.php">
            <label>Selecionar Mês: </label>
            <select name="mes_filtro">
                <?php foreach ($meses as $num => $nome): ?>
                    <option value="<?php echo $num; ?>" <?php echo ($num == $mes_selecionado) ? 'selected' : ''; ?>>
                        <?php echo $nome; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Filtrar</button>
        </form>
    </div>
    
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
           
            $sql = "SELECT * FROM alunos 
                    WHERE MONTH(ALU_DTNASCIMENTO) = '$mes_selecionado' 
                    ORDER BY DAY(ALU_DTNASCIMENTO) ASC";

            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                while($linha = mysqli_fetch_assoc($resultado)) {
                    $data_formatada = date("d/m/Y", strtotime($linha['ALU_DTNASCIMENTO']));
                    echo "<tr>";
                    echo "<td>" . $linha['ALU_IDUNICO'] . "</td>"; 
                    echo "<td>" . $linha['ALU_NOME'] . "</td>";
                    echo "<td>" . $data_formatada . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum aniversariante encontrado para este mês.</td></tr>";
            }
            mysqli_close($conexao);
            ?>
        </tbody>
    </table>

    <br>
    <a href="addaluno.php" id="botasasd">Cadastrar novo Aniversariante</a>
</body>
</html>