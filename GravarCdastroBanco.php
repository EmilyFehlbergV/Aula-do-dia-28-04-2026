<?php
include_once("Conexao.php");


$nome       = $_POST['nome']     ?? '';
$email      = $_POST['email']    ?? '';
$telefone   = $_POST['telefone'] ?? '';

$info_extra = $_POST['Curso'] ?? $_POST['data_nascimento'] ?? ''; 


$sql = "INSERT INTO alunos ( 
            ALU_NOME, 
            ALU_EMAIL, 
            ALU_TEL,
            ALU_STATUS
        ) VALUES (
            '$nome', 
            '$email', 
            '$telefone', 
            'A'
        )";

if (mysqli_query($conexao, $sql)) {
    mysqli_close($conexao);
    header("Location: index.html"); 
    exit(); 
} else {    
    die("Erro detalhado: " . mysqli_error($conexao));
}
?>