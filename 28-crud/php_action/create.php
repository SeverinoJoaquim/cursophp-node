<?php
// Iniciar Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global Econnect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($connect, $_POST['nome']);
	$sobrenome = clear($connect, $_POST['sobrenome']);
	$email = clear($connect, $_POST['email']);
	$idade = clear($connect, $_POST['idade']);
	
	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Perdão. O Cadastro não foi concluído!";
		header('Location: ../index.php');
	endif;
endif;