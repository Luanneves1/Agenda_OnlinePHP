<header>
    <h3><i class="bi bi-list-task"></i> Tarefas</h3>
</header>
<?php
// Campo de PESQUISA 
$txt_pesquisa = isset($_POST["txt_pesquisa"]) ? $_POST["txt_pesquisa"] : "";

// Verifica se os parâmetros GET foram recebidos corretamente
$idTarefa = isset($_GET['idTarefa']) ? (int)$_GET['idTarefa'] : 0;
$statusTarefa = isset($_GET['statusTarefa']) && $_GET['statusTarefa'] == '0' ? 1 : 0;

// Atualiza o status da tarefa apenas se os parâmetros estiverem corretos
if ($idTarefa > 0) {
    // Utilização de consulta preparada para evitar SQL injection
    $sql = "UPDATE tbtarefas SET statusTarefa = ? WHERE idTarefa = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $statusTarefa, $idTarefa);
    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        die("Erro ao executar a query de atualização: " . mysqli_error($conexao));
    }
}
?>

<div class="col-5">
    <form action="index.php?menuop=tarefas" method="post">

        <div class="input-group ">
            <input class="form-control" type="text" name="txt_pesquisa" value="<?= $txt_pesquisa ?>">
            <button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-search"></i> Pesquisar</button>

    </form>
</div>

</div>

<div class="Novo-Contato">
    <a class="btn btn-light btn-secondary mb-2" href="index.php?menuop=cad-tarefa"><i class="bi bi-list-task"></i> Nova Tarefa</a>
</div>

<div class="tabela ">
    <table class="table table-light  table-hover table-bordered border-light">
        <thead>
            <tr class="table-dark">
                <th>Status</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data da Conclusão</th>
                <th>Hora da Conclusão</th>
                <th>Editar</th>
                <th>Excluir</th>

            </tr>
        </thead>


        <tbody>
            <?php

            $quantidade = 10;

            $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;

            $inicio = ($quantidade * $pagina) - $quantidade;




            $query = "SELECT
            idTarefa, 
            statusTarefa,
            tituloTarefa,
            descricaoTarefa,
            DATE_FORMAT(dataConclusaoTarefa, '%d/%m/%Y') AS dataConclusaoTarefa,
            horaConclusaoTarefa 
            FROM tbtarefas
            WHERE 
            tituloTarefa LIKE '%{$txt_pesquisa}%' OR 
            descricaoTarefa LIKE '%{$txt_pesquisa}%' OR
            DATE_FORMAT(dataConclusaoTarefa, '%d/%m/%Y') LIKE '%{$txt_pesquisa}%'
            ORDER BY statusTarefa, dataConclusaoTarefa 
            LIMIT $inicio, $quantidade
            ";

            $rs = mysqli_query($conexao, $query) or die("erro ao executar a consulta select" . mysqli_error($conexao));

            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>

                <tr>

                    <td>
                        <a class="btn-btn-secondary btn-sm" href="index.php?menuop=tarefas&pagina=<?=$pagina?>&idTarefa=<?=$dados['idTarefa']?>&statusTarefa=<?=$dados['statusTarefa']?>">

                            <?php
                            if ($dados['statusTarefa'] == 0) {
                                echo '<i class="bi bi-square "></i>';
                            } else {
                                echo '<i class="bi bi-check-square"></i>';
                            }
                            ?>


                        </a>
                    </td>
                    <td class="text-nowrap"><?= $dados["tituloTarefa"] ?></td>
                    <td><?= $dados["descricaoTarefa"] ?></td>
                    <td><?= $dados["dataConclusaoTarefa"] ?></td>
                    <td><?= $dados["horaConclusaoTarefa"] ?></td>

                    <td class='text-center'><a class='btn btn-warning' href="index.php?menuop=editarTarefa&idTarefa=<?= $dados["idTarefa"] ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class='text-center'><a class='btn btn-danger' href="index.php?menuop=excluirTarefa&idTarefa=<?= $dados["idTarefa"] ?>"><i class="bi bi-trash3"></i></a></td>

                </tr>

            <?php
            };
            ?>
        </tbody>

    </table>
</div>

<ul class="pagination justify-content-center">
    <?php
    $sqlTotal = "SELECT idTarefa FROM tbtarefas";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die(mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPaginas = ceil($numTotal / $quantidade);

    echo " <li class='page-item'><span class= 'page-link'>Total de Registro:" . $numTotal . "</span></li>";

    echo '<li class="page-item"> <a class="page-link" href="?menuop=tarefas&pagina=1">Primeira Página </a></li>';

    if ($pagina > 5) {
    ?>

        <li class="page-item"><a class="page-link" href="?menuop=tarefas&pagina=<?php echo $pagina - 1 ?>">
                << </a>
        </li>
    <?php
    }


    for ($i = 1; $i <= $totalPaginas; $i++) {

        if ($i >= ($pagina - 4) && $i <= ($pagina + 5)) {

            if ($i == $pagina) {
                echo "<li class='page-item active'> <span class='page-link'>$i</span> </li>";
            } else {
                echo "<li class='page-item'><a class='page-link'  href=\"?menuop=tarefas&pagina=$i\">$i</a> </li>";
            }
        }
    }

    if ($pagina < ($totalPaginas - 5)) {
    ?>
        <li class='page-item'> <a class="page-link" href="?menuop=tarefas&pagina=<?php echo $pagina + 1 ?>">
                >> </a> </li>

    <?php
    }

    echo "<li class='page-item' > <a class='page-link'  href=\"?menuop=tarefas&pagina=$totalPaginas\">Última Página</a></li>";


    ?>
</ul>