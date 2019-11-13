<?php
// Trabalhando com datas - aula 53
echo date('d');
echo "<br>";
echo "<hr>";
echo date('D');
echo "<br>";
echo "<hr>";
echo date('m');
echo "<br>";
echo "<hr>";
echo date('M');
echo "<br>";
echo "<hr>";
echo date('y');
echo "<br>";
echo "<hr>";
echo date('Y');
echo "<br>";
echo "<hr>";
echo date('d/m/Y');
echo "<br>";
echo "<hr>";
echo date('l');
echo "<br>";
echo "<hr>";
echo date('d/m/Y h');
echo "<br>";
echo "<hr>";
echo date('d/m/Y H');
echo "<br>";
echo "<hr>";
echo date('d/m/Y H:i:s');
echo "<br>";
echo "<hr>";
// Data do sistema
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');
echo "<br>";
echo "<hr>";
// Armezar data no banco de dados
$date = date('Y-m-d');	//DATE
echo $date;
echo "<br>";
echo "<hr>";
$datetime = date('Y-m-d H:i:s');	// DATATIME
echo $datetime;
echo "<br>";
echo "<hr>";
// TIME - Apresenta a quantidade de segundos a partir de 1970
echo time();
echo "<br>";
echo "<hr>";
// Configurando
$time2 = time();
echo date('d/m/Y', $time2);
echo "<br>";
echo "<hr>";
// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/y - h:i', $data_pagamento);
echo "<br>";
echo "<hr>";
$data3 = '2019-04-10 13:30:00';

$data3 = strtotime($data3);

echo date('d/m/Y', $data3);