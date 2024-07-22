<header>
    <h3>Inserir Contato</h3>
</header>

<?php
$nomeContato = strip_tags(mysqli_real_escape_string($conexao, $_POST["nomeContato"]));
$emailContato = strip_tags(mysqli_real_escape_string($conexao, $_POST["emailContato"]));
$telefoneContato = strip_tags(mysqli_real_escape_string($conexao, $_POST["telefoneContato"]));
$enderecoContato = strip_tags(mysqli_real_escape_string($conexao, $_POST["enderecoContato"]));
$sexoContato = strip_tags(mysqli_real_escape_string($conexao, $_POST["sexoContato"]));
$dataNascimentoContato = strip_tags(mysqli_real_escape_string($conexao, $_POST["dataNascimentoContato"]));

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

$rs = mysqli_query($conexao, $sql) or die("Erro ao execultar a Consulta" . mysqli_error($conexao));

?>

<?php
if ($rs) {
?>

    <div class="row">
        <div class="alert alert-success col-6" role="alert">
            <h4 class="alert-heading">Sucesso ao Cadastrar Contato!</h4>

            <button type="button" class="btn btn-success"><a href="index.php?menuop=contatos" class="link-light link-offset-0 link-underline-opacity-20 link-underline-opacity-100-hover">Voltar</a> </button>
            <hr>
            <p class="mb-0">Qualquer dúvida entrar em contato com o fornecedor do software (55) 0000-0000 </p>
        </div>
    </div>


<?php
} else {
?>
    <div class="row">
        <div class="alert alert-danger col-6" role="alert">
            <h4 class="alert-heading">Erro ao cadastrar Contato!</h4>

            <button type="button" class="btn btn-success"><a href="index.php?menuop=contatos" class="link-light link-offset-0 link-underline-opacity-20 link-underline-opacity-100-hover">Voltar</a> </button>
            <hr>
            <p class="mb-0">Qualquer dúvida entrar em contato com o fornecedor do software (55) 0000-0000 </p>
        </div>
    </div>

<?php
}
?>