<?php
include("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa de orçamentos</title>
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
		<h2 class="title has-text-grey">Olá, Vendedor!<br><br>Digite o nome do cliente do orçamento e veja os detalhes sobre tal abaixo<br><br></h2>
		<form action="botaoPesquisar.php" method="POST">
		<div style="display: flex; flex-wrap: nowrap;">
			<input class="input" type="text" placeholder="digite aqui..." name="nome">
			<button class="button is-info" type="submit">Buscar</button>
		</div>	
		<h2><a href="painel.php"><br>Voltar ao painel de orçamentos</a></h2>
	
	</div>
</form>
</body>
</html>