<h3>Excluir Evento</h3>

<?php
$idEvento = mysqli_real_escape_string($conexao, $_GET["idEvento"]);

$sql = "DELETE FROM tbeventos WHERE idEvento = {$idEvento}";

$rs = mysqli_query($conexao, $sql);

if ($rs) {
?>
    <div class="row">
        <div class="alert alert-success col-6" role="alert">
            <h4 class="alert-heading">Sucesso ao Excluir Evento!</h4>
            <button type="button" class="btn btn-success">
                <a href="index.php?menuop=eventos" class="link-light link-offset-0 link-underline-opacity-20 link-underline-opacity-100-hover">Voltar</a>
            </button>
            <hr>
            <p class="mb-0">Qualquer dúvida entrar em contato com o fornecedor do software (55) 0000-0000 </p>
        </div>
    </div>
<?php
} else {
?>
    <div class="row">
        <div class="alert alert-danger col-4" role="alert">
            <h4 class="alert-heading">Erro ao excluir, tente novamente mais tarde.</h4>
            <p>Volte para sua Lista de eventos ao clicar em eventos no menu.</p>
            <hr>
            <p class="mb-0">Caso o erro persista, entre em contato com o fornecedor do software (55) 0000-0000 </p>
        </div>
    </div>
<?php } ?>
