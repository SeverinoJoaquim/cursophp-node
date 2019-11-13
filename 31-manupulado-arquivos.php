<?php
// Manupulação de arquivos - aula 54
/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize()
*/

$arquivo = 'arquivo.txt';
$conteudo = "Conteúdo de teste\r\n";

$arquivoAberto = fopen($arquivo, 'a');

fwrite($arquivoAberto, $conteudo); // Inserir conteúdo no arquivo txt

fclose($arquivoAberto);