<?php
// 1. Conecta ao banco de dados
include_once("Conexao.php");

// 2. Recebe os dados do formulário (os 'name' dos inputs)
$nome  = $_POST['nome']  ?? '';
$login = $_POST['login'] ?? '';
$senha = $_POST['Senha'] ?? ''; 


$sql = "INSERT INTO usuarios (
            USU_NOME, 
            USU_LOGIN, 
            USU_SENHA, 
            USU_STATUS
        ) VALUES (
            '$nome', 
            '$login', 
            '$senha', 
            'A'
        )";

// 4. Executa a ação
if (mysqli_query($conexao, $sql)) {
    mysqli_close($conexao);
    echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href = 'index.html'; 
          </script>";
} else {

    die("Erro ao cadastrar: " . mysqli_error($conexao));
}
?>