<?php
// Estrutur de repetição - Aula 27
// For & Foreach - usado quando o número de repetição ´w conhecido.
for ($contador = 0; $contador <= 15; $contador++):
	echo "O contador é $contador <br>";
endfor;
echo "<hr>";
echo "<br>";

for ($cont = 0; $cont <= 15; $cont++):
	echo "8 x $cont = ".($cont*8)."<br>";
endfor;
echo "<hr>";
echo "<br>";
//////////////////////////
// Foreach - é usado para percorrer arrays
$cores = array("Verde", "Amarela", "Azul", "Branca", "Vermelha", "Cinza");

foreach ($cores as $valor):
	echo $valor."<br>";
endforeach;
echo "<hr>";
echo "<br>";

$cores = array("Verde", "Amarela", "Azul", "Branca", "Vermelha", "Cinza");

foreach ($cores as $indice => $valor):
	echo $indice." - ".$valor."<br>";
endforeach;