<?php
// Variáveis superglobais - Aula 32
/*	Estas variáveis podem ser acessadas independente do escopo
	
	$GLOBALS
	$_SERVER
	$_REQUEST
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
*/
////////////////////////////////////////
$x = 10;
$y = 30;

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";
echo "<br>";

/////////////////////////////////////////////
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";