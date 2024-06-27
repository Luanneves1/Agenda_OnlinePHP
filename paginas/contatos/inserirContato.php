<header>
    <h3>Inserir Contato</h3>
</header>

<?php 
$nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
$enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]);
$sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]);
$dataNascimentoContato = mysqli_real_escape_string($conexao,$_POST["dataNascimentoContato"]);

$sql = "INSERT INTO tb_contatos (
nomeContato,
emailContato,
telefoneContato,
enderecoContato,
sexoContato,
dataNascimentoContato)
VALUES(
'{$nomeContato}',
'{$emailContato}',
'{$telefoneContato}',
'{$enderecoContato}',
'{$sexoContato}',
'{$dataNascimentoContato}')";

$rs = mysqli_query($conexao,$sql) or die("Erro ao execultar a Consulta".mysqli_error($conexao));
echo ("Sucesso ao Cadastrar! $rs");
?>