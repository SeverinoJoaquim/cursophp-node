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