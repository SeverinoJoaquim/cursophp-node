<?php
// Funções para números - Aula 30
/*
	number_format - formata o número
	round - arredondamento regulamentar para inteiro
	ceil - arredondamento para cima inteiro
	floor - arredondamento para baixo inteiro 
	rand - gera números aleatórios em um intervalo
*/
	$db = 1234.56;
	$preco = number_format($db, 2, ",", ".");
	echo "O valor do produto é R$ $preco";
	echo "<hr>";
	echo "<br>";

	////////////// round //////////////
	echo round(4.6);
	echo "<br>";
	echo round(4.4);
	echo "<br>";
	echo round(4.9);
	echo "<br>";
	echo round(4.49999);
	echo "<hr>";
	echo "<br>";

	////////////// ceil //////////////
	echo ceil(8.6);
	echo "<br>";
	echo ceil(8.4);
	echo "<br>";
	echo ceil(8.0019);
	echo "<br>";
	echo ceil(8.49999);
	echo "<hr>";
	echo "<br>";

	////////////// floor //////////////
	echo floor(7.6);
	echo "<br>";
	echo floor(7.9999999);
	echo "<br>";
	echo floor(7.0019);
	echo "<br>";
	echo floor(7.49999);
	echo "<hr>";
	echo "<br>";

	////////////// floor //////////////
	echo rand(1, 200);
	
