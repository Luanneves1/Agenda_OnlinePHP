<h3>Excluir Tarefa</h3>

<?php
$idTarefa = mysqli_real_escape_string($conexao, $_GET["idTarefa"]);

$sql = "DELETE FROM tbtarefas WHERE idTarefa = {$idTarefa}";

$rs = mysqli_query($conexao, $sql);

if ($rs) {
?>
    <div class="row">
        <div class="alert alert-success col-6" role="alert">
            <h4 class="alert-heading">Sucesso ao Excluir Tarefa!</h4>
            <button type="button" class="btn btn-success">
                <a href="index.php?menuop=tarefas" class="link-light link-offset-0 link-underline-opacity-20 link-underline-opacity-100-hover">Voltar</a>
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
            <p>Volte para sua Lista de tarefas ao clicar em tarefas no menu.</p>
            <hr>
            <p class="mb-0">Caso o erro persista, entre em contato com o fornecedor do software (55) 0000-0000 </p>
        </div>
    </div>
<?php } ?>