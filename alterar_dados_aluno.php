<?php

include "conecta_banco.php";

$usuario = $_POST['nome'];
$senha = $_POST['senha'];
$banco = "UPDATE cadastro_aluno SET senha = '$senha' WHERE nome = '$usuario'";
if (mysqli_query($conexao, $banco)) 
{
	echo "Senha alterada com sucesso!";
}
else
{
	echo "Falha na alteracao da senha";
}

?>