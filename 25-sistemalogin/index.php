<?php
if(isset($_POST['btn-entrar'])):
	echo "Está funcionando";
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Login</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Login: <input type="text" name="login"><br>
		Senha: <input type="password" name="senha"><br>
		<button type="submit" name="btn-entrar">Logar</button>
	</form>

</body>
</html>