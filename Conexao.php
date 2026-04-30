<?php

$host="10.112.4.37";
$user="aluno";
$pass="aluno";
$db="sysniver";

$conexao= mysqli_connect($host, $user, $pass, $db);

if (!$conexao){
    die ("Falha na Conexão:". mysqli_connect_error());

}
mysqli_set_charset($conexao, "utf8");
?>