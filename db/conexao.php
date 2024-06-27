<?php 
include ("config.php");

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) or die ("Não foi Possivel conectar ao banco de ServidorDB!" . mysqli_error($conexao)); 

?>