<head>
<h3>Excluir Contato</h3>

</head>

<?php 
$idContato = mysqli_real_escape_string($conexao,$_GET["idContato"]);

$sql = "DELETE FROM tb_contatos where idContato='{$idContato}'";

mysqli_query($conexao,$sql) or die("Erro ao Excluir Contato.".mysqli_error($conexao));

echo"Registro excluido com sucesso.";

?>