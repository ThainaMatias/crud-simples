<?php
// Conexão
include_once 'conecta_banco.php';
// header - css - bootstrap
include_once 'header.php';

?>
<div class="row">
	<div class="container">
		<h3 style="color:grey"> Alunos </h3>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Nome:</th>
					<th>Email:</th>
					
				</tr>
			</thead>
			<tbody>
				
				<?php
				$banco = "SELECT * FROM cadastro_aluno ORDER BY nome";
				$result = mysqli_query($conexao, $banco);
               
                if(mysqli_num_rows($result) > 0):

				while($row = mysqli_fetch_array($result)):
				?>
				<tr>
					<td><?php echo $row['nome']; ?></td>
					<td><?php echo $row['email']; ?></td>
					
				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="formulario_inserir_dados_aluno.html" class="btn btn-success">Inserir Dados</a>
		<a href="formulario_alterar_dados_aluno.html" class="btn btn-info">Alterar Dados</a>
	</div>
</div>






