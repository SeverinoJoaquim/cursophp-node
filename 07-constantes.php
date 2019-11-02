<?php
//Constantes - Aula 11
define("NOME", "José Carlos");
define("IDADE", 54);
define("ALTURA", 1.98);
define("CASADO", true);

define("TIMES", ['Flamengo', 'Vasco', 'Santos', 'Náutico']);
echo NOME;
var_dump(NOME);
echo "<hr>";

echo IDADE;
var_dump(IDADE);
echo "<hr>";

echo ALTURA;
var_dump(ALTURA);
echo "<hr>";

echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' anos e minha altura é '.ALTURA.'.';
echo "<hr>";

echo TIMES[0];
echo TIMES[2];
echo TIMES[3];
echo "<hr>";

var_dump(TIMES);
echo "<hr>";

function exibeNome(){
	echo NOME;
}

exibeNome();