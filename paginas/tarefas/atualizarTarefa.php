<header>
    <h3>Atualizar Tarefa</h3>
</header>

<?php
$idTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['idTarefa']));
$tituloTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['tituloTarefa']));
$descricaoTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['descricaoTarefa']));
$dataConclusaoTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['dataConclusaoTarefa']));
$horaConclusaoTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['horaConclusaoTarefa']));
$dataLembreteTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['dataLembreteTarefa']));
$horaLembreteTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['horaLembreteTarefa']));
$recorrenciaTarefa = strip_tags(mysqli_real_escape_string($conexao, $_POST['recorrenciaTarefa']));


$sql = "UPDATE tbtarefas SET
tituloTarefa = '{$tituloTarefa}',
descricaoTarefa = '{$descricaoTarefa}', 
dataConclusaoTarefa = '{$dataConclusaoTarefa}',
horaConclusaoTarefa = '{$horaConclusaoTarefa}',
dataLembreteTarefa = '{$dataLembreteTarefa}',
horaLembreteTarefa = '{$horaLembreteTarefa}',
recorrenciaTarefa = '{$recorrenciaTarefa}'
WHERE idTarefa = '{$idTarefa}'
";

$rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta: ".mysqli_error($conexao));
echo ("O registro foi atualizado com sucesso!");
?>
