<header>
    <h3>Atualizar Evento</h3>
</header>

<?php
$idEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['idEvento']));
$tituloEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['tituloEvento']));
$descricaoEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['descricaoEvento']));
$dataInicioEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['dataInicioEvento']));
$horaInicioEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['horaInicioEvento']));
$dataFimEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['dataFimEvento']));
$horaFimEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['horaFimEvento']));
$statusEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST['statusEvento']));

$sql = "UPDATE tbeventos SET
    tituloEvento = '{$tituloEvento}',
    descricaoEvento = '{$descricaoEvento}', 
    dataInicioEvento = '{$dataInicioEvento}',
    horaInicioEvento = '{$horaInicioEvento}',
    dataFimEvento = '{$dataFimEvento}',
    horaFimEvento = '{$horaFimEvento}',
    statusEvento = '{$statusEvento}'
WHERE idEvento = '{$idEvento}'";

$rs = mysqli_query($conexao, $sql);

if ($rs) {
?>
    <div class="row">
        <div class="alert alert-success col-6" role="alert">
            <h4 class="alert-heading">Sucesso ao Atualizar Evento!</h4>
            <button type="button" class="btn btn-success">
                <a href="index.php?menuop=eventos" class="link-light link-offset-0 link-underline-opacity-20 link-underline-opacity-100-hover">Voltar</a>
            </button>
            <hr>
            <p class="mb-0">Qualquer dúvida entrar em contato com o fornecedor do software (55) 0000-0000</p>
        </div>
    </div>
<?php
} else {
?>
    <div class="row">
        <div class="alert alert-danger col-4" role="alert">
            <h4 class="alert-heading">Erro ao atualizar, tente novamente mais tarde.</h4>
            <p>Volte para sua Lista de eventos ao clicar em eventos no menu.</p>
            <hr>
            <p class="mb-0">Caso o erro persista, entre em contato com o fornecedor do software (55) 0000-0000</p>
        </div>
    </div>
<?php } ?>
