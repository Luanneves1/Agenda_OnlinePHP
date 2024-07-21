<?php
include("../../db/conexao.php");
$idContato = $_GET["idContato"];
$flagFavoritoContato = $_GET["flagFavoritoContato"];

$sql = "UPDATE tb_contatos SET flagFavoritoContato = {$flagFavoritoContato} WHERE idContato = {$idContato}";

mysqli_query($conexao,$sql);
