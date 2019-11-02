<?php
/* Escopo de uma variável - Aula 10
Escopo é cont3xto no qual a variável foi definida */

// A aveiável foi definida em ESCOPO GLOBAL
$nome = "Severino Joaquim de Lima";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";
//////////////////////////////

function exibeCidade(){
	//ESCOPO LOCAL
	global $cidade;
	$cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////////////

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();