<?php
include("conexao.php");
$nome = $_POST['nome'];
$busca_sql = "SELECT * FROM usuario WHERE nome = '$nome'";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pesquisar orçamento</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/bulma.min.css" />
	<link rel="stylesheet" href="estilos.css" />
</head>
<body>
	<div class="container has-text-centered">
		<br></br>
		<h3 class="title has-text-grey">OFICINA 2.0</h3>
		<div class="content">	
			<table class="table">
				<thead>
					<tr>
						<th>ID no banco de dados</th>
						<th>Nome do cliente</th>
						<th>Usuário</th>
						<th>Vendedor</th>
						<th>Valor orçado</th>
						<th>Descrição do orçamento</th>
						<th>Data de cadastro no sistema</th>
					</tr>
				</thead>
				<?php
				$query = mysqli_query($conexao, $busca_sql);
				while($dado = mysqli_fetch_assoc($query)){
					?>
					<h2 class="title is-3" style="color: green;">Cliente encontrado!</h2>
					<tbody>
						<tr>
							<td><?php echo $dado['usuario_id'];?></td>
							<td><?php echo $dado['nome'];?></td>
							<td><?php echo $dado['usuario'];?></td>
							<td><?php echo $dado['vendedor'];?></td>
							<td><?php echo $dado['valor'];?></td>
							<td><?php echo $dado['descricao'];?></td>
							<td><?php echo date("d/m/Y", strtotime($dado['data_cadastro']));?></td>
						</tr>
					<?php } 
					?>
				</table>
				<a href="pesquisar.php">Voltar à tela de pesquisa</a><br><br>
			</div>
		</table>
	</div>
</body>
</html>