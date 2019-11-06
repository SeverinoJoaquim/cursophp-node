<?php
// Criptografia - Aula 42
$senha ="123456";

$novaSenha = base64_encode($senha);
//echo $novaSenha;
echo "Base64: ".$novaSenha."<br>";
echo "Sua senha é ".base64_decode($novaSenha);
/////////////////////////////////////////////
echo "<hr>";
echo "<br>";
echo "Sua senha em Md5 é: ". md5($senha);
echo "<hr>";
echo "<br>";
echo "Sua senha em Sha1 é: ". Sha1($senha);
//////////////////////////////////////////////
echo "<hr>";
echo "Senha segura <br>";
$senha2 = "123456";
$senha_db = '$2y$10$kMjQCfbyf.he.rpIa3K73udbMXBuq6LzkqYlyTi9gVrIyVxWoiduK';

$senhaSegura = password_hash($senha2, PASSWORD_DEFAULT);
echo $senhaSegura;
echo "<br><br>";
if(password_verify($senha2, $senha_db)):
	echo "Senha válida!";
else:
	echo "Lamento. Senha inválida!";
endif;