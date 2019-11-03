<?php
/* - Aula 19

** Condicionais
* if
* else
* elseif
*/
$numero = 11;

if($numero == 10):
	echo "É igual a dez";
elseif($numero <= 9):
	echo "É menor ou igual a nove";
else:
	echo "É diferente a dez";
endif;
echo "<br>";
echo "<hr>";
$media = 6;
echo ($media >= 7) ? "Aprovado!" : "Lamento. Reprovado!";
