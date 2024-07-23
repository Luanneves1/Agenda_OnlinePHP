<h3>Excluir Tarefa</h3>

<?php
$idTarefa = mysqli_real_escape_string($conexao, $_GET["idTarefa"]);

$sql = "DELETE FROM tbtarefas WHERE idTarefa = {$idTarefa}";

$rs = mysqli_query($conexao, $sql);

if ($rs) {
    echo "Excluido com sucesso";
} else {
    echo "Erro ao Excluir a tarefa";
}

?>