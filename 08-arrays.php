<?php
// Arrays - Aulas 12/13
//Criar uma lista de carros
$carro1 = "Argo";
$carro2 = "Punto";
$carro3 = "Corsa";
$carro4 = "Kwid";
$carro5 = "Hilux";

echo $carro1;
echo "<br>";
echo $carro2;
echo "<br>";
echo $carro3;
echo "<br>";
echo $carro4;
echo "<br>";
echo $carro5;
echo "<hr>";

//Forma correta de representar conjunto de dados
$carros = array("Argo", "Fusca", "Corsa", "BMW", "Veloster");
print_r($carros);
echo "<hr>";
echo $carros[0];
echo "<br>";
echo $carros[1];
echo "<br>";
echo $carros[2];
echo "<br>";
echo $carros[3];
echo "<br>";
echo $carros[4];
echo "<hr>";

$carros = array(1=>"Argo", 2=>"Fusca", 3=>"Corsa", 4=>"BMW", 5=>"Veloster");
print_r($carros);
echo "<hr>";

$carros = array(1=>"Argo", 2=>"Fusca", 3=>"Corsa", 4=>"BMW", 5=>"Veloster");
$carros[] = "HB-20";
print_r($carros);
echo "<hr>";

$carros = array(1=>"Argo", 2=>"Fusca", 3=>"Corsa", 4=>"BMW", 5=>"Veloster");
$carros[] = "kombi";
$carros[50] = "Corola";
print_r($carros);
echo "<hr>";

$motos = array();
$motos[]= "Yamaha";
$motos[]= "Yamaha1";
$motos[]= "Yamaha2";
$motos[]= "Yamaha3";
print_r($motos);
/////////////////////////
echo "<br>";
// Count - Exibir a quantidade de elementos em um array
echo count($carros);
echo "<br>";
echo "<hr>";
echo count($motos);
echo "<br>";
echo "<hr>";
$totalCarros = count($carros);
echo $totalCarros;
echo "<br>";
echo "<hr>";

// Foreach - 'Para cada' - Aula 13
foreach($carros as $valor) {
	echo $valor."<br>";
}
echo "<br>";
echo "<hr>";

foreach($motos as $valor) {
	echo $valor."<br>";
}
echo "<br>";
echo "<hr>";
echo "<br>";
/// Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade"=> 54, "altura"=> 1.75,);
echo $pessoa["altura"];
echo "<br>";
echo "<hr>";
echo "<br>";
$pessoa = array("nome"=> "Rodrigo", "idade"=> 54, "altura"=> 1.65,);
$pessoa["cidade"] = "Augustinópolis";
print_r($pessoa);
echo "<br>";
echo "<hr>";
echo "<br>";
foreach($pessoa as $indice => $valor){
	echo $indice.": ".$valor."<br>";
}
echo "<br>";
echo "<hr>";
echo "<br>";
//Arrays multidimensionais - arrays que contêm um ou mais arrays
$times = array("Cariocas"=> array("Flamengo", "Fluminense", "Vasco", "Bangu", "Botafogo"),
	"Paulistas"=> array("Santos", "São Paulo", "Palmeiras", "Corinthians", "Botafogo"),
	"Pernambucanos"=>array("Náutico", "Santa Cruz", "Esporte", "Timbaúba", "Íbis"));
echo $times["Cariocas"][1];
echo "<br>";
echo $times["Pernambucanos"][0];
echo "<hr>";
foreach($times["Cariocas"] as $indice => $valor) {
	echo $indice.": ".$valor."<br>";
}