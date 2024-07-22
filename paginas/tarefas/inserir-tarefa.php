<header>
    <h3>
        <i class="bi bi-list-task"></i> Inserir Tarefa
    </h3>

</header>
<?php
$tituloTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['tituloTarefa']));
$descricaoTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['descricaoTarefa']));
$dataConclusaoTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['dataConclusaoTarefa']));
$horaConclusaoTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['dataConclusaoTarefa']));
$dataLembreteTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['dataLembreteTarefa']));
$horaLembreteTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['horaLembreteTarefa']));
$recorrenciaTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['recorrenciaTarefa']));


$sql = "INSERT INTO tbtarefas (
tituloTarefa,
descricaoTarefa,
dataConclusaoTarefa,
horaConclusaoTarefa,
dataLembreteTarefa,
horaLembreteTarefa,
recorrenciaTarefa 
)
 VALUES(
 '{$tituloTarefa}',
 '{$descricaoTarefa}',
 '{$dataConclusaoTarefa}',
 '{$horaConclusaoTarefa}',
 '{$dataLembreteTarefa}',
 '{$horaLembreteTarefa}',
 '{$recorrenciaTarefa}'
 )

";

$rs = mysqli_query($conexao, $sql);
?>
<?php
if ($rs) {
?>
    <div class="row">
        <div class="alert alert-success col-6" role="alert">
            <h4 class="alert-heading">Sucesso ao Cadastrar Tarefa!</h4>

            <button type="button" class="btn btn-success"><a href="index.php?menuop=tarefas" class="link-light link-offset-0 link-underline-opacity-20 link-underline-opacity-100-hover">Voltar</a> </button>
            <hr>
            <p class="mb-0">Qualquer dúvida entrar em contato com o fornecedor do software (55) 0000-0000 </p>
        </div>
    </div>

<?php

} else {
?>
    <div class="row">
        <div class="alert alert-danger col-4" role="alert">
            <h4 class="alert-heading">Erro ao inserir, tente novamente mais tarde.</h4>
            <p>Volte para sua Lista de tarefas ao clicar em tarefas no menu.</p>
            <hr>
            <p class="mb-0">Caso o Erro pesistar entrar em contato com o fornecedor do software (55) 0000-0000 </p>
        </div>
    </div>
<?php } ?>