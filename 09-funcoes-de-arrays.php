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
/////////////////////////
// funções de Arrays - Aula 17
// array_unshift($array, "valor") - adiciona um ou mais elementos no início do array

$frutas = array("uva", "laranja", "maçã", "pera");
print_r($frutas);

array_unshift($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo "<hr>";
echo "<br>";

// arrya_push($array, "valor1", "valor2", ...) - adiciona um ou mais elementos no final do array
$legumes = array("chuchu", "cenoura", "abobrinha", "jerimum");
print_r($legumes);

array_push($legumes, "berinjela", "repolho", "rabanete");
echo "<br>";
print_r($legumes);
echo "<hr>";
echo "<br>";

/////////////////////////////
// array_combine($keys, $values) - serve para mesclar dois arrays
$keys = array("campeão", "vice", "terceiro");
$values = array("Náutico", "Íbis", "Santa Cruz");

$times = array_combine($keys, $values);
echo "<br>";
echo "<br>";
print_r($keys);
echo "<br>";
echo "<br>";
print_r($values);
echo "<br>";
echo "<br>";
print_r($times);
echo "<hr>";
echo "<br>";

/// array_sum() - calcula a soma dos elementos de um array

$soma = array(2,4,6,8,10,20.5);
echo array_sum($soma);
echo "<hr>";
echo "<br>";
$soma2 = array(12,2.45,3,10,100,3.3);
$total = array_sum($soma2);
echo "<br>";
echo $total;
echo "<hr>";
echo "<br>";

/// Aula 18

// explode("/", "21/01/2001") - transforma string em array
$data = "02/11/2019";
$novaData = explode('/', $data);
print_r($novaData);
echo "<hr>";
echo "<br>";
///////////////////
$frase = "Meu nome não é Tom";
$array = explode(" ", $frase);
print_r($array);
echo "<hr>";
echo "<br>";
/////////////////////

// implode("-", $array) - transfporma array em string
$nomes = array("Mário", "Patrícia", "Helen", "Monteiro", "Everaldo");

$string = implode(", ", $nomes);

echo $string;