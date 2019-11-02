<?php
/*Arquivos contendo apenas códigos php
não necessitam de tag de fechamento*/

//Tipos de dados - Aula 08
/*********** Escalares **************/

//string
$nome = "Olá, mundo!";

var_dump($nome);
if(is_string($nome)):
	echo "É uma string";
else:
	echo "Nãi é uma string";
endif;
echo "<hr>";

$nome2 = 1234;

var_dump($nome2);
if(is_string($nome2)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

$nome2 = "1234";

var_dump($nome2);
if(is_string($nome2)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

// int

$idade = 50;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

$idade = 50.5;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo "<hr>";

//float
$altura = 1.97;
var_dump($altura);
if(is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

$altura = "2";
var_dump($altura);
if(is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;
echo "<hr>";

// boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
	echo "É um booleano";
else:
	echo "Não é um booleano";
endif;
echo "<hr>";

$admin2 = true;
var_dump($admin2);
if(is_bool($admin2)):
	echo "É um booleano";
else:
	echo "Não é um booleano";
endif;
echo "<hr>";

$admin3 = 123456;
var_dump($admin3);
if(is_bool($admin3)):
	echo "É um booleano";
else:
	echo "Não é um booleano";
endif;
echo "<hr>";

/*********** Escalares **************/

$carros = array("Argo","Uno","Camaro","Kwid");
var_dump($carros);
if(is_array($carros)):
	echo "É um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

$diversos = array("Argo","Uno","Camaro","Kwid",15,1.97,true,false);
var_dump($diversos);
if(is_array($diversos)):
	echo "É um array";
else:
	echo "Não é um array";
endif;
echo "<hr>";

//object
/**
 * 
 */
class cliente
{
	public $nome;
	function atribuirNome($nome)
	{
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Joaquim");
var_dump($cliente);

if(is_object($cliente)):
	echo "É um objeto";
else:
	echo "Não é um objeto";
endif;
echo "<hr>";

//NULL
$cidade = NULL;
var_dump($cidade);
echo "<hr>";

// Resource
