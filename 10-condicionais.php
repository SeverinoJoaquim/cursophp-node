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
echo "<br>";
echo "<hr>";
///////////////////////////////////////
/* condicionais - Aula 20
** switch
** case
*/

$cor = "azul";
switch ($cor):
	case "vermelha":
	echo "sua cor preferida é vermelha";
	break;

	case "verde":
	echo "sua cor preferida é verde";
	break;

	case "azul":
	echo "sua cor preferida é azul";
	break;

	default:
	echo "Sua cor preferida não é vermelha, verde ou azul.";

endswitch;