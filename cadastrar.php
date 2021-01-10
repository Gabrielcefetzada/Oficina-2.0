<?php
session_start();
include("conexao.php");

// pegando os values dos campos de cadastro

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));  
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$vendedor = mysqli_real_escape_string($conexao, trim(($_POST['vendedor'])));
$valor = mysqli_real_escape_string($conexao, trim(($_POST['valorOrcado'])));
$descricao = mysqli_real_escape_string($conexao, trim(($_POST['descricao'])));

// consulta ao banco de dados para ver se o usuário existe
$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
// se retornar 1, significa que o usuário já existe
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

// inserindo no banco de dados os values dos campos de cadastro
$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro, vendedor, valor, descricao) VALUES ('$nome', '$usuario', '$senha', NOW(), '$vendedor', '$valor', '$descricao')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>