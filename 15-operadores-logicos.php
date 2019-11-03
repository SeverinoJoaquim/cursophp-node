<?php
// Operadres lógicos - Aula 25
// Permite fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
//ou exclusivo (xor)
// negação (!)

$idade = 30;
$nome = "Jaqueline";

if(($idade ==31) && ($nome == "Jaqueline")):
	echo "É verdadeiro";
else:
	echo "É falso";
endif;
