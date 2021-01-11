<?php
include('conexao.php');
$identificador = $_GET['usuario_id'];
$busca_sql = "SELECT * FROM usuario WHERE usuario_id = '$identificador'";
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
	<title>Editar orçamentos</title>
</head>
<body>
	<div class="container has-text-centered">
		<br></br>
	<h3 class="title has-text-grey">OFICINA 2.0</h3>
	<h3 class="title has-text-grey">Edição de dados</h3>
	<h2><a href="painel.php">Voltar ao painel de orçamentos</a></h2>
<div class="content">	
		<table class="table">
			<thead>
				<tr>
					<td>ID no banco de dados</td>
					<td>Nome do cliente</td>
					<td>Usuário</td>
					<td>Vendedor</td>
					<td>Valor orçado</td>
					<td>Descrição do orçamento</td>
					<td>Ação</td>
				</tr>
			</thead>
	<?php
	$query = mysqli_query($conexao, $busca_sql);
	while($dado = mysqli_fetch_assoc($query)){

		$usuario_id = $dado['usuario_id'];
		$nome = $dado['nome'];
		$usuario = $dado['usuario'];
		$vendedor = $dado['vendedor'];
		$valor = $dado['valor'];
		$descricao = $dado['descricao'];

		echo ("<br></br>
			<form action = 'salvar.php' method = 'POST'>
			<tr>
			<td>
			<input class='input is-medium' type='text' value='" . $usuario_id . "' disabled>
			<input type='hidden' name='usuario_id' value='". $usuario_id ."'>
			</td>
			<td>
			<input class='input is-medium' type='text' name='nome' value='" . $nome . "'>
			</td>
			<td>
			<input class='input is-medium' type='text' name='usuario' value='" . $usuario . "'>
			</td>
			<td>
			<input class='input is-medium' type='text' name='vendedor' value='" . $vendedor . "'>
			</td>
			<td>
			<input class='input is-medium' type='text' name='valor' value='" . $valor . "'>
			</td>
			<td>
			<input class='input is-medium' type='textarea' name='descricao' value='" . $descricao . "'>
			</td>
			<td>
			<input class='button is-link input is-medium' type='submit' value='Salvar Mudanças'>
			</td>
			</tr>
			</form>
			");
	}
	?>
	</table>
</div>
</body>
</html>