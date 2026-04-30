<?php
// 1. Inicia a sessão para manter o usuário logado
session_start();

// 2. Inclui a conexão com o banco
include_once("Conexao.php");

// 3. Recebe os dados do formulário de login
$usuario = $_POST['nome'] ?? '';
$senha   = $_POST['Senha'] ?? '';




$sql = "SELECT * FROM usuarios WHERE USU_NOME = '$usuario' AND USU_SENHA = '$senha'";

$resultado = mysqli_query($conexao, $sql);

// 5. Verifica se encontrou algum registro
if (mysqli_num_rows($resultado) > 0) {
    // Login com sucesso
    $_SESSION['usuario_logado'] = $usuario;
    header("Location: principal.php");
    exit();
} else {

    echo "<script>
            alert('Usuário ou Senha incorretos!');
            window.location.href = 'index.html';
          </script>";
}

mysqli_close($conexao);
?>-$_COOKIE