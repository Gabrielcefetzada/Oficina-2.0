<?php
if(!$_SESSION['nome']) {
	header('Location: index.php');
	session_start();
	exit();
}