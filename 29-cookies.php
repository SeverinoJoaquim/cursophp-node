<?php
// Cookies - aula 52
setcookie('user', 'Severino Joaquim', time()+3600);
setcookie('email', 'severinojoaquim@hotmail.com', time()-3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);
echo $_COOKIE['ultima_pesquisa'];
