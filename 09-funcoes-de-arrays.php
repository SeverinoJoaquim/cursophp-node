<?php
// Funções de arrays - Aula 14

// is_array($array) ==> verifica se uma determinada variável é um array
$nomes = array("Joaquim", "Lorrayne", "Maria José", "Cecília", "Kamila");
echo is_array($nomes);
echo "<hr>";
var_dump($nomes);
echo "<hr>";
var_dump(is_array($nomes));
echo "<hr>";
echo "<br>";

if(is_array($nomes)):
	echo "É um array!";
else:
	echo "Lamento. Não é um array!";
endif;
echo "<hr>";
echo "<br>";
///////////////////////////////////
// in_array($valor, $array) - verifica se um determinado valor existe em alguma posição do array
$nomes = array("Joaquim", "Lorrayne", "Maria José", "Cecília", "Kamila");
echo in_array("Cecília", $nomes);
echo "<hr>";
echo "<br>";

if(in_array("Joca", $nomes)):
	echo "Exite no array!";
else:
	echo "Não existe no array";
endif;
echo "<hr>";
echo "<br>";

// array_keys($array) - retorna um novo array comas chaves do array passado como parâmetro
$parentes = array("Pai"=>"Joaquim", "Filha"=>"Lorrayne", "Mãe"=>"Maria José", "Avó"=>"Cecília", "Amiga"=>"Kamila");
$keys = array_keys($parentes);
print_r($keys);
echo "<hr>";
echo "<br>";

// Funções de arrays - Aula 16
// array_values($array) - retorna um novo array com os valores do array passado como parâmetro
$parentes = array("Pai"=>"Joaquim", "Filha"=>"Lorrayne", "Mãe"=>"Maria José", "Avó"=>"Cecília", "Amiga"=>"Kamila");
$values = array_values($parentes);
print_r($values);
echo "<hr>";
echo "<br>";

//array_marge($array1, $array2) - agraga o conteúdo de dois arrays
$carros = array("Camaro", "Uno", "Gol", "Jeep");
$motos = array("pop100", "cb1000", "kawasak", "dimp");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";
echo "<br>";

// array_pop - exclui a última posição do array
print_r($carros);
echo "<br>";
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo "<hr>";
echo "<br>";

//array_shift - exclui a primeira posição do array

print_r($carros);
echo "<br>";
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo "<hr>";
echo "<br>";