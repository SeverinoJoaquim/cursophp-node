<?php
// Sessões - Aula 39
/* Nas sessões são quardadas i nformações 
que podem ser usadas em várias páginas*/
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";
echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();