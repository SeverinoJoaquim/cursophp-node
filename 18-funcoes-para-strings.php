<?php
//Funções para strings - Aula 28
/*
** stroupper - converte a string para maiúsculas
** strtolower - conver a string para minúsculas
** substr
** str_pad
** str_repeat
** strlen
** srt_replace
** strpos
*/
////////// stroupper //////////////
$nome = "severino joaquim de lima";
$novoNome = strtoupper($nome);

echo $nome;
echo "<br>";
echo $novoNome;
echo "<hr>";
echo "<br>";

 ////// strtolower ////////
$nome2 = "MARIA JOSE ALMEIDA DE LIMA";
$novoNome2 = strtolower($nome2);

echo $nome2;
echo "<br>";
echo $novoNome2;
echo "<hr>";
echo "<br>";

////////substr /////////
$mensagem = "Olá, mundo!";
echo substr($mensagem, 5, 4);
echo "<hr>";
echo "<br>";

///////////// str_pad //////////////////
$objeto1 = "Estudos";
$novoObjeto1 = str_pad($objeto1, 12, "%", STR_PAD_LEFT);
echo $objeto1;
echo "<br>";
echo "<br>";
echo $novoObjeto1;
echo "<hr>";
echo "<br>";

$objeto2 = "Casa";
$novoObjeto2 = str_pad($objeto2, 12, "*", STR_PAD_RIGHT);
echo $objeto2;
echo "<br>";
echo "<br>";
echo $novoObjeto2;
echo "<hr>";
echo "<br>";

$objeto3 = "Farmácia";
$novoObjeto3 = str_pad($objeto3, 21, "*", STR_PAD_BOTH);
echo $objeto3;
echo "<br>";
echo "<br>";
echo $novoObjeto3;
echo "<hr>";
echo "<br>";

///////// Aula 29 /////////////////
$string = str_repeat("Sucesso! ", 10);
echo $string;
echo "<hr>";
echo "<br>";

///////////// strlen ///////////////
$mensagem = "Bom dia!";
echo strlen($mensagem);
echo "<hr>";
echo "<br>";

///////// srt_replace /////////////////
$texto = "A seleção Nigeriana será campeã da África em 2021";
$novoTexto = str_replace("Nigeriana", "Sulafricana", $texto);

echo $texto;
echo "<br>";
echo "<br>";
echo $novoTexto;
echo "<hr>";
echo "<br>";

///////////// strpos ///////////////////////
echo strpos($texto, "campeã");