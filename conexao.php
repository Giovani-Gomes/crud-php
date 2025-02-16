<?php
define('HOST','localhost');
define('USUARIO','root');
define('SENHA','Ggp@@1312');
define('DB','myDB');


$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die('Não foi possivel conectar');
?>