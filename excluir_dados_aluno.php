<?php

include "conecta_banco.php";


$nome = $_POST['nome'];

$banco = "DELETE FROM cadastro_aluno WHERE nome = '$nome'";

if(mysqli_query($conexao, $banco))
{
	echo "Registro excluido com sucesso";
}
else
{
	echo "Falha na exclusao!";
}

?>