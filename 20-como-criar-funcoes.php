<?php
// Criando funções - Aula 31
function exibirNome() {
	echo "Meu nome é Joaquim";
}

exibirnome();
echo "<hr>";
echo "<br>";

function exibirNome2($nome) {
	echo "Meu nome é $nome";
}

exibirnome2("Lorrayne Félix de Lima");
echo "<hr>";
echo "<br>";
////////////////////////////////

function calcularMedia($nome2, $n1, $n2, $n3, $n4) {
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	if($media >= 7):
		echo "Aprovado(a) com a média $media <br>";
	else:
		echo "$nome2 foi repravado(a), ficando com a média $media <br>";
	endif;
}

calcularMedia("Joaquim",5,7,9,10);
calcularMedia("Bob",2,7,4,7);
calcularMedia("Tom",1,10,6,10);
echo "<hr>";
echo "<br>";
////////////////////////////////
