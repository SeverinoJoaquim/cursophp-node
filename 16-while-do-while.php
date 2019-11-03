<?php
// Estrutura de repetição - Aula 25
// While & Do While

$contador = 1;

while($contador <= 10):
	echo "Contador é $contador <br>";
	$contador++;
endwhile;
echo "<hr>";
echo "<br>";

$contador = 1;
do {
	echo "Contador é $contador <br>";
	$contador++;
} while ($contador <= 50);
