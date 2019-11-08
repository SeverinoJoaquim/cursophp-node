<?php
// Iniciar Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):

	$id = mysqli_escape_string($connect, $_POST['id']);
	
	$sql = "DELETE FROM clientes WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastro excluído com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Perdão. O Cadastro não foi excluído!";
		header('Location: ../index.php');
	endif;
endif;