<?php
session_start();
include('verifica_login.php');
include('conexao.php');
$sql_consulta = mysqli_query($conexao, "SELECT * FROM login.usuario");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/bulma.min.css" />
	<link rel="stylesheet" href="estilos.css" />
	<title>Painel de Orçamento</title>
</head>
<body>
	<div class="container has-text-centered">
		<br></br>
		<h2 class="title has-text-grey">Olá, Vendedor! Você entrou com dados do cliente cujo id é <?php echo $_SESSION['usuario_id'];?>. Consulte-o (a) abaixo.</h2>
		<h2><a href="logout.php">Voltar ao início</a></h2>
		<h2 class="title has-text-grey">Histórico de orçamentos</h2>
	</div>
	<br></br>
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
					<th>Cadastrado(a) em</th>
				</tr>
			</thead>
			<?php
			if($sql_consulta === false) { 
				die(mysqli_error($conexao));
			}
			while($dado = mysqli_fetch_assoc($sql_consulta)){ ?>
				<tbody>
					<tr>
						<td><?php echo $dado['usuario_id'];?></td>
						<td><?php echo $dado['nome'];?></td>
						<td><?php echo $dado['usuario'];?></td>
						<td><?php echo $dado['vendedor'];?></td>
						<td><?php echo $dado['valor'];?></td>
						<td><?php echo $dado['descricao'];?></td>
						<td><?php echo $dado['data_cadastro'];?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</body>
	</html>
