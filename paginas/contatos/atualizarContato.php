<header>
    <h3>Atualizar Contato</h3>
</header>

<?php 

$idContato = mysqli_real_escape_string($conexao,$_POST["idContato"]);
$nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
$enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);
$sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]);
$dataNascimentoContato = mysqli_real_escape_string($conexao,$_POST["dataNascimentoContato"]);

$sql = "UPDATE tb_contatos SET 
nomeContato = '{$nomeContato}',
emailContato = '{$emailContato}',
emailContato = '{$emailContato}',
telefoneContato = '{$telefoneContato}',
enderecoContato = '{$enderecoContato}',
sexoContato = '{$sexoContato}',
dataNascimentoContato = '{$dataNascimentoContato}'
WHERE idContato = '{$idContato}'
";



$rs = mysqli_query($conexao,$sql) or die("Erro ao execultar a Consulta".mysqli_error($conexao));
echo ("O registro foi Atualizado com sucesso! $rs");
?>