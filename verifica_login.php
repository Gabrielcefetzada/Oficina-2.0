<?php
if(!$_SESSION['usuario_id']) {
	header('Location: index.php');
	session_start();
	exit();
}