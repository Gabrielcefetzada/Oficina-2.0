<?php
include('conexao.php');

$usuario_id = $_POST['usuario_id'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$vendedor = $_POST['vendedor'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];

$salvar = "DELETE FROM usuario WHERE usuario_id = '$usuario_id'";

$query = mysqli_query($conexao, $salvar);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Excluír orçamentos</title>
	<link rel="stylesheet" href="css/bulma.min.css" />
</head>
<body>
	<?php
	if(!$query){
		echo "Algo deu errado. Tente novamente." . mysqli_error();
	} else {
		?>
		<div class="container has-text-centered">
			<br></br>
			<h2 class="title is-3" style="color: green;">Dados de <?php echo $_POST['nome'];?> excluídos com sucesso!</h2>
			<h2><a href="painel.php">Voltar ao painel de orçamentos</a></h2>
		</div>
		<?php
	}

	?>
</body>
</html>
