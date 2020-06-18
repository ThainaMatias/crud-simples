<?php

include "conecta_banco.php";

//mysqli_query = "INSERT INTO cadastro_aluno 
//(codigo, nome, email, senha) VALUES
//('', '$_POST[nome]', '$_POST[email]','$_POST[senha]')" or die 
//("Nao inseriu");

//echo "Dados inseridos no banco com sucesso";
	//$nome = clear($_POST['codigo']);


$banco = "INSERT INTO cadastro_aluno (codigo, nome, email, senha) VALUES (' ', '$_POST[nome]', '$_POST[email]', '$_POST[senha]')";
	
  

if (mysqli_query($conexao, $banco)) {
 
    echo "Dados inseridos com sucesso!";
} else {
    echo "Error: " . $banco . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

?>
